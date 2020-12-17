@component('mail::message')
# Nuevas ofertas

Nuestro menu es {{$data['emailBody']}}

@component('mail::button', ['url' => route('home')])
Go to Sancho
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
