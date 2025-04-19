<x-app-layout>
    @section('title', 'Procurement Notices | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('Procurement Notices') }}
    </x-page-hero>
    @include('sections.tenders.main')
    @include('sections.homepage.footer')
</x-app-layout>

