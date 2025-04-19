<x-app-layout>
    @section('title', 'Supplier Registration | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('SUPPLIER REGISTRATION: How do you become a supplier to the Malawi Government?') }}
    </x-page-hero>
    <div class="">

        {{ Breadcrumbs::render('supplier-registration') }}
    </div>
    @include('sections.supplier-registration.introduction')
{{--    @include('sections.supplier-registration.requirements')--}}
    @include('sections.homepage.footer')
</x-app-layout>




