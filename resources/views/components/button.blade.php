@props(['name'])

@php
    $classes = ''
@endphp

<button {{ $attributes->class([$classes]) }}>
    {{ $name }}
</button>
