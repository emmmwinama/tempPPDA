<x-app-layout>
    @section('title', 'Resources Center | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('Reports') }}
    </x-page-hero>
    <div class="bg-gray-200">
        {{ Breadcrumbs::render('reports') }}
    </div>
    @include('sections.reports.main-content')
    @include('sections.homepage.footer')
</x-app-layout>
