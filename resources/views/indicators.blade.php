@extends('layouts.app')

@section('content')
<!--
<img src="{{ asset('img/odk-builder.jpg') }}" style="width: 100vw"/>
-->

<section class="hero-section set-bg" data-setbg="{{ asset('img/agroecology.jpg') }}" style="height: 110px !important">

</section>


<div class="container">
    <div class="row mx-1 mb-5">
        <h2>Indicators List</h2>

        <p>Some sort of introduction to the list of indicators and what you can do from here?</p>
        <p>Lorem ipsum pellentesque curabitur torquent est tincidunt est semper mauris fringilla viverra, sollicitudin
            ipsum ullamcorper pharetra condimentum risus dapibus eget taciti fringilla, volutpat enim tempor curae justo
            dapibus odio justo cras odio morbi quisque tempor mattis nostra cubilia facilisis mollis ullamcorper etiam
            in vehicula, pulvinar lacus erat libero litora nisi feugiat aliquam metus erat.</p>

    </div>


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

    <button class="btn tool-list tl-item" >
            Land area cultivated
</button>
        <button class="btn tool-list tl-item">
            Land area owned
</button>
        <button class="btn tool-list tl-item">
            If labour hired on farm
</button>
        <button class="btn tool-list tl-item">
            Land slope perception
</button>
        <button class="btn tool-list tl-item">
            Tree use
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
</button>
        <button class="btn tool-list tl-item">
            For most important crops: crop area, crop yield
</button>
        <button class="btn tool-list tl-item">
            Farmer’s perception of harvest
</button>
        <button class="btn tool-list tl-item">
            Proportion of crop consumed and sold
</button>
        <button class="btn tool-list tl-item">
            Crop Sale prices
</button>
        <button class="btn tool-list tl-item">
            Use of crop residues
</button>
        <button class="btn tool-list tl-item">
            Crop Income
</button>
        <button class="btn tool-list tl-item">
            Crops: Total Value of Activities
</button>
        <button class="btn tool-list tl-item">
            Crops: Food Availability
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
</button>
        <button class="btn tool-list tl-item">
            Use of manure, compost, pesticides, improved seed - per
            crop only, not total amount
</button>
        <button class="btn tool-list tl-item">
            Soil tillage practices
</button>
        <button class="btn tool-list tl-item">
            Irrigation crops, method, and months
</button>
        <button class="btn tool-list tl-item">
            Crop storage method
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
</button>
        <button class="btn tool-list tl-item">
            Livestock: If improved/local breeds
</button>
        <button class="btn tool-list tl-item">
            Livestock: Number sold and sale price
</button>
        <button class="btn tool-list tl-item">
            Livestock: Use of meat, milk, eggs
</button>
        <button class="btn tool-list tl-item">
            Livestock: Use of medicinal inputs
</button>
        <button class="btn tool-list tl-item">
            Livestock: Income
</button>
        <button class="btn tool-list tl-item">
            Livestock: Total Value of Activities
</button>
        <button class="btn tool-list tl-item">
            Livestock: Food availability
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
    <div id="wildfoods" class="collapse" aria-labelledby="wildfoods">

        <button class="btn tool-list tl-item">
            
            Which months wildfoods collected
</button>
        <button class="btn tool-list tl-item">
        Wildfood: Which foodstuffs
</button>
        <button class="btn tool-list tl-item">
        Wildfood: Proportion consumed or sold
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
</button>
        <button class="btn tool-list tl-item">
        Worst month, best month 
</button>
        <button class="btn tool-list tl-item">
        Household Food Insecurity Access Scale (HFIAS)
</button>
        <button class="btn tool-list tl-item">
        Food Insecurity Experience Scale (FIES)
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
</button>
        <button class="btn tool-list tl-item">
        Optional Individual 24 hour dietary diversity score
</button>
        <button class="btn tool-list tl-item">
        Source of food groups during lean and good seasons
</button>
        
        
    </div>




</div>

<div class="tl-heading">
    Poverty Dynamics Indicators
</div>

<div id="ind-poverty" class="accordion-area">
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
</button>
        <button class="btn tool-list tl-item">
        Total Value of Activities
</button>
        <button class="btn tool-list tl-item">
        Food Availability
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
</button>
        <button class="btn tool-list tl-item">
        Gifts received
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
        Gendered and youth decision making over incomes and farm production
</button>
        
    </div>




</div>


<!--progress bar to be made -->


<!--accordion-->
    <!-- <div class="accordion" id="indicators">
        <div class="accordion-group">
</div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <button class="accordion-toggle btn tool-list tl-heading my-0" data-toggle="collapse" data-target="#cat1" href="#">
                    Category #1
                </button>
            </div>
            <div id="cat1" class="collapse">
                <div class="accordion-inner">
                    <div class="w-100">

                        <button class="btn tool-list tl-item">
                            <div class="row">
                                <div class="col-sm-10">
                                    Sentiments two occasional affronting solicitude travelling and
                                    one contrasted. Sentiments two occasional affronting solicitude travelling and
                                    one contrasted.Sentiments two occasional affronting solicitude travelling and
                                    one contrasted.
                                </div>
                                <div class="col-2 d-none d-sm-block my-auto" style="text-align: right;">
                                    + 
                                </div>
                            </div>
                        </button>
                        <button class="btn tool-list tl-item">
                            <div class="row">
                                <div class="col-sm-10">
                            Fortune day out married parties.
                        </div>
                                <div class="col-2 d-none d-sm-block my-auto" style="text-align: right;">
                                    + 
                                </div>
                            </div>
                        </button>
                        <button class="btn tool-list tl-item">
                            <div class="row">
                                <div class="col-sm-10">
                            Happiness remainder joy but earnestly for off.
                        </div>
                                <div class="col-2 d-none d-sm-block my-auto" style="text-align: right;">
                                    + 
                                </div>
                            </div>
                        </button>
                        <button class="btn tool-list tl-item">
                            <div class="row">
                                <div class="col-sm-10">
                            Took sold add play may none him few.
                        </div>
                                <div class="col-2 d-none d-sm-block my-auto" style="text-align: right;">
                                    + 
                                </div>
                            </div>
                        </button>
                        <button class="btn tool-list tl-item">
                            <div class="row">
                                <div class="col-sm-10">
                            If as increasing contrasted entreaties be.
                        </div>
                                <div class="col-2 d-none d-sm-block my-auto" style="text-align: right;">
                                    + 
                                </div>
                            </div>
                        </button>
                        <button class="btn tool-list tl-item">
                            <div class="row">
                                <div class="col-sm-10">
                            Now summer who day looked our behind moment coming.
                        </div>
                                <div class="col-2 d-none d-sm-block my-auto" style="text-align: right;">
                                    + 
                                </div>
                            </div>
                        </button>
                        <button class="btn tool-list tl-item">
                            <div class="row">
                                <div class="col-sm-10">
                            Pain son rose more park way that.
                        </div>
                                <div class="col-2 d-none d-sm-block my-auto" style="text-align: right;">
                                    + 
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
</div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <button class="accordion-toggle btn tool-list tl-heading my-0" data-toggle="collapse" data-target="#cat2" href="#">
                    Category #2
                </button>
            </div>
            <div id="cat2" class="collapse">
                <div class="accordion-inner">
                    <div class="w-100">

                        <div class="tool-list tl-item">
                            Sentiments two occasional affronting solicitude travelling and
                            one contrasted.
                        </div>
                        <div class="tool-list tl-item">
                            Fortune day out married parties.
                        </div>
                        <div class="tool-list tl-item">
                            Happiness remainder joy but earnestly for off.
                        </div>
                        <div class="tool-list tl-item">
                            Took sold add play may none him few.
                        </div>
                        <div class="tool-list tl-item">
                            If as increasing contrasted entreaties be.
                        </div>
                        <div class="tool-list tl-item">
                            Now summer who day looked our behind moment coming.
                        </div>
                        <div class="tool-list tl-item">
                            Pain son rose more park way that.
                        </div>
                    </div>
                </div>
            </div>
</div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <button class="accordion-toggle btn tool-list tl-heading my-0" data-toggle="collapse" data-target="#cat3" href="#">
                    Category #3
                </button>
            </div>
            <div id="cat3" class="collapse">
                <div class="accordion-inner">
                    <div class="w-100">

                        <div class="tool-list tl-item">
                            Sentiments two occasional affronting solicitude travelling and
                            one contrasted.
                        </div>
                        <div class="tool-list tl-item">
                            Fortune day out married parties.
                        </div>
                        <div class="tool-list tl-item">
                            Happiness remainder joy but earnestly for off.
                        </div>
                        <div class="tool-list tl-item">
                            Took sold add play may none him few.
                        </div>
                        <div class="tool-list tl-item">
                            If as increasing contrasted entreaties be.
                        </div>
                        <div class="tool-list tl-item">
                            Now summer who day looked our behind moment coming.
                        </div>
                        <div class="tool-list tl-item">
                            Pain son rose more park way that.
                        </div>
                    </div>
                </div>
            </div>
</div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <button class="accordion-toggle btn tool-list tl-heading my-0" data-toggle="collapse" data-target="#cat4" href="#">
                    Category #4
                </button>
            </div>
            <div id="cat4" class="collapse">
                <div class="accordion-inner">
                    <div class="w-100">

                        <div class="tool-list tl-item">
                            Sentiments two occasional affronting solicitude travelling and
                            one contrasted.
                        </div>
                        <div class="tool-list tl-item">
                            Fortune day out married parties.
                        </div>
                        <div class="tool-list tl-item">
                            Happiness remainder joy but earnestly for off.
                        </div>
                        <div class="tool-list tl-item">
                            Took sold add play may none him few.
                        </div>
                        <div class="tool-list tl-item">
                            If as increasing contrasted entreaties be.
                        </div>
                        <div class="tool-list tl-item">
                            Now summer who day looked our behind moment coming.
                        </div>
                        <div class="tool-list tl-item">
                            Pain son rose more park way that.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- End Accordion -->

   
    </div>



</div>




@endsection