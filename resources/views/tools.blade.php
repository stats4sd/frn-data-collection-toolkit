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

<div class="w-100">
        <!--progress bar to be made -->
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
                <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true"
                    aria-controls="collapse1">Step 1: Information needs </button>
            </div>
            <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#toolsform">
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
                            <button class="ib1" style="width: 100%" type="button">
                                <span>Farmer Typologies</span>
                            </button>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <button class="ib2" style="width: 100%" type="button">
                                <span>Soils</span>
                            </button>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <button class="ib3" style="width: 100%" type="button">
                                <span>Labour</span>
                            </button>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <button class="ib4" style="width: 100%" type="button">
                                <span>Markets</span>
                            </button>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <button class="ib5" style="width: 100%" type="button">
                                <span>Choice 5</span>
                            </button>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <button class="ib6" style="width: 100%" type="button">
                                <span>PPI</span>
                            </button>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <button class="ib7" style="width: 100%" type="button">
                                <span>Choice 7</span>
                            </button>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <button class="ib8" style="width: 100%" type="button" data-toggle="collapse"
                                href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                <span>Choice 8</span>
                            </button>
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <button class="site-btn my-4" data-toggle="collapse" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                            Next
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-header" id="headingTwo">
                <button class="panel-link active collapsed" data-toggle="collapse" data-target="#collapse2"
                    aria-expanded="false" aria-controls="collapse2">Step 2: Select indicators</button>
            </div>
            <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#toolsform">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-11 ml-3 ml-md-5 pl-md-4 mb-5 pr-1">
                            <h4>Select indicators</h4>
                            <p class="mb-4">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam
                                pretium turpis eget nibh laoreet iaculis.Nullam lacinia ex eleifend orciporttitor,
                                suscip-it interdum augue condimentum. Etiam pretium turpis eget eleifend orci
                                porttitornibh laoreet iaculis.</p>
                            

                            <div class="mt-3 w-100">
                                <div class="tool-list tl-heading">
                                    Option 1 Indicators
                                </div>
                                <div class="tool-list tl-item">
                                    Sentiments two occasional affronting solicitude travelling and one contrasted. 
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

                            <div class="mt-3 w-100">
                                <div class="tool-list tl-heading">
                                    Option 2 Indicators
                                </div>
                                <div class="tool-list tl-item">
                                    Sentiments two occasional affronting solicitude travelling and one contrasted. 
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
                                <div class="tool-list tl-item">
                                    Sentiments two occasional affronting solicitude travelling and one contrasted. 
                                </div>
                                <div class="tool-list tl-item">
                                    Fortune day out married parties. 
                                </div>
                            </div>
                            <div style="text-align: center;">
                                <button class="site-btn mt-4" data-toggle="collapse" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                    Next
                                </button>
                            </div>

                            <!--nested accordion 

                            <div class="accordion" id="level1">
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <button class="accordion-toggle btn btn-block" data-toggle="collapse"
                                            data-target="#l1_item1" href="#">
                                            Item #1
                                        </button>
                                    </div>
                                    <div id="l1_item1" class="collapse">
                                        <div class="accordion-inner">
                                            <div class="accordion" id="level2">
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <button class="accordion-toggle btn btn-block"
                                                            data-toggle="collapse" data-target="#l2_item1" href="#">
                                                            Item #1
                                                        </button>
                                                    </div>
                                                    <div id="l2_item1" class="collapse">
                                                        <div class="accordion-inner">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                            sunt aliqua put a bird on it squid single-origin coffee
                                                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt
                                                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                            Leggings occaecat craft beer farm-to-table, raw denim
                                                            aesthetic synth nesciunt you probably haven't heard of them
                                                            accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <button class="accordion-toggle btn btn-block"
                                                            data-toggle="collapse" data-target="#l2_item2" href="#">
                                                            Item #2
                                                        </button>
                                                    </div>
                                                    <div id="l2_item2" class=" collapse">
                                                        <div class="accordion-inner">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                            accusamus terry richardson ad squid.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <button class="accordion-toggle btn btn-block"
                                                            data-toggle="collapse" data-target="#l2_item3" href="#">
                                                            Item #3
                                                        </button>
                                                    </div>
                                                    <div id="l2_item3" class=" collapse">
                                                        <div class="accordion-inner">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                            sunt aliqua put a bird on it squid single-origin coffee
                                                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt
                                                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                            Leggings occaecat craft beer farm-to-table, raw denim
                                                            aesthetic synth nesciunt you probably haven't heard of them
                                                            accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <button class="accordion-toggle btn btn-block" data-toggle="collapse"
                                            data-target="#l1_item2" href="#">
                                            Item #2
                                        </button>
                                    </div>
                                    <div id="l1_item2" class=" collapse">
                                        <div class="accordion-inner">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <button class="accordion-toggle btn btn-block" data-toggle="collapse"
                                            data-target="#l1_item3" href="#">
                                            Item #3
                                        </button>
                                    </div>
                                    <div id="l1_item3" class=" collapse">
                                        <div class="accordion-inner">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>


                            -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-header" id="headingThree">
                <button class="panel-link active collapsed" data-toggle="collapse" data-target="#collapse3"
                    aria-expanded="false" aria-controls="collapse3">Step 3: Select Questions
                </button>
            </div>
            <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#toolsform">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-11 ml-md-5 pl-4 pl-md-4 mb-5">
                            <h4>Add question modules</h4>
                            <p class="mb-5 pb-2">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam
                                pretium turpis eget nibh laoreet iaculis.Nullam lacinia ex eleifend orciporttitor,
                                suscip-it interdum augue condimentum. Etiam pretium turpis eget eleifend orci
                                porttitornibh laoreet iaculis.</p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th scope="col"> </th>
                                        <th scope="col">Module</th>
                                        <th scope="col">Indicator</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">No. of Qs</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td> <input type="checkbox"> </td>
                                        <th scope="row" class="rh"><a href="#" data-toggle="modal" data-target="#m_m1"> Nullam lacinia ex eleifend</a></td>
                                        <td><a href="#" data-toggle="modal" data-target="#m_m1">Fortune day out married parties.</a></td>
                                        <td><a href="#" data-toggle="modal" data-target="#m_m1">Nullam lacinia ex eleifend orciporttitor,
                                suscip-it interdum augue condimentum. Etiam pretium turpis</a></td>
                                        <td><a href="#" data-toggle="modal" data-target="#m_m1">12</a></td>
                                        </tr>
                                        <tr>
                                        <td> <input type="checkbox"> </td>
                                        <th scope="row" class="rh"><a href="#">Suscipit interdum augue condimentum</a></td>
                                        <td><a href="#">Sentiments two occasional affronting solicitude travelling and one contrasted.</a></td>
                                        <td><a href="#">Apartments simplicity or understood do it we. Song such eyes had and off. Removed winding ask explain delight out few behaved lasting.</a></td>
                                        <td>4</td>
                                        </tr>
                                        <tr>
                                        <td> <input type="checkbox"> </td>
                                        <th scope="row" class="rh"><a href="#">Nullam lacinia ex eleifend</a></td>
                                        <td><a href="#">Happiness remainder joy but earnestly for off.</a></td>
                                        <td><a href="#">Remark easily garret nor nay. Civil those mrs enjoy</a></td>
                                        <td><a href="#">6</a></td>
                                        </tr>
                                        <tr>
                                        <td> <input type="checkbox"> </td>
                                        <th scope="row" class="rh"><a href="#">Nullam lacinia ex eleifend</a></td>
                                        <td><a href="#">Fortune day out married parties.</a></td>
                                        <td><a href="#">Nullam lacinia ex eleifend orciporttitor, suscip-it interdum augue condimentum. Etiam pretium turpis</a></td>
                                        <td><a href="#">12</a></td>
                                        </tr>
                                        <tr>
                                        <td> <input type="checkbox"> </td>
                                        <th scope="row" class="rh"><a href="#">Suscipit interdum augue condimentum</a></td>
                                        <td><a href="#">Sentiments two occasional affronting solicitude travelling and one contrasted.</a></td>
                                        <td><a href="#">Apartments simplicity or understood do it we. Song such eyes had and off. Removed winding ask explain delight out few behaved lasting.</a></td>
                                        <td><a href="#">4</a></td>
                                        </tr>
                                        <tr>
                                        <td> <input type="checkbox"> </td>
                                        <th scope="row" class="rh"><a href="#">Nullam lacinia ex eleifend</a></td>
                                        <td><a href="#">Happiness remainder joy but earnestly for off.</a></td>
                                        <td><a href="#">Remark easily garret nor nay. Civil those mrs enjoy</a></td>
                                        <td><a href="#">6</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
<!-- modal -->
<div class="modal fade" id="m_m1" tabindex="-1" role="dialog" aria-labelledby="m_m1Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered mw-100" role="document" style="width: 65%;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Question Module:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
            <h4>Nullam lacinia ex eleifend</h4>
            <p><strong>This question module contains the following questions.</strong></p>

            <div class="item-box my-4">

                <div class="tool-list tl-item">
                    Sentiments two occasional affronting solicitude travelling and one contrasted. 
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
                    Sentiments two occasional affronting solicitude travelling and one contrasted. 
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
                    Took sold add play may none him few. 
                </div>
                <div class="tool-list tl-item">
                    Sentiments two occasional affronting solicitude travelling and one contrasted. 
                </div>
                <div class="tool-list tl-item">
                    Fortune day out married parties. 
                </div>
                <div class="tool-list tl-item">
                    Happiness remainder joy but earnestly for off. 
                </div>
            </div>
        
        </div>
      </div>
      <div class="modal-footer border-top-0">
        <button type="button" class="site-btn site-btn-sec" data-dismiss="modal">Close</button>
        <button type="button" class="site-btn">Add selected questions</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal-->

                            <div style="text-align: center;">
                                <button class="site-btn mt-4" data-toggle="collapse" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-header" id="headingFour">
                <button class="panel-link active collapsed" data-toggle="collapse" data-target="#collapse4"
                    aria-expanded="true" aria-controls="collapse3">Step 4: Preview and Export
                </button>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="headingFour" data-parent="#toolsform">
                <div class="panel-body">
                    <div class="row mx-md-5 mt-4" style="justify-content: center;">
                        <div class="col-lg-4 col-md-6 feature-item ft-links">
                            <div class="ft-icon">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            </div>
                            <a href="#" class="stretched-link"><h4>Download XLS Form</h4></a>
                            <p></p>
                        </div>
                        <div class="col-lg-4 col-md-6 feature-item">
                            <div class="ft-icon">
                                <i class="fa fa-table"></i>
                            </div>
                            <a href="#" class="stretched-link"><h4>View Data Structure</h4></a>
                        </div>
                        <div class="col-lg-4 col-md-6 feature-item">
                            <div class="ft-icon">
                                <i class="fa fa-pencil-square-o "></i>
                            </div>
                            <a href="#" class="stretched-link"><h4>Recommended Edits</h4></a>
                        </div>
                    </div>
                    <div style="text-align: center;">
                                <button class="site-btn mt-4" data-toggle="collapse" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                    Save and Get Form
                                </button>
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