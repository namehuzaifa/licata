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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ navActive(['services']) }}" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="true" href="{{ route('services') }}">Products</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @forelse (getServices() as $service)

                                    <li><a class="dropdown-item" href="{{ route('service-detail', $service->id) }}">{{ $service->title }}</a></li>

                                @empty
                                    <li><a class="dropdown-item" href="#">No Service Available</a></li>
                                @endforelse
                                
                                <!-- <li><a class="dropdown-item" href="#">Physical Damage</a></li>
                                <li><a class="dropdown-item" href="#">Cargo Liability</a></li>
                                <li><a class="dropdown-item" href="#">Commercial General Liability</a></li>
                                <li><a class="dropdown-item" href="#">Workers Comp</a></li>
                                <li><a class="dropdown-item" href="#">Bobtail</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ navActive(['blog']) }}" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ navActive(['contact']) }}" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                    <div class="d-flex gap-5 align-items-center">
                        <a href="tel:2107426167" class="phone">210-742-6167</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-success bi__btn">Get a quote</a>
                    </div>
                </div>
            </div>
        </nav>
        <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </button>
    </header>


