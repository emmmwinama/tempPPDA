<x-app-layout>
    @section('title', 'Resources Center | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('Research Publications') }}
    </x-page-hero>
    <div class="bg-gray-200">
        {{ Breadcrumbs::render('research') }}
    </div>
    @include('sections.research.main-content')
    @include('sections.homepage.footer')
</x-app-layout>
