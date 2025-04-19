<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/favicon.png') }}"/>


    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/custom.css', 'resources/css/all.css',
    'resources/js/all.js', 'resources/css/fontawesome.css','resources/css/card.css'])

    <!-- Scripts -->
    {{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-[#F7FAFC] text-gray-600">
    @include('layouts.navigation')
{{--    @include('layouts.nav')--}}


    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-[#F7FAFC] shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-8 lg:p-12">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#tenderstable').DataTable();
        $('#intentionstable').DataTable();
        $('#awardstable').DataTable();
        $('#publicationstable').DataTable();
        $('#newsletterstable').DataTable();
        $('#debarmentstable').DataTable();
        $('#adminreviewstable').DataTable();
    } );
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>--}}
</body>
</html>
