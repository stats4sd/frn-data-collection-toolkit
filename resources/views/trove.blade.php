@extends('layouts.smhead')

@section('title')
Tools
@endsection

@section('content')

<div id="app" class="container px-4 pt-4">


    <div class="d-flex justify-content-start mt5 flex-wrap flex-lg-nowrap">
        <div class="cover-img">
            @if($trove->cover_image)
                <img src="{{ Storage::disk('gcs')->url($trove->cover_image) }}" class="img-fluid mr-4" alt="{{ $trove->title }}">
            @else
                <img src="http://lorempixel.com/640/480/nature" class="img-fluid mr-4" alt="{{ $trove->title }}">
            @endif
        </div>

        <div class="ml-0 ml-lg-4 mt-4 mt-lg-0">
<h3>
{{ $trove->title }}</h3>
            @if( $trove->type )
                <h5>
                    {{ $trove->type->name }}
                </h5>
            @else
                <div class="divider"></div>
            @endif

            @if($trove->tags)
                @foreach($trove->tags as $tag)
                    <span class="badge badge-pill badge-light">
                        {{ $tag->name }}
                    </span>
                @endforeach
            @endif

            <div class="mt-3">{!! $trove->description !!}</div>

        </div>
    </div>

    <div class="pb-4">
        <div class="card-body pl-0">
            <span class="font-weight-bold">Author(s):</span>
            @foreach($trove->authors as $author)
                {{ $author->name }}
                @if(! $loop->last), @endif
            @endforeach
        </div>
    </div>

    @if($trove->video_id)
        <div class="card border-dark pb-4 mb-4">
            <p class="alert alert-success">
                This resource includes a video on our YouTube channel, embedded here. You can download the original video file below.
            </p>
            <div class="d-flex flex-row justify-content-center">
                <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/{{ $trove->video_id }}"
                frameborder="0"
                allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                />
            </div>
        </div>
    @endif

    <div class="alert alert-info pb-4 mb-4 flex-wrap">
        <p class="mb-3">
            The individual components of the resource are listed below. Click on one to download the file or go to the external url. You can download the full resource below as a .zip file. External urls will be included as .url files. These files act as bookmarks and can be opened with any web browser.
        </p>
    </div>
    <elements
        :trove='{{ $trove->toJson() }}'

    >
    </elements>



</div>

@endsection