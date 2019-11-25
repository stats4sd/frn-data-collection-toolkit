@component('mail::message')
# New FRN Information Platform Contact Form Message

A new message has been received from the FRN Info Platform contact form:

Name: **{{ $contact->name }}**
Email: **{{ $contact->email }}**

Purpose: **{{ $contact->purpose }}**

Message:

---

{{ $contact->message }}

---

Thanks,<br>
{{ config('app.name') }}
@endcomponent
