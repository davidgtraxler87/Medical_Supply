@extends('layouts.medApp')

@section('content')

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-6 text ftco-animate">
                    <h1 class="mb-6">Getting the products <span> you need, fast!</span></h1>
                    <h3 class="subheading">Quality products at your fingertips.</h3>
                    <p><a href="{{ route('products') }}" class="btn btn-secondary px-4 py-3 mt-3">View our products</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-6 text ftco-animate">
                    <h1 class="mb-4">We Care <span>About Your Institution's Needs</span></h1>
                    <h3 class="subheading">Helping you deliver quality </br> care to your patients.</h3>
                    <p><a href="{{ route('register') }}" class="btn btn-secondary px-4 py-3 mt-3">Register Now!</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-services ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-first-aid-kit"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Qualitfied Doctors</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-ambulance"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Emergency Care</h3>
                        <p>You care about your patients. So do we. We help you accomplish this by delivering quality products. To You. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-stethoscope"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Outdoor Checkup</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-24-hours"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">24 Hours Service</h3>
                        <p>Confused? Have an issue? Our technicians are waiting for something to break 24/7. We are here for you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
