<x-app-layout>
    @section('title', 'The e-Services Portal | Public Procurement and Disposal of Assets Authority')
    <x-page-hero>
        {{ __('e-Services Portal') }}
    </x-page-hero>
    <div class="">
        {{ Breadcrumbs::render('eServices') }}
    </div>
    @include('sections.Reforms.eServices.e-Services')
    @include('sections.homepage.footer')

</x-app-layout>
