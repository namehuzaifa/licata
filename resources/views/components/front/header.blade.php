<header class="bi__header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                {{-- <a class="navbar-brand" href="#"><img src="./assets/img/logo.png" alt=""></a> --}}
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- <img src="./assets/img/logo.png" alt=""> -->
                    <video src="{{ asset('front-assets/img/comingSoon/bg-overlay.mp4') }}" type="video/mp4" placeline muted autoplay loop />
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse gap-5" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ navActive(['home']) }} " aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ navActive(['aboutUs']) }}" href="{{ route('aboutUs') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ navActive(['services']) }}" href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ navActive(['blog']) }}" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ navActive(['contact']) }}" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                    <div class="d-flex gap-5 align-items-center">
                        <a href="tel:8082223333" class="phone">(808) 222-3333</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-success bi__btn">Get a quote</a>
                    </div>
                </div>
            </div>
        </nav>
        <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </button>
    </header>


