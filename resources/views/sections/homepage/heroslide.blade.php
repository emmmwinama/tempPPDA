<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators" style="z-index: -11">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/images4.jpg') }}" alt="Los Angeles" class="d-block w-100">
            <div class="carousel-caption backdrop-blur-lg mb-0.5 rounded">
                <h1 class="hero-heading sm:text-lg md:text-2xl lg:text-4xl text-gray-100">Public Procurement and Disposal of Assets Authority</h1>
                <p class="hero-text text-gray-100">Established by the PPD Act of 2017 with the mandate to regulate, monitor and
                    oversee public procurement in Malawi</p>
                <div class="hero-wel-buttons pt-3 ">
                    <a href="{{ route('about-us') }}" class="btn bg-green-800 text-green-100 hover:bg-transparent hover:text-green-800 px-5">About Us</a>
                    {{--                    <a href="{{ route('about-us') }}" class="btn btn-lg btn-primary" style="border-radius: 10px">About Us</a>--}}
                    <a href="{{ route('about-us') }}" class="btn bg-green-100/5 text-green-800 hover:bg-green-800 hover:text-green-100 px-5 border-green-800">PPD Act of 2017</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/images5.jpg') }}" alt="Los Angeles" class="d-block w-100">
            <div class="carousel-caption backdrop-blur-lg mb-0.5 rounded">
                <h1 class="hero-heading sm:text-lg md:text-2xl lg:text-4xl text-gray-100">Public Procurement and Disposal of Assets Authority</h1>
                <p class="hero-text text-gray-100">Established by the PPD Act of 2017 with the mandate to regulate, monitor and
                    oversee public procurement in Malawi</p>
                <div class="hero-wel-buttons pt-3 ">
                    <a href="{{ route('about-us') }}" class="btn bg-green-800 text-green-100 hover:bg-transparent hover:text-green-800 px-5">About Us</a>
                    {{--                    <a href="{{ route('about-us') }}" class="btn btn-lg btn-primary" style="border-radius: 10px">About Us</a>--}}
                    <a href="{{ route('about-us') }}" class="btn bg-green-100/5 text-green-800 hover:bg-green-800 hover:text-green-100 px-5 border-green-800">PPD Act of 2017</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/images8.jpg') }}" alt="Los Angeles" class="d-block w-100">
            <div class="carousel-caption backdrop-blur-lg mb-0.5 rounded">
                <h1 class="hero-heading sm:text-lg md:text-2xl lg:text-4xl text-green-800">Public Procurement and Disposal of Assets Authority</h1>
                <p class="hero-text text-green-800">Established by the PPD Act of 2017 with the mandate to regulate, monitor and
                    oversee public procurement in Malawi</p>
                <div class="hero-wel-buttons pt-3 ">
                    <a href="{{ route('about-us') }}" class="btn bg-green-800 text-green-100 hover:bg-transparent hover:text-green-800 px-5">About Us</a>
{{--                    <a href="{{ route('about-us') }}" class="btn btn-lg btn-primary" style="border-radius: 10px">About Us</a>--}}
                    <a href="{{ route('about-us') }}" class="btn bg-green-100/5 text-green-800 hover:bg-green-800 hover:text-green-100 px-5 border-green-800">PPD Act of 2017</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
