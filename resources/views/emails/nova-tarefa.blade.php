@component('mail::message')
# {{ $tarefa }}

Data limite para conclusão: {{ $data_limite_conclusao }}

@component('mail::button', ['url' => $url])
Clique para ver a tarefa
@endcomponent

Att,<br>
{{ config('app.name') }}
@endcomponent
