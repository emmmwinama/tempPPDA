<x-app-layout>
    @section('title', 'Intention To Award Notices | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('Intention To Award Notices') }}
    </x-page-hero>
    <div class="">
        {{ Breadcrumbs::render('intentions') }}
    </div>
    @include('sections.intentionnotices.main')
    @include('sections.homepage.footer')
</x-app-layout>
