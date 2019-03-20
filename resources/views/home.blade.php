@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div id="app">


                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @guest
                    Please log in or register.
                    @else (session('status'))
                        <!--
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        -->
                    You are logged in!
                    @endguest
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
