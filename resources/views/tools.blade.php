@extends('layouts.app')

@section('content')
<!--
<img src="{{ asset('img/odk-builder.jpg') }}" style="width: 100vw"/>
-->

<section class="hero-section set-bg" data-setbg="{{ asset('img/agroecology.jpg') }}" style="height:400px !important">
    <div class="container h-100">
        <div class="hero-content text-white" style="align-items: flex-end">
            <div class="d-flex justify-content-center pb-5">
                <div class="col-lg-12 pr-0 text-center">
                    <h2>Tools</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container d-flex">
    <div class="row px-3 px-md-0">
        <div class="col-md-10 offset-md-1 px-md-5">

            <p>Intro text goes here. Below you can explore our curated collection of resources for use with FRNs. Browse
                the categories to find useful tools or scroll down to search the database.</p>
            <p>This is another paragraph of intro text. It might contain further information about how these tools have
                been collected and how to use them.</p>



        </div>
    </div>
</div>


<div class="container my-4 d-flex">
    <div class="row">
        <div class="col-md mt-4">
            <h3 class="mb-5">Featured Tools and Collections</h3>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container img-gradient">
                            <a class="stretched-link" href="{{ url('surveybuilder') }}">
                                <img class="d-block w-100" src="/img/surveybuild.png" alt="First slide">
                            </a>
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <a class="stretched-link" href="{{ url('surveybuilder') }}"><h3>Survey Builder</h3>
                                <p>Select from standardised indicators and question modules to generate an ODK form for your data collection.</p>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container img-gradient">
                        <a class="stretched-link" href="{{ url('indicators') }}">
                            <img class="d-block w-100" src="/img/tool2.jpg" alt="Second slide">
                        </a>
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <a class="stretched-link" href="{{ url('indicators') }}"><h3>Indicators List</h3>
                            <p>View a list of indicators sorted by category to easily find relevant listings in our database.</p></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container img-gradient">
                            <img class="d-block w-100" src="/img/tool3.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Featured Resource 3</h3>
                            <p>Resource caption text</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container px-4">

    <div class="row pt-5">
        <h3 class="mb-5">Browse Resources</h3>
        <p>See resources we have relating to various areas of FRN work. You can browse by FRN process, category, or scroll to the bottom of the page to search through the whole database.</p>
        <h4>FRN Processes</h4>
                    <!-- 1. Engage

                a. Build network
                b. Engage farmers

            2. Prioritize

                a. Diagnosis
                b. Seek options

            3. Design

                a. Planning
                b. Design studies 
                c. Strengthen capacities 
                d. Learning out (training) 

            4. Collect and handle 
                
                a. Collect data 
                b. Test options 
                c. Manage data 

            5. Observe 

                a. Thinking / Reflecting / Growing 

            6. Analyze 

                a. Analyze data 

            7. Communicate 

                a. Share insights 
                b. Communicate (out and between) 

            8. Implement changes 

                a. Seek change in practice 
                b. Contextualized scaling 
                c. Market engagement 
                d. Learn / inspire others 

            9. M&E, assess impact -->


            <h4>Browse Categories</h4>
</div>

<div class="row pb-4 img-block" style="justify-content: left !important;">
            <div class="col-xl-3 col-lg-4 col-md-6">

 
                    <a href="{{ url('indicators') }}">        
                        <button class="ib1 button2" style="width: 100%" type="button">
                            <span>Indicators</span>
                        </button>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <button class="ib2 button2" style="width: 100%" type="button">
                        <span>Soils</span>
                    </button>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <button class="ib3 button2" style="width: 100%" type="button">
                        <span>Labour</span>
                    </button>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <button class="ib4 button2" style="width: 100%" type="button">
                        <span>Markets</span>
                    </button>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <button class="ib5 button2" style="width: 100%" type="button">
                        <span>Farmer Typologies</span>
                    </button>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <button class="ib6 button2" style="width: 100%" type="button">
                        <span>Qualitative</span>
                    </button>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <button class="ib7 button2" style="width: 100%" type="button">
                        <span>Quantitative</span>
                    </button>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <button class="ib8 button2" style="width: 100%" type="button">
                        <span>PPI</span>
                    </button>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <button class="ib1 button2" style="width: 100%" type="button">
                        <span>FRN Process Step 1</span>
                    </button>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <button class="ib2 button2" style="width: 100%" type="button">
                        <span>FRN Process Step 2</span>
                    </button>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <button class="ib3 button2" style="width: 100%" type="button">
                        <span>FRN Process Step 3</span>
                    </button>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <button class="ib4 button2" style="width: 100%" type="button">
                        <span>FRN Process Step 4</span>
                    </button>
                </div>
            </div>


    <div class="row pt-5">
        <h3 class="mb-5">View all Tools</h3>
</div>

</div>
<!--




   

@endsection