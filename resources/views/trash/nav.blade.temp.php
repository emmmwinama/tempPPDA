<nav class="navbar navbar-expand-lg bg-light navbar-light py-4 shadow" >
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto mx-3">
                <li class="nav-item">
                    <a class="nav-link p-3" href="{{ route('home') }}">Home</a>
                </li>
                <li class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About us
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light">
                                <li><a class="dropdown-item" href="{{ route('about-us') }}">Mission, Vision, Values</a></li>
                                <li><a class="dropdown-item" href="#">Board of Directors</a></li>
                                <li><a class="dropdown-item" href="#">Management</a></li>
                                <li><a class="dropdown-item" href="#">Directories and Departments</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link p-3" href="#">Open data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3" href="{{ route('supplier-registration') }}">Supplier registration</a>
                </li>
                <li class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Projects
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light">
                                <li><a class="dropdown-item" href="{{ route('about-us') }}">The MSME order</a></li>
                                <li><a class="dropdown-item" href="#">Open data and Open contracting</a></li>
                                <li><a class="dropdown-item" href="#">e-Government procurement system</a></li>
                                <li><a class="dropdown-item" href="#">e-Government Marketplace</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3" href="#">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3" href="#">Resources</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3" href="{{ route('contact us') }}">Contact us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{--<nav class="navbar navbar-expand-lg bg-light ">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="#">--}}
{{--            <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />--}}
{{--        </a>--}}
{{--        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">--}}
{{--            <ul class="navbar-nav nav me-auto mb-2 mb-lg-0">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" aria-current="page" href="#">Home</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Link</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link disabled">Disabled</a>--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--            <a class="btn btn-success btn-lg d-flex" >Sign In</a>--}}
{{--        </div>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--</nav>--}}
