<x-mail::message>
    # Contact from {{ $name }}

    {{ $message }}

    <x-mail::button :url="''">
        Visit Us
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
