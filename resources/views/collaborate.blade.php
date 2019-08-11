@extends('layouts.app')

@section('content')

<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="{{ asset('img/agroecology.jpg') }}" style="height:400px !important">
    <div class="container h-100">
        <div class="hero-content text-white" style="align-items: flex-end">
            <div class="d-flex justify-content-center pb-5">
                <div class="col-lg-12 pr-0 text-center">
                    <h2>Collaborate</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->

<div class="container d-flex">
    <div class="row px-3 px-md-0">
        <div class="col-md-10 offset-md-1">

            <h2>How to get involved</h2>
            <h4>Share your own tools!</h4>
            <p>If you have your own data collection tools, you can share them with the community. You can register on this platform (or are already registered on our RMS / CCRP group(s) from somewhere?? ) then upload your own tools, along with information about how to use them.</p>
            <h4>Get involved in reviewing the collection!</h4>
            <p>Our goal is to ensure that everything shared here with the community is reviewed by the community. If you want to offer your expertise to help this process, please contact us.</p>
            <h4>Find other CCRP / RMS resources</h4>
            <p>## LINKS TO INTERESTING PLACES</p>
            <h4>Talk to the RMS network</h4>
            <p>CONTACT US - sign up to Whatsapp lists and email mailing lists</p>
        </div>
    </div>
</div>
@endsection