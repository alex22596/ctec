@component('mail::message')
#Necesitamos tu opinión

Para mejorar la calidad de nuestros servicios, necesitamos tu ayuda.Colabora con nosotros para mejorar la atención que te brindamos.

@component('mail::button', ['url' => 'www.google.com'])
Ayudanos
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
