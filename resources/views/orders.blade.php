@extends('layouts.medApp')

@section('header_content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-100">
                <div class="card">
                    <div class="card-header"><strong>Cart</strong></div>
                    <table id="userCart" class="datatable mdl-data-table dataTable" cellspacing="0"
                           width="100%" role="grid" style="text-align: center; width: 100%;">
                        <thead class="thead-dark"  >
                        <tr>
                            <th scope="col" style ="width: 12%;">Image</th>
                            <th scope="col" style ="width: 15%;">Equipment Id</th>
                            <th scope="col" style ="width: 15%;">Name</th>
                            <th scope="col" style ="width: 12%;">Brand</th>
                            <th scope="col" style ="width: 12%;">Category</th>
                            <th scope="col" style ="width: 9%;">Price</th>
                            <th scope="col" style ="width: 9%;">Quantity</th>
                            <th scope="col" style ="width: 12%;">Sub-Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                        $total = 0;
                        @endphp
                        @foreach($cartInfo as $cartItem)
                            @php
                            $equipment = $cartItem->equipment();
                            $total = $total + ($equipment->price * $cartItem->quantity);
                            @endphp

                        <tr>
                            <td scope="row"><img src="images/product/{{$equipment->image}}" width="auto" height="100px"/></td>
                            <td> {{$equipment->equipment_id}} </td>
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


                <form name="Purchase" method="POST" action="{{ route('purchase') }}">
                    @csrf
                    <div class="form-group">
                                <br/>
                        <input  class="btn btn-primary py-2 px-3" type="submit" name="confirm" value="Purchase">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


