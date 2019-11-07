@extends('layouts.smhead')

@section('title')
{{ $collection->title }}
@endsection

@section('content')

<div id="app" class="container px-4 pt-4">


    <div class="d-flex justify-content-start mt5 flex-wrap flex-lg-nowrap">
        <div class="cover-img">
            @if($collection->cover_image)
                <img src="{{ Storage::disk('gcs')->url($collection->cover_image) }}" class="img-fluid mr-4" alt="{{ $collection->title }}">
            @else
                <img src="http://lorempixel.com/640/480/nature" class="img-fluid mr-4" alt="{{ $collection->title }}">
            @endif
        </div>

        <div class="ml-0 ml-lg-4 mt-4 mt-lg-0">

            @if( $collection->type )
                <h5>
                    {{ $collection->type->name }}
                </h5>
            @else
                <div class="divider"></div>
            @endif

            @if($collection->tags)
                @foreach($collection->tags as $tag)
                    <span class="badge badge-pill badge-light">
                        {{ $tag->name }}
                    </span>
                @endforeach
            @endif

            <div class="mt-3">{!! $collection->description !!}</div>

        </div>
    </div>

    <resources
    collection-id="{{ $collection->id }}"
    storage-url="{{ Storage::disk('gcs')->url('') }}"
    />

</div>

@endsection