<x-mail::message>
# contact from {{ $name }}

{{ $content }}

<x-mail::button :url="'http://essential.test/'">
visit us
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
