<x-app-layout>
    @section('title', 'Administrative Reviews | Public Procurement and Disposal of Assets Authority')
    <div class="bg-gray-200">
        {{ Breadcrumbs::render('adminreviews') }}
    </div>
    @include('sections.admin-reviews.main')
    @include('sections.homepage.footer')
</x-app-layout>
