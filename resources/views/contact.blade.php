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
            <div id="app">
                <contact-form route="{{ route('contact.store') }}">
                    <template v-slot:="recaptcha">
                        @if(config('services.recaptcha.key'))
                            <div class="form-group required {{ $errors->has('g-recaptcha-response') ? 'has-error' : '' }}">
                                <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                                <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                            </div>
                        @endif
                    </template>
                </contact-form>

                @if(config('services.recaptcha.key'))
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection