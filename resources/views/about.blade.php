@extends('layouts.smhead')

@section('title')
About
@endsection

@section('content')

<!-- Features section -->
<section class="features-section mb-5 pb-5">
    <div class="container">
        <div class="row px-3 px-md-0">
            <div class="col-md-10 offset-md-1">
                <h2>What is the FRN Toolkit?</h2>
                <!-- <p class="mb-5">Watch the video below to find out more.</p> -->
                <div class="embed-responsive embed-responsive-16by9 mb-5">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/IRG0OZDD2yo"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <h2>How Does it Work?</h2>
            </div>
        </div>
        <div class="row py-3 px-5 mx-2">
            <div class="col-lg-4 icon-cap mt-5 mt-lg-0">
                <img src="/img/toolsg.png">
                <h4 class="text-center w-100 mt-4 pt-2">Access tools and resources</h4>
                <p class="w-100 text-center">
                    These are available on the <a href="{{ url('tools') }}">Tools page</a>, selected specifically with
                    FRNs and related work in mind. We hope to expand this collection and promote sharing and
                    collaboration across the network.</p>
                    <a href="{{ url('tools') }}">
                    <button class="site-btn my-4 mx-auto" style="display: inline-block!">
                        Browse the Collection
                    </button>
                </a>
                
            </div>
            <div class="col-lg-4 icon-cap mt-5 mt-lg-0" >
                <img src="/img/shareg.png">
                <h4 class="text-center w-100 mt-4 pt-2">Contribute to the platform</h4>
                <p class="w-100 text-center">
                    Anyone working with CCRP can <a href="{{ url('contact') }}">share resources</a> they have developed,
                    or which they have discovered to be most helpful, so that other FRNs, groups and projects can
                    benefit from them.</p>
                    <a href="{{ url('contact') }}">
                    <button class="site-btn my-4 mx-auto" style="display: inline-block!">
                        Share Resources
                    </button>
                </a>
            </div>
            <div class="col-lg-4 icon-cap mt-5 mt-lg-0">
                <img src="/img/checkg.png">
                <h4 class="text-center w-100 mt-4 pt-2"> Reviewed and curated collection</h4>
                <p class="w-100 text-center">
                    <a href="{{ url('contact') }}">Volunteer</a> reviewers from across CCRP will review the quality of new resources before they are shared, and
            ensure that the collection promotes good practice and is suitable for sharing.</p>
            <a href="{{ url('contact') }}">
                    <button class="site-btn my-4 mx-auto" style="display: inline-block!">
            Get Involved
                    </button>
                </a>
            </div>


    </div>

    <div class="row py-5 px-3 px-md-0">
        <div class="col-md-10 offset-md-1">

            <h2>Core Tenets of the Platform</h2>
            <p class="mb-5">These are our long-term aims for how the platform will work and what is to be included:</p>
            <ol class="ml-4">
                <li class="mb-2">Tools shared through the platform are <strong>not prescriptive</strong>. They are
                    templates/ideas/tools for users to take, modify, improve on and make their own.</li>
                <hr />

                <li class="mb-2">Available tools <strong>should encourage 'good practice'</strong> in both data
                    collection and study design / planning.</li>
                <hr />

                <li class="mb-2">Available tools <strong>should include clear guidance</strong>, including:
                    <ul class="ml-4 mb-2">
                        <li>The intended purpose of the tool;</li>
                        <li>The structure of data that result from use of the tool;</li>
                        <li>Key indicators that the data collected through the tool can calculate;</li>
                        <li>Possible suggestions on how to contextualise the tool;</li>
                    </ul>
                </li>
                <hr />

                <li class="mb-2">The platform itself should be <strong>easy to use</strong>.
                    <ul class="ml-4 mb-2">
                        <li>It will initially be available online, so will be naturally targeted at internet-enabled
                            researchers.</li>
                        <li>The tools should be easy to find, search and filter through.</li>
                        <li>The platform will translated into multiple languages. There will be a mechanism for
                            including more languages in the future.</li>
                    </ul>
                </li>
                <hr />

                <li class="mb-2">The platform will accept and be able to manage ODK form modules <strong>and analogue
                        tools</strong>; both qualitative and quantitative instruments</li>
                <hr />

                <li class="mb-2">The design of the platform will be sufficiently <strong>open to enable future
                        development</strong>, e.g.:
                    <ul class="ml-4 mb-2">
                        <li>enabling quick packaging of particular sets of tools onto portable media (USB Sticks, DVDs)
                        </li>
                    </ul>
                </li>
                <hr />

                <li>The platform itself will be designed using <strong>open source</strong> technologies and the
                    codebase of the platform will be available through a permissive open licence.</li>
            </ol>
        </div>
    </div>
    <div class="row px-3 px-md-0 justify-content-center">
        <a href="{{ url('collaborate') }}">
            <button class="site-btn my-4 mx-auto" style="display: inline-block!">
                Get Involved
            </button>
        </a>
    </div>
    <div class="row px-3 px-md-0">
        <div class="col-md-10 offset-md-1">
        </div>
    </div>
    </div>

</section>
<!-- Features section end -->

@endsection