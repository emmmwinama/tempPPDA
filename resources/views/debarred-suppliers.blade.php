<x-app-layout>
    @section('title', 'Debarred Suppliers | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('Debarred Suppliers') }}
    </x-page-hero>
    @include('sections.debarred-suppliers.suppliers-body')
    @include('sections.homepage.footer')
</x-app-layout>
