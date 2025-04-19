@props([])

@php
    $classes = 'hero-image backdrop-blur-sm';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full">
        <div class="d-flex justify-content-baseline align-items-end h-full py-4">
            <p class="text-5xl font-normal text-white">{{ $slot }}</p>
        </div>
    </div>
</div>
