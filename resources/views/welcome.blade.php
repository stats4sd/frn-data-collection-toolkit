@extends('layouts.app')

@section('content')

<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="{{ asset('img/agroecology.jpg') }}">
    <div class="container h-100">
        <div class="hero-content text-white">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 pr-0 mb-4 text-center">
                    <h2>Farmer Research Networks</h2>
                    <h3>Data Collection Tools</h3>
                </div>
            </div>
            <div class="hero-rocket">
                <img src="./img/rocket.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->

<!-- Features section -->
<section class="features-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 feature-item">
                <div class="ft-icon">
                    <i class="flaticon-domain-registration"></i>
                </div>
                <a href="{{ url('about') }}"><h4>About this Toolkit</h4></a>
                <p></p>
            </div>
            <div class="col-lg-4 col-md-6 feature-item fi-center-top">
                <div class="ft-icon">
                    <i class="flaticon-server"></i>
                </div>
                <a href="{{ url('tools') }}"><h4>Tools</h4></a>
            </div>
            <div class="col-lg-4 col-md-6 feature-item">
                <div class="ft-icon">
                    <i class="flaticon-devices"></i>
                </div>
                <a href="{{ url('collaborate') }}"><h4>Collaborate!</h4></a>
            </div>
        </div>
    </div>
</section>
<!-- Features section end -->

@endsection