<x-app-layout>
    @section('title', 'About PPDA | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('About us') }}
    </x-page-hero>
    <div class="">
        <div class="">
            {{ Breadcrumbs::render('about') }}
        </div>
    </div>
    @include('sections.homepage.vision')
    @include('sections.homepage.footer')
</x-app-layout>
