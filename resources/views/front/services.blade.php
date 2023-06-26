@extends('layouts.frontMaster')
@section('title', 'Services  | '.config('app.name'))

@section('content')
    <main class="bi__mainContent">

        <section class="bi__hero page__title">
            <div class="container">
                <div class="d-flex">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-12">
                            <h1 class="hero__headingAnimate">Services</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item "><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bi__services">
            <div class="container-fluid">
                <div class="container">
                    <div class="row justify-content-between align-items-end">
                        <div class="col-md-12 col-sm-12 justify-content-center text-center">
                            <div class="content__box">
                                <h5 class="theme__color">
                                    TYPES OF DAMAGE
                                </h5>
                                <h1>
                                    <div class="d-flex justify-content-center">
                                        <span class="hero__heading text-black">WE CAN HELP WITH ALL</span>
                                    </div>
                                    <div class="d-flex margin__negativeTop justify-content-center">
                                        <span class="hero__heading text-black">OF YOUR </span>
                                        <span class="ps-4 hero__heading hero__headingAnimate">Insurance </span>
                                    </div>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 service__list">

                    @forelse ($services as $service)
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="service__box">
                                <div class="service__imgOverlay">
                                    <img src="{{asset('front-assets/img/service-img.png')}}" class="img-fluid" />
                                </div>
                                <h3>
                                    0{{ $service->id }}
                                </h3>
                                <h2 class="hero__headingAnimate">
                                    {{ $service->title }}
                                </h2>
                                <p class="d-none">
                                    {!! $service->description !!}
                                </p>
                                <a href="{{ route('service-detail', $service->id) }}" class="server__link">
                                    Read More
                                </a>
                            </div>
                        </div>
                    @empty

                    @endforelse

                        {{-- <div class="col-md-4 col-sm-6 col-12">
                            <div class="service__box">
                                <div class="service__imgOverlay">
                                    <img src="{{asset('front-assets/img/service-img.png')}}" class="img-fluid" />
                                </div>
                                <h3>
                                    01
                                </h3>
                                <h2 class="hero__headingAnimate">
                                COMMERCIAL AUTO LIABILITY
                                </h2>
                                <p class="d-none">
                                Our Liability coverage is designed to provide unparalleled protection in case of accidents or injuries that occur while driving your commercial vehicle.
                                You can rest easy knowing that you're covered for any damage or injuries caused by your truck to another vehicle or person.
                                </p>
                                <a href="{{ route('innerService') }}" class="server__link">
                                    Read More
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="service__box bordered">
                                <div class="service__imgOverlay">
                                    <img src="{{asset('front-assets/img/service-img.png')}}" class="img-fluid" />
                                </div>
                                <h3>
                                    02
                                </h3>
                                <h2 class="hero__headingAnimate">
                                    PHYSICAL DAMAGE
                                </h2>
                                <p class="d-none">
                                When it comes to your commercial vehicle, we understand that protection is essential. That's why we offer Physical Damage coverage,
                                which provides comprehensive and collision coverage for your truck - covering damage regardless of fault, such as damage resulting from
                                theft, vandalism, or natural disasters.
                                </p>
                                <a href="{{ route('innerService') }}" class="server__link">
                                    Read More
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="service__box">
                                <div class="service__imgOverlay">
                                    <img src="{{asset('front-assets/img/service-img.png')}}" class="img-fluid" />
                                </div>
                                <h3>
                                    03
                                </h3>
                                <h2 class="hero__headingAnimate">
                                    CARGO LIABILITY
                                </h2>
                                <p class="d-none">
                                    Cargo coverage is also available to safeguard your transportation business by protecting the goods your commercial vehicle carries -
                                    shielding you against damage, theft, or loss of cargo while your truck is in transit.
                                </p>
                                <a href="{{ route('innerService') }}" class="server__link">
                                    Read More
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="service__box">
                                <div class="service__imgOverlay">
                                    <img src="{{asset('front-assets/img/service-img.png')}}" class="img-fluid" />
                                </div>
                                <h3>
                                    04
                                </h3>
                                <h2 class="hero__headingAnimate">
                                    COMMERCIAL GENERAL LIABILITY
                                </h2>
                                <p class="d-none">
                                We also offer Commercial General Liability (GL) coverage, which provides protection against claims for injuries or property
                                damage that arise from your commercial operations. This coverage is especially important in the transportation industry
                                </p>
                                <a href="{{ route('innerService') }}" class="server__link">
                                    Read More
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="service__box bordered">
                                <div class="service__imgOverlay">
                                    <img src="{{asset('front-assets/img/service-img.png')}}" class="img-fluid" />
                                </div>
                                <h3>
                                    05
                                </h3>
                                <h2 class="hero__headingAnimate">
                                    WORKERS COMP
                                </h2>
                                <p class="d-none">
                                We also know that taking care of your employees is critical to ensuring a successful trucking business. Our Workers'
                                Compensation coverage offers benefits to employees who are injured while working, including medical expenses and lost wages.
                                </p>
                                <a href="{{ route('innerService') }}" class="server__link">
                                    Read More
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="service__box">
                                <div class="service__imgOverlay">
                                    <img src="{{asset('front-assets/img/service-img.png')}}" class="img-fluid" />
                                </div>
                                <h3>
                                    06
                                </h3>
                                <h2 class="hero__headingAnimate">
                                    BOBTAIL
                                </h2>
                                <p class="d-none">
                                Bobtail coverage provides the protection you need when your commercial vehicle is being operated without a trailer attached.
                                Whether you're returning to the warehouse or en route to a repair shop, we have you covered.
                                </p>
                                <a href="{{ route('innerService') }}" class="server__link">
                                    Read More
                                </a>
                            </div>
                        </div>--}}
                    </div>
            </div>
        </section>


        <section class="bi__fourSteps">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="content__box">
                            </h5>
                            <h1>
                                <div class="d-flex">
                                    <span class="hero__heading text-white">Sign Up In</span>
                                </div>

                                <div class="d-flex">
                                    <span class="pe-3 hero__heading hero__headingAnimate"> 4 </span>
                                    <span class="hero__heading text-white">Simple Steps</span>
                                </div>
                            </h1>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="btn bi__btn" style="background: #000; color:#fff">Get a quote</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="four__steps">
                            <ul>
                                <li class="d-flex">
                                    <span class="hero__headingAnimate">1</span>
                                    <p>Create a personalized plan</p>
                                </li>
                                <li class="d-flex">
                                    <span class="hero__headingAnimate">2</span>
                                    <p>Get your estimate in just a few clicks</p>
                                </li>
                                <li class="d-flex">
                                    <span class="hero__headingAnimate">3</span>
                                    <p>Answer some background question number four</p>
                                </li>
                                <li class="d-flex">
                                    <span class="hero__headingAnimate">4</span>
                                    <p>Get coverage in less than 10 mins</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bi__insurance">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-12">
                        <div class="insurance__img">
                            <img src="{{ asset('/') }}front-assets/img/insurance-img.png" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="content__box">
                            </h5>
                            <h1>
                                <div class="d-flex">
                                    <span class="hero__heading text-black">Insurance Online</span>
                                </div>
                                <div class="d-flex">
                                    <span class="hero__heading text-black">Made</span>
                                    <span class="ps-3 pe-3 hero__heading text-white"> Easy </span>
                                </div>
                            </h1>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="btn bi__btn" style="background: #000; color:#fff">Get a quote</a>
                                <img src="{{ asset('/') }}front-assets/img/apple.png">
                                <img src="{{ asset('/') }}front-assets/img/google.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        {{-- <section class="bi__faq">
            <div class="container">
                <div class="content__box text-center">
                    </h5>
                    <h1 class="text-center">
                        <div class="d-flex justify-content-center align-items-center">
                            <span class="pe-3 hero__heading text-black"> Check Out Our </span>
                            <span class="hero__heading hero__headingAnimate">FAQs</span>
                        </div>
                    </h1>
                    <p>
                        We’ve eliminated all the industry mumbo jumbo to answer your most burning questions.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="faq">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            What kind of life insurance does Wyshbox offer?
                                        </button>
                                    </h3>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">We’ve eliminated all the industry mumbo jumbo to
                                            answer your most burning questions.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            What is unique about a Wyshbox policy?
                                        </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">We’ve eliminated all the industry mumbo jumbo to
                                                answer your most burning questions.</div>
                                        </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Can I cancel at any time?
                                        </button>
                                    </h3>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">We’ve eliminated all the industry mumbo jumbo to
                                            answer your most burning questions.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="faq">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseFour">
                                            What kind of life insurance does Wyshbox offer?
                                        </button>
                                    </h3>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">We’ve eliminated all the industry mumbo jumbo to
                                            answer your most burning questions.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                            aria-expanded="false" aria-controls="flush-collapseFive">
                                            How much coverage do I need
                                        </button>
                                    </h3>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">We’ve eliminated all the industry mumbo jumbo to
                                            answer your most burning questions.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                            aria-expanded="false" aria-controls="flush-collapseSix">
                                            What is the difference between Trucking and insurance?
                                        </button>
                                    </h3>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">We’ve eliminated all the industry mumbo jumbo to
                                            answer your most burning questions.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

    </main>
@endsection

