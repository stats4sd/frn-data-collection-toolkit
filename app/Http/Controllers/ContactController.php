<?php

namespace App\Http\Controllers;

use App\Contact;
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
                'g-recaptcha-response' => 'required'
            ], [
            'g-recaptcha-response.required' => 'Please complete the recaptcha.'
            ]);

            // validate recaptcha
            $captchaSuccess = GenericHelper::validateRecaptcha($_POST['g-recaptcha-response']);

            if(! $captchaSuccess){
                return redirect('contact')->withErrors(['g-recaptcha-response' => 'failed to validate recaptcha'])->withInput();
            }
        }

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);


        $contact = Contact::create($request->all());

        Mail::to(config(''))->queue(
            new ContactFormSubmitted($contact)
        );

        return back()->with('success', 'Thanks for contacting us. Your message has been forwarded to the RMS team');
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
