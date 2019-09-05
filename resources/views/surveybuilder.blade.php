@extends('layouts.app')

@section('content')
<!--
<img src="{{ asset('img/odk-builder.jpg') }}" style="width: 100vw"/>
-->

<section class="hero-section set-bg" data-setbg="{{ asset('img/agroecology.jpg') }}" style="height: 110px !important">
    <!-- <div class="container h-100">
        <div class="hero-content text-white" style="align-items: flex-end">
            <div class="d-flex justify-content-center pb-5">
                <div class="col-lg-12 pr-0 text-center">
                    <h2>Tools</h2>
                </div>
            </div>
        </div>
    </div> -->
</section>


<div class="container">
    <div class="row mx-1 mb-5">
        <h2>ODK Survey Builder</h2>

        <p>This text should contain a brief explanation of how to use the survey builder, what it's useful for and etc.
            Dave to draft? </p>
        <p>Lorem ipsum pellentesque curabitur torquent est tincidunt est semper mauris fringilla viverra, sollicitudin
            ipsum ullamcorper pharetra condimentum risus dapibus eget taciti fringilla, volutpat enim tempor curae justo
            dapibus odio justo cras odio morbi quisque tempor mattis nostra cubilia facilisis mollis ullamcorper etiam
            in vehicula, pulvinar lacus erat libero litora nisi feugiat aliquam metus erat.</p>
        <div style="text-align: center;" class="m-auto">
            <button class="site-btn my-4" data-toggle="collapse" href="#builder" aria-expanded="true"
                aria-controls="builder">
                Get started
            </button>
        </div>

    </div>
</div>
<!--progress bar to be made -->
<div id="surveybuilder" class="accordion-area">
    <div class="panel">
        <div id="builder" class="collapse" aria-labelledby="builder" data-parent="#surveybuilder">
            <div class="panel-body">
                <div class="w-100">
                    <div class="row form-prog justify-content-center">
                        <div class="col-10 h-100">



                            <div class="container pbcont d-none d-sm-block">
                                <ul class="progressbar">
                                    <li class="pb_done">
                                        <h3>Step 1</h3> Information Needs
                                    </li>
                                    <li class="pb_active">
                                        <h3>Step 2</h3>Indicators
                                    </li>
                                    <li>
                                        <h3>Step 3</h3>Questions
                                    </li>
                                    <li>
                                        <h3>Step 4</h3>Preview and finish
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="container my-4">

                        <!--collapse accordion for form (based on 'it host' template) -->

                        <div id="toolsform" class="accordion-area">
                            <div class="panel">
                                <div class="panel-header" id="headingOne">
                                    <button class="panel-link active" data-toggle="collapse" data-target="#collapse1"
                                        aria-expanded="true" aria-controls="collapse1">Step 1: Information needs
                                    </button>
                                </div>
                                <div id="collapse1" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#toolsform">
                                    <!-- <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#toolsform"> data-parent bit makes it close when another section opens, remove to keep open -->
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-12 ml-4 mb-4 pl-4">
                                                <h3>What do you want to collect information about?</h3>

                                                <p class="mt-3">Select options below to begin. </p>
                                            </div>
                                        </div>
                                        <div class="row py-4 img-block mx-4">

                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <button class="ib1 button1" style="width: 100%" type="button">
                                                    <span>Farmer Typologies</span>
                                                </button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <button class="ib2 button1" style="width: 100%" type="button">
                                                    <span>Soils</span>
                                                </button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <button class="ib3 button1" style="width: 100%" type="button">
                                                    <span>Labour</span>
                                                </button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <button class="ib4 button1" style="width: 100%" type="button">
                                                    <span>Markets</span>
                                                </button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <button class="ib5 button1" style="width: 100%" type="button">
                                                    <span>Choice 5</span>
                                                </button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <button class="ib6 button1" style="width: 100%" type="button">
                                                    <span>PPI</span>
                                                </button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <button class="ib7 button1" style="width: 100%" type="button">
                                                    <span>Choice 7</span>
                                                </button>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <button class="ib8 button1" style="width: 100%" type="button"
                                                    data-toggle="collapse" href="#collapse2" aria-expanded="true"
                                                    aria-controls="collapse2">
                                                    <span>Choice 8</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div style="text-align: center;">
                                            <button class="site-btn my-4" data-toggle="collapse" href="#collapse2"
                                                aria-expanded="true" aria-controls="collapse2">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-header" id="headingTwo">
                                    <button class="panel-link active collapsed" data-toggle="collapse"
                                        data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Step 2:
                                        Select indicators</button>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#toolsform">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-11 ml-3 ml-md-5 pl-md-4 mb-5 pr-1">
                                                <h4>Select indicators</h4>
                                                <p class="mb-4">Nullam lacinia ex eleifend orci porttitor, suscipit
                                                    interdum augue
                                                    condimentum. Etiam
                                                    pretium turpis eget nibh laoreet iaculis.Nullam lacinia ex eleifend
                                                    orciporttitor,
                                                    suscip-it interdum augue condimentum. Etiam pretium turpis eget
                                                    eleifend orci
                                                    porttitornibh laoreet iaculis.</p>


                                                <div class="mt-3 w-100">


                                                    <div class="tl-heading">
                                                        On-Farm Indicators
                                                    </div>



                                                    <div id="ind-onfarm" class="accordion-area">
                                                        <div class="panel-header" id="h-landuse">
                                                            <button class="btn tool-list tl-heading tl-subh my-0"
                                                                data-toggle="collapse" data-target="#landuse"
                                                                aria-expanded="true" aria-controls="h-landuse">
                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        Land Use
                                                                    </div>
                                                                    <div class="col-2 d-none d-sm-block my-auto"
                                                                        style="text-align: right;">
                                                                        +
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div id="landuse" class="collapse" aria-labelledby="landuse">

                                                            <button class="btn tool-list tl-item"
                                                                style="position: relative">
                                                                Land area cultivated

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>

                                                            <button class="btn tool-list tl-item">
                                                                Land area owned

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                If labour hired on farm

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Land slope perception

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Tree use

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                        </div>


                                                        <div class="panel-header" id="h-crop">
                                                            <button class="btn tool-list tl-heading tl-subh my-0"
                                                                data-toggle="collapse" data-target="#crop"
                                                                aria-expanded="true" aria-controls="h-crop">
                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        Crop Production and Use
                                                                    </div>
                                                                    <div class="col-2 d-none d-sm-block my-auto"
                                                                        style="text-align: right;">
                                                                        +
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div id="crop" class="collapse" aria-labelledby="crop">

                                                            <button class="btn tool-list tl-item">
                                                                All field crops, vegetables and fruits grown in last
                                                                year

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                For most important crops: crop area, crop yield

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Farmer’s perception of harvest

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Proportion of crop consumed and sold

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Crop Sale prices

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Use of crop residues

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Crop Income

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Crops: Total Value of Activities

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Crops: Food Availability

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                        </div>

                                                        <div class="panel-header" id="h-agriculture">
                                                            <button class="btn tool-list tl-heading tl-subh my-0"
                                                                data-toggle="collapse" data-target="#agriculture"
                                                                aria-expanded="true" aria-controls="h-agriculture">
                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        Agricultural Inputs and Management
                                                                    </div>
                                                                    <div class="col-2 d-none d-sm-block my-auto"
                                                                        style="text-align: right;">
                                                                        +
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div id="agriculture" class="collapse"
                                                            aria-labelledby="agriculture">

                                                            <button class="btn tool-list tl-item">
                                                                Total amount and types of nitrogenous fertiliser used,
                                                                and on which crops

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Use of manure, compost, pesticides, improved seed - per
                                                                crop only, not total amount

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Soil tillage practices

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Irrigation crops, method, and months

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Crop storage method

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                        </div>

                                                        <div class="panel-header" id="h-livestock">
                                                            <button class="btn tool-list tl-heading tl-subh my-0"
                                                                data-toggle="collapse" data-target="#livestock"
                                                                aria-expanded="true" aria-controls="h-livestock">
                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        Livestock
                                                                    </div>
                                                                    <div class="col-2 d-none d-sm-block my-auto"
                                                                        style="text-align: right;">
                                                                        +
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div id="livestock" class="collapse"
                                                            aria-labelledby="livestock">

                                                            <button class="btn tool-list tl-item">
                                                                Heads of livestock species

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>

                                                            <button class="btn tool-list tl-item">
                                                                Livestock: If improved/local breeds

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>

                                                            <button class="btn tool-list tl-item">
                                                                Livestock: Number sold and sale price

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>

                                                            <button class="btn tool-list tl-item">
                                                                Livestock: Use of meat, milk, eggs

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>

                                                            <button class="btn tool-list tl-item">
                                                                Livestock: Use of medicinal inputs

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>

                                                            <button class="btn tool-list tl-item">
                                                                Livestock: Income

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>

                                                            <button class="btn tool-list tl-item">
                                                                Livestock: Total Value of Activities

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>

                                                            <button class="btn tool-list tl-item">
                                                                Livestock: Food availability

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>

                                                    <div class="tl-heading">
                                                        Food Indicators
                                                    </div>

                                                    <div id="ind-food" class="accordion-area">
                                                        <div class="panel-header" id="h-wildfoods">
                                                            <button class="btn tool-list tl-heading tl-subh my-0"
                                                                data-toggle="collapse" data-target="#wildfoods"
                                                                aria-expanded="true" aria-controls="h-wildfoods">
                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        Wildfoods
                                                                    </div>
                                                                    <div class="col-2 d-none d-sm-block my-auto"
                                                                        style="text-align: right;">
                                                                        +
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div id="wildfoods" class="collapse"
                                                            aria-labelledby="wildfoods">

                                                            <button class="btn tool-list tl-item">

                                                                Which months wildfoods collected

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Wildfood: Which foodstuffs

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Wildfood: Proportion consumed or sold

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                        </div>
                                                        <div class="panel-header" id="h-security">
                                                            <button class="btn tool-list tl-heading tl-subh my-0"
                                                                data-toggle="collapse" data-target="#security"
                                                                aria-expanded="true" aria-controls="h-security">
                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        Food Security and Hunger
                                                                    </div>
                                                                    <div class="col-2 d-none d-sm-block my-auto"
                                                                        style="text-align: right;">
                                                                        +
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div id="security" class="collapse" aria-labelledby="security">

                                                            <button class="btn tool-list tl-item">
                                                                Months of lean season
                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">

                                                                Worst month, best month

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Household Food Insecurity Access Scale (HFIAS)
                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">

                                                                Food Insecurity Experience Scale (FIES)

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>




                                                        </div>
                                                        <div class="panel-header" id="h-hdd">
                                                            <button class="btn tool-list tl-heading tl-subh my-0"
                                                                data-toggle="collapse" data-target="#hdd"
                                                                aria-expanded="true" aria-controls="h-hdd">
                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        Household Dietary Diversity
                                                                    </div>
                                                                    <div class="col-2 d-none d-sm-block my-auto"
                                                                        style="text-align: right;">
                                                                        +
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div id="hdd" class="collapse" aria-labelledby="hdd">

                                                            <button class="btn tool-list tl-item">
                                                                Household Dietary Diversity Score (HDDS)

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Optional Individual 24 hour dietary diversity score

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn tool-list tl-item">
                                                                Source of food groups during lean and good seasons

                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>


                                                        </div>




                                                    </div>

                                                    <div class="tl-heading">
                                                        Poverty Dynamics Indicators
                                                    </div>
                                                    <div id="ind-poverty" class="accordion-area">
                                                        <div class="panel-header" id="h-pov">
                                                            <button class="btn tool-list tl-heading tl-subh my-0"
                                                                data-toggle="collapse" data-target="#pov"
                                                                aria-expanded="true" aria-controls="h-pov">
                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        Probability of Poverty
                                                                    </div>
                                                                    <div class="col-2 d-none d-sm-block my-auto"
                                                                        style="text-align: right;">
                                                                        +
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div id="pov" class="collapse" aria-labelledby="pov">

                                                            <button class="btn tool-list tl-item">
                                                                Probability of Poverty Indicator (PPI)
                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>
                                                        </div>


                                                        <div class="panel-header" id="h-offfarm">
                                                            <button class="btn tool-list tl-heading tl-subh my-0"
                                                                data-toggle="collapse" data-target="#offfarm"
                                                                aria-expanded="true" aria-controls="h-offfarm">
                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        Off-Farm Income
                                                                    </div>
                                                                    <div class="col-2 d-none d-sm-block my-auto"
                                                                        style="text-align: right;">
                                                                        +
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div id="offfarm" class="collapse" aria-labelledby="offfarm">

                                                            <button class="btn tool-list tl-item">
                                                                Incomes
                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>

                                                            <button class="btn tool-list tl-item">
                                                                Total Value of Activities
                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>

                                                            <button class="btn tool-list tl-item">
                                                                Food Availability
                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>

                                                        </div>

                                                        <div class="panel-header" id="h-aid">
                                                            <button class="btn tool-list tl-heading tl-subh my-0"
                                                                data-toggle="collapse" data-target="#aid"
                                                                aria-expanded="true" aria-controls="h-aid">
                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        Credit, Aid and Debts
                                                                    </div>
                                                                    <div class="col-2 d-none d-sm-block my-auto"
                                                                        style="text-align: right;">
                                                                        +
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div id="aid" class="collapse" aria-labelledby="aid">

                                                            <button class="btn tool-list tl-item">
                                                                Aid received
                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>

                                                            <button class="btn tool-list tl-item">
                                                                Gifts received
                                                                <a href="#" class="blacklink">
                                                                    <i class="fa fa-info-circle faend"></i>
                                                                </a>
                                                            </button>


                                                        </div>
                                                    </div>
                                                    <div class="tl-heading">
                                                        Gender Indicators
                                                    </div>


                                                    <div class="panel-header" id="h-gender">
                                                        <button class="btn tool-list tl-heading tl-subh my-0"
                                                            data-toggle="collapse" data-target="#gender"
                                                            aria-expanded="true" aria-controls="h-gender">
                                                            <div class="row">
                                                                <div class="col-sm-10">
                                                                    Gendered Control of Produce and Incomes:
                                                                </div>
                                                                <div class="col-2 d-none d-sm-block my-auto"
                                                                    style="text-align: right;">
                                                                    +
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div id="gender" class="collapse" aria-labelledby="gender">

                                                        <button class="btn tool-list tl-item">
                                                            Gendered and youth decision making over incomes and farm
                                                            production
                                                            <a href="#" class="blacklink">
                                                                <i class="fa fa-info-circle faend"></i>
                                                            </a>
                                                        </button>


                                                    </div>




                                                </div>




                                                <div style="text-align: center;">
                                                    <button class="site-btn mt-4" data-toggle="collapse"
                                                        href="#collapse3" aria-expanded="true"
                                                        aria-controls="collapse3">
                                                        Next
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-header" id="headingThree">
                                <button class="panel-link active collapsed" data-toggle="collapse"
                                    data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Step 3:
                                    Select Questions
                                </button>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="headingThree"
                                data-parent="#toolsform">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-11 ml-md-5 pl-4 pl-md-4 mb-2">
                                            <h4>Add Question Groups</h4>
                                            <p class="mb-4 pb-2">Nullam lacinia ex eleifend orci porttitor, suscipit
                                                interdum augue
                                                condimentum. Etiam
                                                pretium turpis eget nibh laoreet iaculis.Nullam lacinia ex eleifend
                                                orciporttitor,
                                                suscip-it interdum augue condimentum. Etiam pretium turpis eget
                                                eleifend orci
                                                porttitornibh laoreet iaculis.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 px-4 px-md-0 w-100 mb-5 pt-3 pb-5">


                                            <div class="row justify-content-center qg">
                                                <div class="col-lg-5 mx-4 mx-lg-0 px-4 py-4" style="background-color: #fff;">
                                                    <h4> Available Question
                                                        Groups:</h4>
                                                    <div style="height: 65vh; overflow-y: scroll;">

                                                        <div id="qg-av" class="accordion-area">
                                                            <div class="panel-header" id="title">
                                                                <button class="btn tool-list tl-heading tl-subh my-0"
                                                                    data-toggle="collapse" data-target="#ppi"
                                                                    aria-expanded="true" aria-controls="qg-ppi">
                                                                    <div class="row">
                                                                        <div class="col-sm-10">
                                                                            Probability of Poverty Indicator (PPI)
                                                                        </div>
                                                                        <div class="col-2 d-none d-sm-block my-auto"
                                                                            style="text-align: right;">
                                                                            +
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <div id="ppi" class="collapse" aria-labelledby="ppi">

                                                                <button class="btn tool-list tl-item"
                                                                    data-toggle="modal" data-target="#m_qg_ppi">

                                                                    Probability of Poverty Indicator (PPI) - Bolivia

                                                                    <a data-toggle="modal" data-target="#m_qg_ppi"
                                                                        class="blacklink">
                                                                        <i class="fa fa-info-circle famid"></i>
                                                                    </a>
                                                                    <a href="#" class="blacklink">
                                                                        <i class="fa fa-arrow-right faend"></i>
                                                                    </a>
                                                                </button>
                                                                <button class="btn tool-list tl-item"
                                                                    data-toggle="modal" data-target="#m_qg_ppi">
                                                                    Probability of Poverty Indicator (PPI) - Andes
                                                                    <a data-toggle="modal" data-target="#m_qg_ppi"
                                                                        class="blacklink">
                                                                        <i class="fa fa-info-circle famid"></i>
                                                                    </a>
                                                                    <a href="#" class="blacklink">
                                                                        <i class="fa fa-arrow-right faend"></i>
                                                                    </a>

                                                                </button>
                                                                <button class="btn tool-list tl-item"
                                                                    data-toggle="modal" data-target="#m_qg_ppi">
                                                                    Probability of Poverty Indicator (PPI) - Haiti
                                                                    <a data-toggle="modal" data-target="#m_qg_ppi"
                                                                        class="blacklink">
                                                                        <i class="fa fa-info-circle famid"></i>
                                                                    </a>
                                                                    <a href="#" class="blacklink">
                                                                        <i class="fa fa-arrow-right faend"></i>
                                                                    </a>
                                                                </button>
                                                                <button class="btn tool-list tl-item"
                                                                    data-toggle="modal" data-target="#m_qg_ppi">
                                                                    Probability of Poverty Indicator (PPI) - Equador
                                                                    <a data-toggle="modal" data-target="#m_qg_ppi"
                                                                        class="blacklink">
                                                                        <i class="fa fa-info-circle famid"></i>
                                                                    </a>
                                                                    <a href="#" class="blacklink">
                                                                        <i class="fa fa-arrow-right faend"></i>
                                                                    </a>
                                                                </button>
                                                            </div>


                                                            <div class="panel-header" id="qg-fiestitle">
                                                                <button class="btn tool-list tl-heading tl-subh my-0"
                                                                    data-toggle="collapse" data-target="#fies"
                                                                    aria-expanded="true" aria-controls="qg-fiestitle">
                                                                    <div class="row">
                                                                        <div class="col-sm-10">
                                                                            Food Insecurity Experience Scale (FIES)
                                                                        </div>
                                                                        <div class="col-2 d-none d-sm-block my-auto"
                                                                            style="text-align: right;">
                                                                            +
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <div id="fies" class="collapse" aria-labelledby="fies">

                                                                <button class="btn tool-list tl-item"
                                                                    data-toggle="modal" data-target="#m_qg_fies">
                                                                    Food Insecurity Experience Scale (FIES) - Israel
                                                                    <a data-toggle="modal" data-target="#m_qg_fies"
                                                                        class="blacklink">
                                                                        <i class="fa fa-info-circle famid"></i>
                                                                    </a>
                                                                    <a href="#" class="blacklink">
                                                                        <i class="fa fa-arrow-right faend"></i>
                                                                    </a>
                                                                </button>
                                                                <button class="btn tool-list tl-item"
                                                                    data-toggle="modal" data-target="#m_qg_fies">
                                                                    Food Insecurity Experience Scale (FIES) - 2017
                                                                    <a data-toggle="modal" data-target="#m_qg_fies"
                                                                        class="blacklink">
                                                                        <i class="fa fa-info-circle famid"></i>
                                                                    </a>
                                                                    <a href="#" class="blacklink">
                                                                        <i class="fa fa-arrow-right faend"></i>
                                                                    </a>
                                                                </button>



                                                            </div>

                                                            <div class="panel-header" id="qg-genderdm">
                                                                <button class="btn tool-list tl-heading tl-subh my-0"
                                                                    data-toggle="collapse" data-target="#genderdm"
                                                                    aria-expanded="true" aria-controls="qg-genderdm">
                                                                    <div class="row">
                                                                        <div class="col-sm-10">
                                                                            Gendered and youth decision-making over
                                                                            incomes and farm
                                                                            production
                                                                        </div>
                                                                        <div class="col-2 d-none d-sm-block my-auto"
                                                                            style="text-align: right;">
                                                                            +
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <div id="genderdm" class="collapse"
                                                                aria-labelledby="genderdm">

                                                                <button class="btn tool-list tl-item"
                                                                    data-toggle="modal" data-target="#m_qg_ppi">
                                                                    Gendered and youth decision making over incomes and
                                                                    farm
                                                                    production - 2018
                                                                    <a data-toggle="modal" data-target="#m_qg_ppi"
                                                                        class="blacklink">
                                                                        <i class="fa fa-info-circle famid"></i>
                                                                    </a>
                                                                    <a href="#" class="blacklink">
                                                                        <i class="fa fa-arrow-right faend"></i>
                                                                    </a>
                                                                </button>
                                                                <button class="btn tool-list tl-item"
                                                                    data-toggle="modal" data-target="#m_qg_ppi">
                                                                    Gendered and youth decision making over incomes and
                                                                    farm
                                                                    production - 2017
                                                                    <a data-toggle="modal" data-target="#m_qg_ppi"
                                                                        class="blacklink">
                                                                        <i class="fa fa-info-circle famid"></i>
                                                                    </a>
                                                                    <a href="#" class="blacklink">
                                                                        <i class="fa fa-arrow-right faend"></i>
                                                                    </a>
                                                                </button>


                                                            </div>

                                                        </div>
                                                    </div>



                                                </div>




                                                <div class="col-lg-5 mt-lg-0 mx-4 mr-lg-0 ml-lg-5  px-4 py-4"
                                                    style="background-color: #fff;">

                                                    <h4 style="text-align: center"> Selected Question
                                                        Groups:</h4>
                                                    <div style="height: 65vh; overflow-y: scroll;">

                                                        <div id="qg-sel" class="accordion-area">
                                                            <div class="panel-header" id="qg-hfias">
                                                                <button class="btn tool-list tl-heading tl-subh my-0"
                                                                    data-toggle="collapse" data-target="#hfias"
                                                                    aria-expanded="true" aria-controls="qg-hfias">
                                                                    <div class="row">
                                                                        <div class="col-sm-10">
                                                                            Household Food Insecurity Access
                                                                            Scale (HFIAS)
                                                                        </div>
                                                                        <div class="col-2 d-none d-sm-block my-auto"
                                                                            style="text-align: right;">
                                                                            +
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <div id="hfias" class="collapse show" aria-labelledby="hfias">

                                                                <button class="btn tool-list tl-item"
                                                                    data-toggle="modal" data-target="#m_qg_hfias">
                                                                    Household Food Insecurity Access Scale (HFIAS)
                                                                    <a data-toggle="modal" data-target="#m_qg_hfias"
                                                                        class="blacklink">
                                                                        <i class="fa fa-info-circle famid"></i>
                                                                    </a>
                                                                    <a href="#" class="blacklink">
                                                                    <i class="fa fa-times-circle faend"></i>
                                                                    </a>
                                                                </button>

                                                            </div>

                                                        </div>



                                                    </div>



                                                </div>
                                                <div style="text-align: center;">
                                                    <button class="site-btn mt-5" data-toggle="collapse"
                                                        href="#collapse4" aria-expanded="true"
                                                        aria-controls="collapse4">
                                                        Next
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                                                <!-- modal -->
                                                <div class="modal fade" id="m_qg_ppi" tabindex="-1" role="dialog"
                                                    aria-labelledby="m_qg_ppiTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered mw-100"
                                                        role="document" style="width: 65%; min-width: 350px;">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title" id="exampleModalLongTitle">Add
                                                                    Question Group:
                                                                </h3>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container">
                                                                    <h4>Probability of Poverty Indicator (PPI) - Bolivia
                                                                    </h4>
                                                                    <p>This question module contains the following
                                                                        questions:</p>

                                                                    <div class="item-box my-4 greylist">

                                                                        <div class="tl-item">
                                                                            How many members does the household have?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            In the past calendar week, did the male
                                                                            head/spouse work for at least one hour?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            What is the mother tongue of the female
                                                                            head/spouse?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            How many rooms does the household occupy,
                                                                            not counting bathrooms, kitchens, laundry
                                                                            rooms, garages, storage rooms, or rooms used
                                                                            for business?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            What is the main construction material of
                                                                            the
                                                                            floors of the residence?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            What type of toilet arrangement do the
                                                                            members of the household usually use?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            What is the main fuel or energy source used
                                                                            for cooking?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            Does the household own, possess, or have the
                                                                            use of a refrigerator or freezer?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            Does the household own, possess, or have the
                                                                            use of a television?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            Does the household own, possess, or have the
                                                                            use of a motorcycle (for its personal use)
                                                                            or an automobile (for its personal use)?
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer border-top-0">
                                                                <button type="button" class="site-btn site-btn-sec"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="button" class="site-btn"
                                                                    data-dismiss="modal">Add all
                                                                    questions</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end modal-->
                                                <!--modal-->

                                                <div class="modal fade" id="m_qg_fies" tabindex="-1" role="dialog"
                                                    aria-labelledby="m_qg_fiesTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered mw-100"
                                                        role="document" style="width: 65%;">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Add
                                                                    Question Group:
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container">
                                                                    <h4>Food Insecurity Experience Scale (FIES) - Israel
                                                                    </h4>
                                                                    <p>This question module contains the following
                                                                        questions:</p>

                                                                    <div class="item-box my-4 greylist">

                                                                        <div class="tl-item">
                                                                            Think back over the last YEAR. Was there a
                                                                            time when, because of lack of money or other
                                                                            resources…
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            You were worried you would not have enough
                                                                            to eat?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            You were unable to eat healthy and
                                                                            nutritious food?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            You ate only a few kinds of foods?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            You had to skip a meal?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            You ate less than you thought you should?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            Your household ran out of food?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            You were hungry but did not eat?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            You went without eating for a whole day?
                                                                        </div>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer border-top-0">
                                                                <button type="button" class="site-btn site-btn-sec"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="button" class="site-btn"
                                                                    data-dismiss="modal">Add all
                                                                    questions</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- end modal-->

                                                <!--modal-->

                                                <div class="modal fade" id="m_qg_hfias" tabindex="-1" role="dialog"
                                                    aria-labelledby="m_qg_hfiasTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered mw-100"
                                                        role="document" style="width: 65%;">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Add
                                                                    Question Group:
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container">
                                                                    <h4>Household Food Insecurity Access Scale (HFIAS)
                                                                    </h4>
                                                                    <p>This question module contains the following
                                                                        questions:</p>

                                                                    <div class="item-box my-4 greylist">

                                                                        <div class="tl-item">
                                                                            In the past four weeks, did you worry that
                                                                            your household would not have enough food?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            In the past four weeks, were you or any
                                                                            household member not able to eat the kinds
                                                                            of foods you preferred because of a lack of
                                                                            resources?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            In the past four weeks, did you or any
                                                                            household member have to eat a limited
                                                                            variety of foods due to a lack of resources?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            In the past four weeks, did you or any
                                                                            household member have to eat some foods that
                                                                            you really did not want to eat because of a
                                                                            lack of resources to obtain other types of
                                                                            food?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            In the past four weeks, did you or any
                                                                            household member have to eat a smaller meal
                                                                            than you felt you needed because there was
                                                                            not enough food?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            In the past four weeks, did you or any
                                                                            household member have to eat fewer meals in
                                                                            a day because there was not enough food?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            In the past four weeks, was there ever no
                                                                            food to eat of any kind in your household
                                                                            because of lack of resources to get food?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            In the past four weeks, did you or any
                                                                            household member go to sleep at night hungry
                                                                            because there was not enough food?
                                                                        </div>
                                                                        <div class="tl-item">
                                                                            In the past four weeks, did you or any
                                                                            household member go a whole day and night
                                                                            without eating anything because there was
                                                                            not enough food?
                                                                        </div>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer border-top-0">
                                                                <button type="button" class="site-btn site-btn-sec"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="button" class="site-btn"
                                                                    data-dismiss="modal">Remove Question Group</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- end modal-->




                            <div class="panel">
                                <div class="panel-header" id="headingFour">
                                    <button class="panel-link active collapsed" data-toggle="collapse"
                                        data-target="#collapse4" aria-expanded="true" aria-controls="collapse3">Step 4:
                                        Preview and Export
                                    </button>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#toolsform">
                                    <div class="panel-body">
                                        <div class="row mx-md-5 mt-4" style="justify-content: center;">
                                            <div class="col-lg-4 col-md-6 feature-item ft-links">
                                                <div class="ft-icon">
                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                </div>
                                                <a href="#" class="stretched-link">
                                                    <h4>Download XLS Form</h4>
                                                </a>
                                                <p></p>
                                            </div>
                                            <div class="col-lg-4 col-md-6 feature-item">
                                                <div class="ft-icon">
                                                    <i class="fa fa-table"></i>
                                                </div>
                                                <a href="#" class="stretched-link">
                                                    <h4>View Data Structure</h4>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 feature-item">
                                                <div class="ft-icon">
                                                    <i class="fa fa-pencil-square-o "></i>
                                                </div>
                                                <a href="#" class="stretched-link">
                                                    <h4>Recommended Edits</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div style="text-align: center;">
                                            <button class="site-btn mt-4" data-toggle="collapse" href="#collapse4"
                                                aria-expanded="true" aria-controls="collapse4">
                                                Save and Get Form
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--




    <div class="accordion" id="accordionExample">

<div class="card">
        <div class="row ml-0 card-header" id="HeadingOne">
            <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">

            Step 1
            </button>
        </div>

        <div id="collapseOne" class="row mb-4 py-4 img-block mx-4 collapse show" aria-labelledby="headingOne"
            data-parent="#accordionExample">
            <div class="col-12 mb-5">
            <h3>Select an option to begin</h3>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <button class="ib1" style="width: 100%" type="button" data-toggle="collapse" href="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    Choice 1
                </button>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <button class="ib2" style="width: 100%" type="button" data-toggle="collapse" href="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    Choice 1
                </button>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <button class="ib3" style="width: 100%" type="button" data-toggle="collapse" href="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    Choice 1
                </button>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <button class="ib4" style="width: 100%" type="button" data-toggle="collapse" href="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    Choice 1
                </button>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <button class="ib5" style="width: 100%" type="button" data-toggle="collapse" href="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    Choice 1
                </button>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <button class="ib6" style="width: 100%" type="button" data-toggle="collapse" href="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    Choice 1
                </button>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <button class="ib7" style="width: 100%" type="button" data-toggle="collapse" href="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    Choice 7
                </button>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <button class="ib8" style="width: 100%" type="button" data-toggle="collapse" href="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    Choice 8
                </button>
            </div>
        </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        Collapsible Group Item #1
                    </button>
</div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="panel-body">
                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                        squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard
                        of them accusamus labore sustainable VHS.</p>
                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                        squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard
                        of them accusamus labore sustainable VHS.</p>
                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                        squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard
                        of them accusamus labore sustainable VHS.</p>
                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                        squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard
                        of them accusamus labore sustainable VHS.</p>
                    <div class="user-panel">
                        <button class="btn" type="button" data-toggle="collapse" href="#collapseThree"
                            aria-expanded="true" aria-controls="collapseThree">
                            Collapsible Group Item #1
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Collapsible Group Item #2
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.

                    <div class="user-panel">
                        <button class="btn" type="button" data-toggle="collapse" href="#collapseFour"
                            aria-expanded="true" aria-controls="collapseFour">
                            Collapsible Group Item #1
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Collapsible Group Item #3
                    </button>
                </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


-->



<!--
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


<div class="container my-4">

            <div class="accordion" id="accordionExample">
                <div class="row mb-4 py-5 img-block">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <button class="ib1" style="width: 100%" type="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Choice 1
                        </button>
                    </div>  
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <button class="ib2" style="width: 100%" type="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Choice 1
                        </button>
                    </div>  
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <button class="ib3" style="width: 100%" type="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Choice 1
                        </button>
                    </div>  
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <button class="ib4" style="width: 100%" type="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Choice 1
                        </button>
                    </div>  
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <button class="ib5" style="width: 100%" type="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Choice 1
                        </button>
                    </div>  
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <button class="ib6" style="width: 100%" type="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Choice 1
                        </button>
                    </div>  
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <button class="ib7" style="width: 100%" type="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Choice 7
                        </button>
                    </div>  
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <button class="ib8" style="width: 100%" type="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Choice 8
                        </button>
                    </div>  

</div>
<div class="row" style="background-color: #ffffff;">
    <div class="col-12">
            <div class="card">
                <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Collapsible Group Item #1
                    </button>
                </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    <div class="user-panel">
                    <button class="btn" type="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Collapsible Group Item #1
                    </button>
                </div>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Collapsible Group Item #2
                    </button>
                </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                
                    <div class="user-panel">
                    <button class="btn" type="button" data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    Collapsible Group Item #1
                    </button>
                </div></div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Collapsible Group Item #3
                    </button>
                </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
                </div>
            </div>
            </div>
</div>
</div>
</div>
-->

@endsection