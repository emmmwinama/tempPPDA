<x-app-layout>
    @section('title', 'Board of Directors | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('Board of Directors') }}
    </x-page-hero>
    <div class="">
        {{ Breadcrumbs::render('board') }}
    </div>
    @include('sections.management.Board')
    @include('sections.homepage.footer')
</x-app-layout>
