<x-app-layout>
    @section('title', 'Contact Us | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('Contact Us') }}
    </x-page-hero>
    <div class="">
        {{ Breadcrumbs::render('contact') }}
    </div>
    @include('sections.contact.formc')
    @include('sections.homepage.map')
    @include('sections.homepage.footer')
</x-app-layout>




