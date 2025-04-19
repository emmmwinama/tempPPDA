<x-app-layout>
    <x-page-hero>
        {{ __('Executive Management') }}
    </x-page-hero>
    <div class="">
        {{ Breadcrumbs::render('management') }}
    </div>
    @include('sections.management.management')
    @include('sections.homepage.footer')
</x-app-layout>
