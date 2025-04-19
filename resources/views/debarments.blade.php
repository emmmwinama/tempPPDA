<x-app-layout>
    @section('title', 'Award Notices | Public Procurement and Disposal of Assets Authority')
    <div class="bg-gray-200">
        {{ Breadcrumbs::render('debarments') }}
    </div>
    @include('sections.debarments.main')
    @include('sections.homepage.footer')
</x-app-layout>
