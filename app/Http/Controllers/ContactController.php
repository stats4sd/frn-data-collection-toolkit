<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Helpers\GenericHelper;
use App\Mail\ContactFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(config('services.recaptcha.key')) {

            $this->validate($request, [
                'recaptcha' => 'required'
            ], [
            'recaptcha.required' => 'Please complete the recaptcha.'
            ]);

            // validate recaptcha
            $captchaSuccess = GenericHelper::validateRecaptcha($request->recaptcha);

            if(! $captchaSuccess){
                return redirect('contact')->withErrors(['recaptcha' => 'failed to validate recaptcha'])->withInput();
            }
        }

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'purpose' => 'required',
        ]);


        $contact = Contact::create($request->all());

        Mail::to(config('mail.to.address'))->queue(
            new ContactFormSubmitted($contact)
        );

        return response()->json(null, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
