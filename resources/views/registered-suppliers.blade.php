<x-app-layout>
    @section('title', 'Registered Suppliers | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('Registered Suppliers') }}
    </x-page-hero>
    @include('sections.registered-suppliers.suppliers-body')
    @include('sections.homepage.footer')
</x-app-layout>
