<x-app-layout>
    @section('title', 'Award Notices | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('Contract Award Notices') }}
    </x-page-hero>
    <div class="">
        {{ Breadcrumbs::render('awards') }}
    </div>
    @include('sections.awardnotices.main')
    @include('sections.homepage.footer')
</x-app-layout>
