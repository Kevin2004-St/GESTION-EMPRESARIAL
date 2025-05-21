@component('mail::message')
# ¡Hola {{ $user->name }}!

Gracias por registrarte en **{{ config('app.name') }}**.<br>  
Haz clic en el botón para verificar tu correo electrónico:

@component('mail::button', ['url' => $url, 'color' => 'primary'])
Verificar correo
@endcomponent

Si tú no creaste esta cuenta, puedes ignorar este correo.

Saludos,<br>
{{ config('app.name') }}

@endcomponent
