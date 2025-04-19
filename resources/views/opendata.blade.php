<x-app-layout>
    @section('title', 'The Open Contracting Project | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('Open Contracting') }}
    </x-page-hero>
    <div class="">
        {{ Breadcrumbs::render('open-data-portal') }}
    </div>
    @include('sections.Reforms.OpenData.open-data-portal')
    @include('sections.homepage.footer')

</x-app-layout>
