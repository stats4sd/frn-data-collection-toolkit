@extends('layouts.smhead')


@section('title')
Contact
@endsection

@section('content')


<div class="container d-flex">
    <div class="row px-3 px-md-0">
        <div class="col-md-10 offset-md-1">

            <p>Do you have a resource you want to share? Do you want to get involved in curating and reviewing our collection? Do you have comments or feedback for us? </p>
            <p>Use the form below to contact us, and we'll get back to you as soon as we can.</p>
            @if(Session::has('success'))
               <div class="alert alert-success">
                 {{ Session::get('success') }}
               </div>
            @endif
            {!! Form::open(['route'=>'contact.store']) !!}

            @if(config('services.recaptcha.key'))
                <div class="form-group {{ $errors->has('g-recaptcha-response') ? 'has-error' : '' }}">
                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                </div>
            @endif

            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} mt-5">
            {!! Form::label('Name:') !!}
            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Your Name']) !!}
            <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::label('Email:') !!}
            {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Your Email']) !!}
            <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
            {!! Form::label('Message:') !!}
            {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
            <span class="text-danger">{{ $errors->first('message') }}</span>
            </div>
            <div class="form-group">
            <button class="btn btn-primary site-btn mt-3">Contact Us</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection