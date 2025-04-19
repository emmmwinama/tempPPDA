<nav class="navbar navbar-expand-lg navbar-light bg-gray-100 py-3 shadow-md">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="mynavbar">

            <div class="me-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link px-3 py-3 hover:text-green-800" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-3 py-3  hover:text-green-800" href="{{ route('about-us') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About us
                    </a>

                    <ul class="dropdown-menu dropdown-menu-light text-justify">
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('about-us') }}">Mission, Vision, Values</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('board of directors') }}">Board of Directors</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('management') }}">Management</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('directories and departments') }}">Directorates</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('contact us') }}">Contact Us</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 py-3  hover:text-green-800" href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 py-3  hover:text-green-800" href="{{ route('supplier-registration') }}">Supplier Registration</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-3 py-3  hover:text-green-800" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Reforms
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light text-justify">
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('msme-order') }}">The MSME Order</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('eGP') }}">e-Government Procurement System</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('eGM') }}">e-Government Marketplace</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('open-data-portal') }}">Open Data and Open Contracting</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('eServices') }}">e-Services</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link px-3 py-3  hover:text-green-800 dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Notices</a>
                    <ul class="dropdown-menu dropdown-menu-light text-justify">
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('tenders') }}">Procurement Notices</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('intentions') }}">Intention to Award Notices</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('awards') }}">Award Notices</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('debarments') }}">Debarment Notices</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('adminreview') }}">Administrative Review Notices</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('vacancies') }}">Vacancies</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link px-3 py-3  hover:text-green-800 dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">News & Events</a>
                    <ul class="dropdown-menu dropdown-menu-light text-justify">
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('news') }}">Events</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('newsletters') }}">Newsletters</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link px-3 py-3  hover:text-green-800 dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Resources</a>
                    <ul class="dropdown-menu dropdown-menu-light text-justify">
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('circulars') }}">Circulars</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('reports') }}">Reports</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800 disabled" href="{{ route('research') }}">Procurement Plans</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('research') }}">Research</a></li>
                        <li><a class="dropdown-item px-3 py-3  hover:text-green-800" href="{{ route('resources') }}">General Resources</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
