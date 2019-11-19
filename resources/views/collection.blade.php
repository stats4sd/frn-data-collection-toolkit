@extends('layouts.smhead')

@section('title')
Tools
                    <h4 class="header  mb-3 mb-lg-4 pb-2 pb-lg-5">{{ $collection->title }}</h4>
@endsection

@section('content')

<div id="app" class="container collection">

<div class="d-flex justify-content-start mb-5 flex-wrap flex-lg-nowrap">
        <div class="cover-img" style="min-width: 35%">
            @if($collection->cover_image)
                <img src="{{ Storage::disk('gcs')->url($collection->cover_image) }}" class="img-fluid mr-4" alt="{{ $collection->title }}">
            @else
                <img src="http://lorempixel.com/640/480/nature" class="img-fluid mr-4" alt="{{ $collection->title }}">
            @endif
        </div>

        <div class="ml-0 ml-lg-4 mt-4 mt-lg-0">

            @if($collection->tags)
                @foreach($collection->tags as $tag)
                    <span class="badge badge-pill badge-light">
                        {{ $tag->name }}
                    </span>
                @endforeach
            @endif

            @if($collection->tags)
                @foreach($collection->tags as $tag)
                    <span class="badge badge-pill badge-light">
                        {{ $tag->name }}
                    </span>
                @endforeach
            @endif

            <div class="ml-3">{!! $collection->description !!}
                <!-- <p> Example text Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Justo laoreet sit amet cursus sit amet dictum sit. 

                </p>
<p>
Neque aliquam vestibulum morbi blandit cursus risus. Massa ultricies mi quis hendrerit dolor magna eget est. Ut morbi tincidunt augue interdum velit euismod in. Cras ornare arcu dui vivamus arcu felis. Pretium fusce id velit ut tortor pretium. Aliquam ultrices sagittis orci a scelerisque purus semper. Et netus et malesuada fames ac turpis egestas. Nunc sed velit dignissim sodales ut eu sem integer. Quis enim lobortis scelerisque fermentum dui faucibus in ornare quam. 
</p>
<p>
Consectetur lorem donec massa sapien. Cras pulvinar mattis nunc sed. Risus in hendrerit gravida rutrum quisque. Augue lacus viverra vitae congue eu consequat ac felis donec. Quis risus sed vulputate odio ut enim blandit. Morbi tristique senectus et netus et malesuada fames ac turpis. Aliquam id diam maecenas ultricies mi eget. Sed egestas egestas fringilla phasellus faucibus. Sit amet est placerat in egestas erat imperdiet sed euismod.
</p>
<p>
Sed pulvinar proin gravida hendrerit lectus. Erat nam at lectus urna duis convallis convallis. 
</p>
<p>
Ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Lacus laoreet non curabitur gravida arcu ac tortor. Aliquam faucibus purus in massa tempor nec feugiat nisl pretium.
</p>            </div> -->
</div>
</div>
</div>
<!-- 
    <div class="row justify-content-center">
        <div class="col-md-9 text-left">
<h3>{{ $collection->title }}</h3>
                @if( $collection->type )
                    <h5>
                        {{ $collection->type->name }}
                    </h5>

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
<div class="row justify-content-center">
<div class="col-md-9 text-left">
        <div class="cover-img w-100">
            @if($collection->cover_image)
                <img src="{{ Storage::disk('gcs')->url($collection->cover_image) }}"  alt="{{ $collection->title }}">
            @else
                <img src="http://lorempixel.com/640/480/nature"  alt="{{ $collection->title }}">
            @endif
        </div>
</div>
        
    </div> -->
    <resources
    collection-id="{{ $collection->id }}"
    storage-url="{{ Storage::disk('gcs')->url('') }}"
    />

</div>

@endsection