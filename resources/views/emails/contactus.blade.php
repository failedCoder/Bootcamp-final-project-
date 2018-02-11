@component('mail::message')
# Pozdrav

Korisnik: {{$message->name}}

Email: {{$message->email}}

Poruka:

"{{$message->message}}"

Vrijeme slanja:
{{$message->created_at}}


Hvala,<br>
{{ config('app.name') }}
@endcomponent
