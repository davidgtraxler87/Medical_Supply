@extends('layouts.medApp')

@section('header_content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-14">
                <div class="card">
                    <div class="card-header"><strong>Product Listing</strong></div>
                    <table id="equipmentTable" class="datatable mdl-data-table dataTable" cellspacing="0"
                           width="100%" role="grid" style="width: 100%;">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Equipment Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Stock Amount</th>
                            <th scope="col">Select</th>

                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_content')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#equipmentTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('equipment') }}',
                columns: [
                    { data: 'image' },
                    { data: 'equipment_id' },
                    { data: 'name' },
                    { data: 'brand' },
                    { data: 'category'},
                    { data: 'price'},
                    { data: 'stock_amount'},
                    { data: 'select', orderable: false, searchable: false },
                ]
            });
        });

    </script>
@endsection
