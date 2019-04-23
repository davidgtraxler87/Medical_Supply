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

                        <div class="row mt-5 pt-2">
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-first-aid-kit"></span></div>
                                <div class="text">
                                    <h3>Login/Register</h3>
                                    <p>User authentication workflow</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-dropper"></span></div>
                                <div class="text">
                                    <h3>Lab Test</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-experiment-results"></span></div>
                                <div class="text">
                                    <h3>Symptom Check</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-heart-rate"></span></div>
                                <div class="text">
                                    <h3>Heart Rate</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>We Provide Free Health Care Consultation</h2>
                <p class="mb-0">Your Health is Our Top Priority with Comprehensive, Affordable medical.</p>
                <p></p>
            </div>
            <div class="col-md-3 d-flex align-items-center">
                <p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Free Consutation</a></p>
            </div>
        </div>
    </div>
</section>

@endsection
