@props(['title' => null, 'bodyCssClass' => null])

<x-base-layout :$title :$bodyCssClass>
    <x-layouts.header />
    {{ $slot }}
</x-base-layout>
