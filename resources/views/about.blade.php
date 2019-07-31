@extends('layouts.app')

@section('content')

<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="{{ asset('img/agroecology.jpg') }}" style="height:200px">
    <div class="container h-100">
        <div class="hero-content text-white">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 pr-0 mb-4 text-center">
                    <h3>ABOUT</h3>
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
            <h2 class="mb-4">Core Tenets of the Platform</h2>
                <ol class="ml-4">
                <li class="mb-2">Tools shared through the platform are <strong>not prescriptive</strong>. They are templates/ideas/tools for users to take, modify, improve on and make their own.</li>
                <hr/>

                <li class="mb-2">Available tools <strong>should encourage 'good practice'</strong> in both data collection and study design / planning.</li>
                <hr/>

                <li class="mb-2">Available tools <strong>should include clear guidance</strong>, including:
                    <ul class="ml-4 mb-2">
                        <li>The intended purpose of the tool;</li>
                        <li>The structure of data that result from use of the tool;</li>
                        <li>Key indicators that the data collected through the tool can calculate;</li>
                        <li>Possible suggestions on how to contextuapse the tool;</li>
                    </ul>
                </li>
                <hr/>

                <li class="mb-2">The platform itself should be <strong>easy to use</strong>.
                    <ul class="ml-4 mb-2">
                        <li>It will initially be available onpne, so will be naturally targeted at internet-enabled researchers.</li>
                        <li>The tools should be easy to find, search and filter through.</li>
                        <li>The platform will translated into multiple languages. There will be a mechanism for including more languages in the future.</li>
                    </ul>
                </li>
                <hr/>

                <li class="mb-2">The platform will accept and be able to manage ODK form modules <strong>and analogue tools</strong>; both qualitative and quantitative instruments</li>
                <hr/>

                <li class="mb-2">The design of the platform will be sufficiently <strong>open to enable future development</strong>, e.g.:
                    <ul class="ml-4 mb-2">
                        <li>enabling quick packaging of particular sets of tools onto portable media (USB Sticks, DVDs)</li>
                    </ul>
                </li>
                <hr/>

                <li>The platform itself will be designed using <strong>open source</strong> technologies and the codebase of the platform will be available through a permissive open licence.</li>
            </ol>
    </div>
</section>
<!-- Features section end -->

@endsection