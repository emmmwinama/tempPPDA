<x-app-layout>
    @section('title', 'Resources Center | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('Circulars') }}
    </x-page-hero>
    <div class="bg-gray-200">
        {{ Breadcrumbs::render('circulars') }}
    </div>
    @include('sections.circulars.main-content')
    @include('sections.homepage.footer')
</x-app-layout>
