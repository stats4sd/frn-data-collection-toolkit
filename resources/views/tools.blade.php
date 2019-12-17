@extends('layouts.smhead')

@section('title')
Tools
@endsection


@section('content')


<div class="container d-flex">
    <div class="row px-3 px-md-0">
        <div class="col-md-10 offset-md-1 px-md-5">
            <p>Below you can explore our curated collection of resources for use with FRNs. Browse
                the categories to find useful tools or search the database.</p>
            <p>The collection is selected by and for the CCRP network. <strong>We are seeking contributions</strong>; if you have a tool or resource you want to share, please <a href="{{ url('contact') }}">contact us</a>.</p>
        </div>
    </div>
</div>


<div class="container my-4 d-flex">
    <div class="row">
        <div class="col-md mt-4">
            <h2 class="mb-5">Featured Tools and Collections</h2>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container img-gradient">
                            <a class="stretched-link" href="{{ url('resources/395') }}">
                                <img class="d-block w-100" src="/img/feature1.jpg" alt="First slide">
                            </a>
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <a class="stretched-link" href="{{ url('resources/395') }}"><h3>Designing Participatory On-Farm Experiments</h3>
                                <p>A collection of training materials to support the design of participatory on-farm experiments. </p>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container img-gradient">
                        <a class="stretched-link" href="{{ url('resources/456') }}">
                            <img class="d-block w-100" src="/img/feature2.png" alt="Second slide">
                        </a>
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <a class="stretched-link" href="{{ url('resources/456') }}"><h3>Global Community Action Guides</h3>
                            <p>Guides from the International Accountability Project on conducting community-led research.</p></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container img-gradient">
                        <a class="stretched-link" href="{{ url('resources/450') }}">
                            <img class="d-block w-100" src="/img/feature3.jpg" alt="Third slide">
                            </a>
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                        <a class="stretched-link" href="{{ url('resources/450') }}"><h3>Using Photography in Reseach</h3>
                                <p>Ideas about different ways photograpy can be used in the field.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="{{ url('#carouselExampleIndicators') }}" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="{{ url('#carouselExampleIndicators') }}" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container px-4">

    <div class="row pt-5">
        <h2 class="mb-5">Browse Resources</h2>
        <p>See resources we have relating to various areas of FRN work. You can browse by FRN process, category, or search through the whole database.</p>
        <h3 class="mt-4">FRN Processes</h3>
        <p>Browse resources relating to the different stages of FRN research.</p>
</div>
<div class="row pt-4 frnproc mb-5 justify-content-center" style="margin-left: calc( -15px - 0.4rem );">

        <div class="col-lg-2 col-md-4 col-sm-6">
            <button class="checkdiv " style="height: 100%; padding: 1rem; max-width: 90vw; text-align: center;">
                <a href="{{ url('collections/14') }}">
                    <img src="/img/frn1.png" style="display: block;  width: 60%; height: auto; max-width: 235px; margin: 0px auto 1rem auto; ">
                    <span style="float: bottom; width: 100%; text-align: center; color: #ffffff !important;">Engage</span>
                </a>
            </button>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
            <button class="checkdiv " style="height: 100%; padding: 1rem; max-width: 90vw; text-align: center;">
            <a href="{{ url('collections/15') }}">
                <img src="/img/frn2.png" style="display: block;  width: 60%; height: auto; max-width: 235px; margin: 0px auto 1rem auto; ">
                <span style="float: bottom; width: 100%; text-align: center; color: #ffffff !important;">Prioritize</span>
            </a>
            </button>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
            <button class="checkdiv " style="height: 100%; padding: 1rem; max-width: 90vw; text-align: center;">
            <a href="{{ url('collections/16') }}">
                <img src="/img/frn3.png" style="display: block;  width: 60%; height: auto; max-width: 235px; margin: 0px auto 1rem auto; ">
                <span style="float: bottom; width: 100%; text-align: center; color: #ffffff !important;">Design</span></a>
            </button>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
            <button class="checkdiv " style="height: 100%; padding: 1rem; max-width: 90vw; text-align: center;">
            <a href="{{ url('collections/13') }}">
                <img src="/img/frn4.png" style="display: block;  width: 60%; height: auto; max-width: 235px; margin: 0px auto 1rem auto; ">
                <span style="float: bottom; width: 100%; text-align: center; color: #ffffff !important;">Collect and Handle</span>
                </a>
            </button>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
            <button class="checkdiv " style="height: 100%; padding: 1rem; max-width: 90vw; text-align: center;">
            <a href="{{ url('collections/17') }}">
                <img src="/img/frn5.png" style="display: block;  width: 60%; height: auto; max-width: 235px; margin: 0px auto 1rem auto; ">
                <span style="float: bottom; width: 100%; text-align: center; color: #ffffff !important;">Observe</span>
                </a>
            </button>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
            <button class="checkdiv " style="height: 100%; padding: 1rem; max-width: 90vw; text-align: center;">
                <a href="{{ url('collections/18') }}">
                <img src="/img/frn6.png" style="display: block;  width: 60%; height: auto; max-width: 235px; margin: 0px auto 1rem auto; ">
                <span style="float: bottom; width: 100%; text-align: center; color: #ffffff !important;">Analyse</span>
                </a>
            </button>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
            <button class="checkdiv " style="height: 100%; padding: 1rem; max-width: 90vw; text-align: center;">
                <a href="{{ url('collections/19') }}">
                <img src="/img/frn7.png" style="display: block;  width: 60%; height: auto; max-width: 235px; margin: 0px auto 1rem auto; ">
                <span style="float: bottom; width: 100%; text-align: center; color: #ffffff !important;">Communicate</span>
                </a>
            </button>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
            <button class="checkdiv " style="height: 100%; padding: 1rem; max-width: 90vw; text-align: center;">
                <a href="{{ url('collections/20') }}">
                <img src="/img/frn8.png" style="display: block;  width: 60%; height: auto; max-width: 235px; margin: 0px auto 1rem auto; ">
                <span style="float: bottom; width: 100%; text-align: center; color: #ffffff !important;">Implement changes</span>
                </a>
            </button>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
            <button class="checkdiv " style="height: 100%; padding: 1rem; max-width: 90vw; text-align: center;">
                <a href="{{ url('collections/21') }}">
                <img src="/img/frn9.png" style="display: block;  width: 60%; height: auto; max-width: 235px; margin: 0px auto 1rem auto; ">
                <span style="float: bottom; width: 100%; text-align: center; color: #ffffff !important;">Assess Impact</span>
                </a>
            </button>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
            <button class="checkdiv frnmore" style="height: 100%; padding: 1rem; max-width: 90vw; text-align: center;">
                <a href="{{ url('resources?refinementList[tags.name.en][0]=AEI%20for%20review&refinementList[tags.name.en][1]=FRN&refinementList[tags.name.en][2]=Farmer%20Analysis&refinementList[tags.name.en][3]=Participatory&refinementList[tags.name.en][4]=Farmer%20Participatory%20Research&refinementList[tags.name.en][5]=Pest%20Management#resources-app') }}">
                <img src="/img/frnmore.png" style="display: block;  width: 60%; height: auto; max-width: 235px; margin: 0px auto 1rem auto; ">
                <span style="float: bottom; width: 100%; text-align: center; color: #ffffff !important;">See All</span>
                </a>
            </button>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6" style="height: 1px; min-height:1px;">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6" style="height: 1px; min-height:1px;">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6" style="height: 1px; min-height:1px;">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6" style="height: 1px; min-height:1px;">
    </div>
</div>

<div class="row pt-4 mb-3">
            <h3>Browse Categories</h3>
</div>

<div class="row pb-4 img-block" style="justify-content: left !important;">
            <div class="col-xl-3 col-lg-4 col-md-6">


                    <a href="{{ url('collections/22') }}">
                        <button class="ib1 button2" style="width: 100%" type="button">
                            <span>Soils</span>
                        </button>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="{{ url('collections/23') }}">
                    <button class="ib2 button2" style="width: 100%" type="button">
                        <span>Agroecology Techniques</span>
                    </button>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="{{ url('collections/24') }}">
                    <button class="ib3 button2" style="width: 100%" type="button">
                        <span>Pest Management</span>
                    </button>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="{{ url('collections/25') }}">
                    <button class="ib4 button2" style="width: 100%" type="button">
                        <span>Gender</span>
                    </button>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="{{ url('collections/26') }}">
                    <button class="ib5 button2" style="width: 100%" type="button">
                        <span>Participatory Research</span>
                    </button>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="{{ url('collections/27') }}">
                    <button class="ib6 button2" style="width: 100%" type="button">
                        <span>Evaluation</span>
                    </button>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="{{ url('collections/28') }}">
                    <button class="ib7 button2" style="width: 100%" type="button">
                        <span>Local Knowledge</span>
                    </button>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="{{ url('resources?refinementList[tags.name.en][0]=AEI%20for%20review&refinementList[tags.name.en][1]=FRN&refinementList[tags.name.en][2]=Farmer%20Analysis&refinementList[tags.name.en][3]=Participatory&refinementList[tags.name.en][4]=Farmer%20Participatory%20Research&refinementList[tags.name.en][5]=Pest%20Management#resources-app') }}">
                    <button class="ib8 button2" style="width: 100%" type="button">
                        <span>All Categories</span>
                    </button>
                    </a>
                </div>
            </div>


    <div class="row pt-5">
        <h3 class="mb-5">View all Tools</h3>
        <p>Browse by tag or search for keywords in the database of FRN-related tools. This database is powered by the <a href="https://stats4sd.org/resources">Stats4SD Resources Repository</a>, which contains hundreds of resources across a broad range of topics, including statistics, data analysis and research methods.</p>
    </div>
    <div class="row justify-content-center">
        <a href="{{ url('resources?refinementList[tags.name.en][0]=AEI%20for%20review&refinementList[tags.name.en][1]=FRN&refinementList[tags.name.en][2]=Farmer%20Analysis&refinementList[tags.name.en][3]=Participatory&refinementList[tags.name.en][4]=Farmer%20Participatory%20Research&refinementList[tags.name.en][5]=Pest%20Management#resources-app') }}">
            <button class="site-btn my-4 mx-auto" style="display: inline-block!">
                                                Browse all Tools
                                            </button>
                                            </a>
</div>

</div>
<!--






@endsection