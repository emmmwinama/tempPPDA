<x-app-layout>
    @section('title', $newsdetail->title.' | PPDA')
    <x-header-news>
        {{ __('Events') }}
    </x-header-news>
    <div class="">
        {{ Breadcrumbs::render('newsitem', $newsdetail) }}
    </div>
    @include('sections.Articles.news.newsdetail')
    @include('sections.homepage.footer')
</x-app-layout>
