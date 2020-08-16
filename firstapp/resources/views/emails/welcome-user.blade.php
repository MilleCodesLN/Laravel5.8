@component('mail::message')
# Bienvenue

Merci, {{ $data->username}} de vous êtes inscrit sur notre application avec l'email {{ $data->email }}


Cordialement,<br>
{{ config('app.name') }}
@endcomponent
