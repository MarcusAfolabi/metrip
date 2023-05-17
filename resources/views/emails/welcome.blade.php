@component('mail::message')
# Welcome to Our Application

<p>Dear {{ $user->name }},</p>
<p>Welcome to our application! We are excited to have you on board.</p>

{{ config('app.name') }}
@endcomponent