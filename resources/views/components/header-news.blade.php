@props([])

@php
    $classes = 'newsletter-image';
@endphp


<div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="hero-text general-hero h-100 d-flex justify-content-center align-items-center">
        <p>{{ $slot }}</p>
    </div>
</div>
