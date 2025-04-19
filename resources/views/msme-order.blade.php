<x-app-layout>
    @section('title', 'MSME Order | Public Procurement and Disposal of Assets Authority')
    @include('sections.Reforms.MSME.MSMEslide')
    <div class="">
        {{ Breadcrumbs::render('msme-order') }}
    </div>
    @include('sections.Reforms.MSME.msme-order')
    @include('sections.homepage.footer')

</x-app-layout>
