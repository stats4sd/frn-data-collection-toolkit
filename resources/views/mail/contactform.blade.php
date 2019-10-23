@component('mail::message')
# New FRN Information Platform Contact Form Message

A new message has been received from the FRN Info Platform contact form:

Name: **{{ $info->name }}**
Email: **{{ $info->email }}**

Message:

---

{{ $info->message }}

---

Thanks,<br>
{{ config('app.name') }}
@endcomponent
