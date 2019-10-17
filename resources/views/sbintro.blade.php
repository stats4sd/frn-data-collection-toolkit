@extends('layouts.nohead')

@section('content')
<!--
<img src="{{ asset('img/odk-builder.jpg') }}" style="width: 100vw"/>
-->

<div class="container" style="width: 100%; max-width: 100vw;">
    <div class="row" style="height: 100vh">
        <div class="col-md-6 set-bg order-2 display-none display-md-block"
            data-setbg="{{ asset('img/agroecology1.jpg') }}"> </div>
        <div class="col-md-6 splash" style="background-color: #011627">
            <!-- <div class="py-5 px-5 splash" style="height: 100vh; width: 50vw; min-width: 360px; background-color: #12756b"> -->
            <div class="container px-0 mx-auto my-5" style="width: 80%; max-width: 30rem;">
                <div class="row">
                    <div class="col">
                        <h1 class="mb-5">ODK Survey Builder</h1>
                        <h4 class=" mt-2 mb-5 pb-5">Quickly generate surveys using harmonised indicators and question
                            banks for high-quality, consistent data collection.</h4>
                    </div>
                </div>
                <div class="row justify-content-center">

                    <div class="col-xl-6 order-2 order-lg-1">
                        <a href="#about" class="btn btn-lg">Find out More</a>
                    </div>
                    <div class="col-xl-6 pl-xl-4 order-1 order-lg-2">
                        <a href="{{ url('surveybuilder') }}" class="btn btn-lg btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container justify-content-center mt-5" style="width: 100%; max-width: 100vw;">
    <div id="about" class="row m-auto my-5 px-4" style="max-width: 1000px">
        <h2>ODK Survey Builder</h2>


        <p>This text should contain a brief explanation of how to use the survey builder, what it's useful for and etc.
            Dave to draft? </p>
        <p class="mb-4">Lorem ipsum pellentesque curabitur torquent est tincidunt est semper mauris fringilla viverra,
            sollicitudin
            ipsum ullamcorper pharetra condimentum risus dapibus eget taciti fringilla, volutpat enim tempor curae justo
            dapibus odio justo cras odio morbi quisque tempor mattis nostra cubilia facilisis mollis ullamcorper etiam
            in vehicula, pulvinar lacus erat libero litora nisi feugiat aliquam metus erat.</p>
    </div>
    <div class="row mt-5 justify-content-center" style="background-color: #e7ebec;">
        <div class="row" style="width: 80%; max-width: 1200px;">
            <div class="col-lg-6 px-4 pt-4 pb-2 pl-md-5">
                <div style="width: 80%; max-width: 40rem; display: block; float: right;">


                    <h1 class="mb-4 pb-2">Step 1</h1>
                    <h4 style="vertical-align: top; padding-top: 1rem; padding-bottom: 1.3rem">Select Categories</h4>
                    <p>Select the subject areas you are interested in finding out about. </p>
                    <p>The next step will show you indicators relevant to the categories you select. </p>

                </div>
            </div>
            <div class="col-lg-6 px-4 d-none d-lg-block">
                <!-- <div style="background: url(/img/builder1.png); background-size: cover; width: 90%; max-width: 30rem display: block; float: left; height: 115%; margin-top: 3rem; border: 2rem solid #ffffff;">
         -->
                <div
                    style="width:80%; min-width: 350px; height: 100%; display: block; float: left; margin-top: 2rem;  background-color: #ffffff; border: 1.5rem solid #fffff; box-shadow: 6px 6px 5px 2px #aaaaaaaa;">
                    <div style="margin: 5%; width: 90%; padding-bottom: 100%; background: url(/img/build1.png); background-size: 100% auto; background-repeat: no-repeat  "></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 pt-5 pb-4 justify-content-center" style="min-height: 20rem">
        <div class="row" style="width: 80%; max-width: 1200px;">
        <div class="col-lg-6 px-4 d-none d-lg-block">
                <!-- <div style="background: url(/img/builder1.png); background-size: cover; width: 90%; max-width: 30rem display: block; float: left; height: 115%; margin-top: 3rem; border: 2rem solid #ffffff;">
         -->
                <div
                    style="width:80%; min-width: 350px; height: 105%; display: block; float: left; margin-top: 2rem; margin-left: 8%; background-color: #ffffff; border: 1.5rem solid #fffff; box-shadow: 6px 6px 5px 2px #aaaaaaaa;">
<div style="margin: 5%; width: 90%; padding-bottom: 100%; background: url(/img/builder2.png); background-size: 100% auto; background-repeat: no-repeat  "></div>
                </div>
            </div>
            <div class="col-lg-6 px-4 pt-4 pr-lg-5">
                <div style="width: 80%; max-width: 40rem; display: block; float: left;">


                    <h1 class="mb-4 pb-2">Step 2</h1>
                    <h4 style="vertical-align: top; padding-top: 1rem; padding-bottom: 1.3rem">Choose Indicators</h4>
                    <p>You will see a list of all the predefined indicators available for your chosen subject areas. Select the ones you want to measure in your study.</p>
                    <p>Remember that using harmonised indicators is good practice for consistent data collection accross the CCRP network</p>

                </div>
            </div>

        </div>
    </div>


    <div class="row pt-5 justify-content-center" style="background-color: #e7ebec; min-height: 20rem;">
        <div class="row" style="width: 80%; max-width: 1200px;">
            <div class="col-lg-6 px-4 pt-4 pb-5 pl-md-5">
                <div style="width: 80%; max-width: 40rem; display: block; float: right;">


                    <h1 class="mb-4 pb-2">Step 3</h1>
                    <h4 style="vertical-align: top; padding-top: 1rem; padding-bottom: 1.3rem">Add Questions to your survey</h4>
                    <p>The question banks for each indicator will be displayed, and you can choose the ones you want to add to your survey.</p>
                    <p>You can also review the individual questions in each bank. </p>

                </div>
            </div>
            <div class="col-lg-6 px-4 d-none d-lg-block">
                <!-- <div style="background: url(/img/builder1.png); background-size: cover; width: 90%; max-width: 30rem display: block; float: left; height: 115%; margin-top: 3rem; border: 2rem solid #ffffff;">
         -->
                <div
                    style="width:80%; min-width: 350px; height: 100%; display: block; float: left; margin-top: 2rem;  background-color: #ffffff; border: 1.5rem solid #fffff; box-shadow: 6px 6px 5px 2px #aaaaaaaa;">
                    <div style="margin: 5%; width: 90%; padding-bottom: 100%; background: url(/img/builder3.png); background-size: 100% auto; background-repeat: no-repeat  "></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-5 justify-content-center" style="min-height: 20rem">
        <div class="row my-5" style="width: 80%; max-width: 1200px;">
        <div class="col-lg-6 px-4 d-none d-lg-block">
                <!-- <div style="background: url(/img/builder1.png); background-size: cover; width: 90%; max-width: 30rem display: block; float: left; height: 115%; margin-top: 3rem; border: 2rem solid #ffffff;">
         -->
                <div
                    style="width:80%; min-width: 350px; height: 103%; display: block; float: left; margin-top: 2rem; margin-left: 8%; background-color: #ffffff; border: 1.5rem solid #fffff; box-shadow: 6px 6px 5px 2px #aaaaaaaa;">
                    <div style="margin: 5%; width: 90%; padding-bottom: 100%; background: url(/img/builder4.png); background-size: 100% auto; background-repeat: no-repeat  "></div>
                </div>
            </div>
            <div class="col-lg-6 px-4 pt-4 pb-5 pr-lg-5">
                <div style="width: 80%; max-width: 40rem; display: block; float: left;">


                    <h1 class="mb-4 pb-2">Step 4</h1>
                    <h4 style="vertical-align: top; padding-top: 1rem; padding-bottom: 1.3rem">Preview and Download</h4>
                    <p>Here, you can preview how your survey will look and download the XLSX file ready to use in ODK.</p>

                </div>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row mx-1 my-5">

        <div style="text-align: center;" class="m-auto">
            <a class="site-btn my-4" href="{{ url('surveybuilder') }}">
                Get started
</a>
        </div>

    </div>
</div>

@endsection