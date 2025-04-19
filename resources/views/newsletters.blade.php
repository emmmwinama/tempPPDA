<x-app-layout>
    @section('title', 'Newsletters | Public Procurement and Disposal of Assets Authority')
    <x-header-news>
        {{ __('Newsletters') }}
    </x-header-news>
   @include('sections.Articles.newsletters.newsletter')
    @include('sections.homepage.footer')
</x-app-layout>
