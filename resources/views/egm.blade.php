<x-app-layout>
    @section('title', 'E-Government Marketplace | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('e-Government Marketplace') }}
    </x-page-hero>
    <div class="">
        {{ Breadcrumbs::render('egm') }}
    </div>
    @include('sections.Reforms.eGM.eGM')
    @include('sections.homepage.footer')

</x-app-layout>






