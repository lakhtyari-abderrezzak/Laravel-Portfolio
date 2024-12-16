@props(['active'])

@php
$classes = ($active ?? false)
            ? 'active-link'
            : '';
@endphp

<a class="nav-link" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
