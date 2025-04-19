<div id="carouselExampleCaptions" class="carousel slide carousel-fade lg:block hidden carousel-lg" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src=" {{ asset('images/images4.jpg') }}" class="d-block w-100 img-fluid" alt="...">
            @include('trash.hero-caption')
        </div>
        <div class="carousel-item">
            <img src=" {{ asset('images/images5.jpg') }}" class="d-block w-100" alt="...">
            @include('trash.hero-caption')
        </div>
        <div class="carousel-item">
            <img src=" {{ asset('images/images8.jpg') }}" class="d-block w-100" alt="...">
            @include('trash.hero-caption')
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div id="carouselExampleCaptions" class="carousel slide carousel-fade lg:hidden md:hidden block carousel-sm" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src=" {{ asset('images/sm1.jpg') }}" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
                @include('trash.hero-caption')
            </div>
        </div>
        <div class="carousel-item">
            <img src=" {{ asset('images/sm2.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                @include('trash.hero-caption')
            </div>
        </div>
        <div class="carousel-item">
            <img src=" {{ asset('images/sm3.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                @include('trash.hero-caption')
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div id="carouselExampleCaptions" class="carousel slide carousel-fade lg:hidden md:block hidden carousel-sm" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src=" {{ asset('images/md1.jpg') }}" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
                @include('trash.hero-caption')
            </div>
        </div>
        <div class="carousel-item">
            <img src=" {{ asset('images/md2.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                @include('trash.hero-caption')
            </div>
        </div>
        <div class="carousel-item">
            <img src=" {{ asset('images/md3.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                @include('trash.hero-caption')
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
