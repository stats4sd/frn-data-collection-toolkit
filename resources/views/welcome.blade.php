@extends('layouts.lghead')

@section('top')
<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="{{ asset('img/agroecology.jpg') }}">
    <div class="container h-100">
        <div class="hero-content text-white">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 pr-0 pt-5 mt-5 text-center " style="width: 90vw">
                    <h2 class="text-white">FRN Toolkit</h2>
                    <h4 class="mt-4 pt-2 mb-3 mb-lg-5 pb-3 pb-lg-5">Tools and Resources for FRN activities</h4>
                    <div class="row pb-4">
                        <div class="col-xl-1 px-0 ml-3 ml-xl-5">
                        </div>
                        <div class="col-xl-3 col-lg-4 px-0 mx-0 order-2 order-lg-1">
                            <a href="{{ url('about') }}" class="btn btn-lg">About</a>
                        </div>
                        <div class="col-xl-3 col-lg-4 px-0 mx-0 order-1 order-lg-2">
                            <a href="{{ url('tools') }}" class="btn btn-primary btn-lg">Tools</a>
                        </div>
                        <div class="col-xl-3 col-lg-4 px-0 mx-0 order-3 order-lg-3">
                            <a href="{{ url('collaborate') }}" class="btn btn-lg">Contribute</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('content')


</section>
<!-- Hero section end -->

<div class="container">
    <div class="row px-3 px-md-0">
        <div class="col-md-10 offset-md-1">

        <p>The FRN Toolkit aims to provide a <b>platform for knowledge-sharing</b> between projects in the CCRP network.</p>
        <p>It contains a range of items to support FRNs, including learning materials to build capacity, tools, templates and ideas to help run activities, carry out research and more generally broaden the potential and quality of community research activities within CCRP. You can explore the collection on the <a href="{{ url('tools') }}">Tools</a> page. </p>
        <p>It is open to <a href="{{ url('contact') }}">submission</a> from anyone within CCRP who has a resource they would like to share. </p>
        <p>At present, this platform is in development, and we are seeking feedback from CCRP projects. We'd love to know if you're interested in the platform, if you have any suggestions or requests, or if you have any items you want to share. Please <a href="{{ url('contact') }}">contact us</a> if you would like to get involved. </p>
</div>
</div>
<div class="row px-3 px-md-0 justify-content-center">
            <a href="{{ url('about') }}">
                <button class="site-btn my-4 mx-auto" style="display: inline-block!">
                    Find out More
                </button>
            </a>
            </div>






        </div>
    </div>
</div>


<!-- Features section -->
<!--
<section class="features-section">
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
</section> -->
<!-- Features section end -->

@endsection