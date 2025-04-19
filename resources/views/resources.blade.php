<x-app-layout>
    @section('title', 'Resources Center | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('General Resources') }}
    </x-page-hero>
    <div class="bg-gray-200">
        {{ Breadcrumbs::render('resources') }}
    </div>
    @include('sections.resources.main-content')
    @include('sections.homepage.footer')
</x-app-layout>
