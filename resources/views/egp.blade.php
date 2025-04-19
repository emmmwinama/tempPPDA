<x-app-layout>
    @section('title', 'E-Government Procurement System | Public Procurement and Disposal of Assets Authority')
    @include('sections.Reforms.eGP.eGPslide')
    <div class="">
        {{ Breadcrumbs::render('egp') }}
    </div>
    @include('sections.Reforms.eGP.eGP')
    @include('sections.homepage.footer')

</x-app-layout>


