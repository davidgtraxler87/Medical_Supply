@extends('layouts.medApp')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">About MedSupply</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('/') }}">Home <i class="ion-ios-arrow-forward"></i></a></span></p>
                </div>
            </div>
        </div>
    </section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/about.jpg);">
            </div>
            <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
                <div class="heading-section mb-5">
                    <div class="pl-md-5 ml-md-5">

                        <h2 class="mb-4" style="font-size: 28px;">MedSupply is an e-commerce web application that is built for conceptual and learning purposes only.</h2>
                    </div>
                </div>
                <div class="pl-md-5 ml-md-5 mb-5">
                    <p>Northeastern State University's Computer Science department requires each student to take a Professional Development to graduate, and this project intends to satisfy that requirement. David Traxler, the developer responsible for this application, intends to showcase this project as an example of his skillset to potential employers.
                    <div>
                        <div>
                            <h3 class="mb-2 bread">Functionality</h3>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">User Authentication</li>
                                <li class="list-group-item">Dynamic datatables for product and cart storage</li>
                                <li class="list-group-item">Email server to fire emails to user regarding message and purchase confirmation</li>
                                <li class="list-group-item">Add to cart and products purchase functionality</li>
                            </ul>
                        </div>
                        <br/>
                        <div>
                            <h3 class="mb-2 bread">Built with:</h3>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">XAMPP (open-sourced web server solution stack)</li>
                                <li class="list-group-item">MySQL (open-source relational database management system)</li>
                                <li class="list-group-item">Laravel (PHP web framework) </li>
                                <li class="list-group-item">PHP (Server-side scripting language)</li>
                                <li class="list-group-item">Composer (Dependency Management)</li>
                                <li class="list-group-item">HTML (Markup Language)</li>
                                <li class="list-group-item">Bootstrap (CSS framework)</li>
                                <li class="list-group-item">Colorlib (Bootstrap template)</li>
                                <li class="list-group-item">Google Maps API (Static & Dynamic Maps)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
