<x-app-layout>
    @section('title', 'News | Public Procurement and Disposal of Assets Authority')
{{--    <x-header-news>--}}
{{--        {{ __('Vacancy detail') }}--}}
{{--    </x-header-news>--}}
    <div class="bg-gray-200">
        {{ Breadcrumbs::render('vacancyitem', $vacancydetail) }}
    </div>
    @include('sections.vacancies.details')
    @include('sections.homepage.footer')
</x-app-layout>
