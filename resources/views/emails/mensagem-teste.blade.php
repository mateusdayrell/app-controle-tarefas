@component('mail::message')
# Introduction

Corpo da mensagem.

@component('mail::button', ['url' => ''])
Texto do botão
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
