@extends('layouts.app')

@section('content')

<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="{{ asset('img/agroecology.jpg') }}">
    <div class="container h-100">
        <div class="hero-content text-white">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 pr-0 pt-5 mt-5 text-center" style="width: 90vw">
                    <h2>FRN Toolkit</h2>
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
</section>
<!-- Hero section end -->

<div class="container d-flex">
    <div class="row px-3 px-md-0">
        <div class="col-md-10 offset-md-1">

        <p>Lorem ipsum nullam tortor amet neque lacinia integer lacus, sit fringilla diam posuere volutpat quam tristique vehicula, velit in viverra aliquet augue ut quam curabitur erat sapien facilisis tincidunt consectetur.</p>
    <p class="py-3 mb-5">Nulla augue nunc proin etiam curabitur rutrum sagittis venenatis a aenean, laoreet malesuada leo dictumst mi et egestas in etiam vehicula, ut tristique volutpat eget luctus non justo fames primis ligula ornare molestie vulputate arcu.</p>


            <h2 class="mb-3">How does it work?</h2>
            <p>Lorem ipsum velit habitant in donec condimentum inceptos leo gravida vivamus convallis, sem fermentum hac amet aptent conubia luctus neque elementum tempus rhoncus, quam nunc cras litora augue fermentum pulvinar placerat faucibus lacus vulputate dolor justo in quam curae a quis malesuada euismod ultricies nullam lacus.</p>
            <h3>Tempus diam</h3>
            <p>Gravida eu porta felis amet tempor ullamcorper pellentesque dui etiam, euismod tincidunt vehicula conubia vehicula tellus proin sapien curabitur, tellus orci eleifend platea bibendum et orci tellus habitasse accumsan fusce viverra cubilia malesuada quam, mollis fames et at tristique vel posuere, lacus nibh commodo eget libero.</p>
            <h3>Risus</h3>
            <p>Lorem ipsum ligula eget risus at hendrerit scelerisque, ultrices cras tempor dictumst habitant dictumst, cras volutpat aliquet cursus nam primis phasellus scelerisque duis risus nec lacus condimentum magna in congue taciti platea et, litora vivamus platea luctus malesuada morbi quis nibh nostra consequat tortor lorem senectus posuere ac sociosqu.</p>
    <p>Sit ac praesent inceptos enim ornare diam nisl, vulputate habitant nibh velit tortor curabitur per, molestie ut curabitur a luctus magna fusce netus nisi proin magna conubia eget maecenas integer etiam ipsum posuere.</p>

           
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