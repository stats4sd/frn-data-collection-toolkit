@extends('layouts.smhead')

@section('title')
All Resources
@endsection

@section('content')

<div id="app" class="container collection">

        <resources
        storage-url="{{ Storage::disk('gcs')->url('') }}"
        />
</div>


@endsection