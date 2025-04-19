<x-app-layout>
    @section('title', 'Vacancies | Public Procurement and Disposal of Assets Authority')
    <div class="bg-gray-200">
        {{ Breadcrumbs::render('vacancies') }}
    </div>
    @include('sections.vacancies.main')
    @include('sections.homepage.footer')
</x-app-layout>
