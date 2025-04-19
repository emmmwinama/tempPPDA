<x-app-layout>
    @section('title', 'Our Services | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('Services') }}
    </x-page-hero>
    <div class="">
        {{ Breadcrumbs::render('services') }}
    </div>
    @include('sections.services.main-content')
    @include('sections.homepage.footer')
</x-app-layout>
