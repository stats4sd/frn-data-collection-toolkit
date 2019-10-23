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
            <h4>Share your own tools</h4>
            <p>We've jumpstarted this platform with a selection of relevant resources from our collection, but long-term we want this to be a truly <strong>community-driven</strong> toolkit. If you have a resource, workshop activity plan, survey or any kind of tool or template that's worked well for you, then perhaps other FRNs, facilitators or CCRP projects might be able to adapt for use in their work. Consider sharing it so that CCRP projects can support each other to grow.</p>
            <!-- <p>If you have your own data collection tools, you can share them with the community. You can register on this platform (or are already registered on our RMS / CCRP group(s) from somewhere?? ) then upload your own tools, along with information about how to use them.</p> -->
            <h4>Get involved in reviewing the collection</h4>
            <p>Our goal is to ensure that everything shared here with the community is reviewed by the community. We're looking for volunteers to review suggestions and work with contributors to provide the network with great, useful tools that will really make an impact on research work across CCRP. If you want to offer your expertise to help this process, please contact us.</p>
            <!-- <h4>Find other CCRP / RMS resources</h4>
            <p>## LINKS TO INTERESTING PLACES</p> -->
            <h4>Give suggestions and feedback</h4>
		<p>We want to hear from you, the prospective users of this platform, to find out what you want from it. We are seeking suggestions, requests and comments from 	CCRP projects, grantees, and anyone working with FRNs. Please <a href="{{ url('contact') }}">get in touch</a>.
            <h4>Talk to the RMS network</h4>
            <p>Keep up to date - <a href="https://stats4sd.org/ccrp">sign up to Whatsapp lists and email mailing lists</a></p>
        </div>
    </div>
</div>
@endsection