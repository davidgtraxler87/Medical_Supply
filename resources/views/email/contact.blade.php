<!doctype html>
<html>
<head>
    <title>MedSupply</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
<table>

    <tr>
        <td>You have an email from: </td>
        <td>{{ $name }}</td>
    </tr>
    <tr>
        <td>User's email address: </td>
        <td>{{ $email }}</td>
    </tr>
    <tr>
        <td>Subject: </td>
        <td>{{ $subject }}</td>
    </tr>
    <tr>
        <td>Message: </td>
        <td>{{ $detailText }}</td>

</table>
<!--
<div>
    <h1>You have an email from {{ $name }}</h1>
    <p>User's email address: {{ $email }}</p>
    <p>Subject: {{ $subject }}</p>
    <p>Message: {{ $detailText }}</p>

</div>
-->
</body>
</html>
