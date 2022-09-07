@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>

    {{ $slot }}

    <x-form.error name="{{ $name }}"/>
</x-form.field>
