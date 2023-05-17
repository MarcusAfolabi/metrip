<x-mail::message>
# {{ $user->first_name }}, Welcome to Our Application

Welcome to our application! We are excited to have you on board.

<!-- <x-mail::button :url="''">
Button Text
</x-mail::button> -->

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
