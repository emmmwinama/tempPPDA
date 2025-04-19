<x-app-layout>
    @section('title', 'News and Events | Public Procurement and Disposal of Assets Authority')

    <x-page-hero>
        {{ __('News and Events') }}
    </x-page-hero>

    <div class="">
        {{ Breadcrumbs::render('news') }}
    </div>

    @include('sections.Articles.news.news')
    @include('sections.homepage.footer')
</x-app-layout>
