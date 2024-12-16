@props(['active', 'navigate'])

@php
$classes = ($active ?? false)
            ? 'active-link'
            : '';
@endphp

<a {{ $navigate ?? true ? 'wire:navigate' : '' }} class="nav-link" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
