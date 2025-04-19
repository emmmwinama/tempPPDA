<x-app-layout>
    @section('title', 'Directorates and Departments | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('Directorates') }}
    </x-page-hero>
    <div class="bg-gray-200/50">
        {{ Breadcrumbs::render('directorates') }}
    </div>
    @include('sections.Directories.Directories')

    @include('sections.homepage.footer')
</x-app-layout>
