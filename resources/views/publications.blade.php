<x-app-layout>
    @section('title', 'Publications | Public Procurement and Disposal of Assets Authority')
    <x-header-news>
        {{ __('Publications') }}
    </x-header-news>

    @include('sections.Articles.publications.publications')
    @include('sections.homepage.footer')
</x-app-layout>
