@component('mail::message')
# ¡Hola {{ $user->name }}!

Hemos recibido una solicitud de inicio de sesión en tu cuenta de **{{ config('app.name') }}**.

Tu código de verificación es:

# {{ $otp }}

Este código expirará en **5 minutos**.  
Por seguridad, no compartas este código con nadie.

Si no fuiste tú quien intentó iniciar sesión, te recomendamos cambiar tu contraseña.

Gracias,<br>
{{ config('app.name') }}
@endcomponent
