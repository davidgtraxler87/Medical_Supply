<!doctype html>
<html>
<head>
    <title>MedSupply</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
<div>
    <h1>Thank you, {{  $user->first_name }}, for your purchase! </h1>
    <p>The items you ordered are listed below. </p>

    <table id="userCart" class="datatable mdl-data-table dataTable" cellspacing="0"
           width="100%" role="grid" style="width: 100%;">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Equipment Id</th>
            <th scope="col">Name</th>
            <th scope="col">Brand</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Quanity</th>
            <th scope="col">Sub-Total</th>
        </tr>
        </thead>
        <tbody>
        @php
            $total = 0;
        @endphp
        @foreach($purchaseData as $cartItem)
            @php
                $equipment = $cartItem->equipment();
                $total = $total + ($equipment->price * $cartItem->quantity);
            @endphp

            <tr>
                <td scope="row">{{$equipment->equipment_id}}</td>
                <td>{{$equipment->name}}</td>
                <td>{{$equipment->brand}}</td>
                <td>{{$equipment->category}}</td>
                <td>{{$equipment->price}}</td>
                <td>{{$cartItem->quantity}}</td>
                <td>{{$equipment->price * $cartItem->quantity}}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="7"><b>Total</b></td>
            <td><b>{{$total}}</b></td>
        </tr>
        </tbody>

    </table>

</div>
</body>
</html>
