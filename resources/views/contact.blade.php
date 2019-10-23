@extends('layouts.app')

@section('content')

<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="{{ asset('img/agroecology.jpg') }}" style="height:400px !important">
    <div class="container h-100">
        <div class="hero-content text-white" style="align-items: flex-end">
            <div class="d-flex justify-content-center pb-5">
                <div class="col-lg-12 pr-0 text-center">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->

<div class="container d-flex">
    <div class="row px-3 px-md-0">
        <div class="col-md-10 offset-md-1">

            <p>Do you have a resource you want to share? Do you want to get involved in curating and reviewing our collection? Do you have comments or feedback for us? Use the form below to contact us, and we'll get back to you as soon as we can.</p>  
        </div>
    </div>
</div>
@endsection