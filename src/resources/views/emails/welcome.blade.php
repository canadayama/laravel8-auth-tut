@component('mail::message')
# Welcome to my Authentication & Mailing Course

I would linke to thank you for watching this video.

@component('mail::button', ['url' => 'https:://www.codewithdary.com'])
Visit Site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
