@extends('layouts.app')

@section('content')

<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="{{ asset('img/agroecology.jpg') }}" style="height:250px">
    <div class="container h-100">
        <div class="hero-content text-white">
            <div class="d-flex justify-content-center">
                    <h3>Collaborate</h3>
                </div>
            </div>
            <div class="hero-rocket">
                <img src="./img/rocket.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->

<div class="container my-4">

<h2>How to get involved</h2>
<h3>Share your own tools!</h3>
<p>If you have your own data collection tools, you can share them with the community. You can register on this platform (or are already registered on our RMS / CCRP group(s) from somewhere?? ) then upload your own tools, along with information about how to use them.</p>
<h3>Get involved in reviewing the collection!</h3>
<p>Our goal is to ensure that everything shared here with the community is reviewed by the community. If you want to offer your expertise to help this process, please contact us.</p>
<h3>Find other CCRP / RMS resources</h3>
<p>## LINKS TO INTERESTING PLACES</p>
<h3>Talk to the RMS network</h3>
<p>CONTACT US - sign up to Whatsapp lists and email mailing lists</p>
</div>

@endsection