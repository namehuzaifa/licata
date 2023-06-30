@extends('layouts.frontMaster')
@section('title', 'Home  | '.config('app.name'))

@section('content')
<!-- <div class="bg__overlay">
        <video src="{{ asset('assets/img/comingSoon/bg-overlay.mp4') }}" type="video/mp4" playsinline muted="muted" autoplay controlslist="nodownload" />
    </div> -->
    <main class="bi__mainContent">
            <section class="bi__hero home">
                <div class="container">
                    <div class="d-flex">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-sm-12">
                                <div class="hero__content">
                                    <h1>
                                        <div class="d-flex">
                                            <span class="hero__heading">Get Fast, </span>
                                            <span class="ps-4 hero__headingAnimate">Affordable </span>
                                        </div>
                                        <div class="d-flex margin__negativeTop">
                                            <span class="hero__heading">Trucking </span>
                                            <span class="ps-4 hero__heading">Insurance </span>
                                        </div>
                                    </h1>

                                    <form id="newsletter" method="get" class="hero__form">
                                        @csrf
                                        {!! RecaptchaV3::field('register') !!}
                                        <div class="row">
                                            <div class="col">
                                                <input type="email" class="form-control" placeholder="Your Email"
                                                    aria-label="Your Email" name="email" required>
                                            </div>
                                            <div class="col">
                                                <input type="submit" class="form-control bi__btn" aria-label="Last name"
                                                    value="Subscribe">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="hero__image animate__animated animate__fadeInRightBig animate__slow">
                                    <img src="{{asset('front-assets/img/hero-truck.png')}}" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col-12">
                                <div class="hero__affiliation">
                                    <h3>AS SEEN ON</h3>
                                    <div class="d-flex logos">
                                        <img src="{{asset('front-assets/img/logo-1.png')}}" class="img-fluid" />
                                        <img src="{{asset('front-assets/img/logo-2.png')}}" class="img-fluid" />
                                        <img src="{{asset('front-assets/img/logo-3.png')}}" class="img-fluid" />
                                        <img src="{{asset('front-assets/img/logo-4.png')}}" class="img-fluid" />
                                        <img src="{{asset('front-assets/img/logo-5.png')}}" class="img-fluid" />
                                        <img src="{{asset('front-assets/img/logo-6.png')}}" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bi__services">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row justify-content-between align-items-end">
                            <div class="col-md-6 col-sm-12">
                                <div class="content__box">
                                    <h5 class="theme__color">
                                        TYPES OF COVERAGES
                                    </h5>
                                    <h1>
                                        <div class="d-flex">
                                            <span class="hero__heading text-black">WE CAN HELP WITH ALL</span>
                                        </div>
                                        <div class="d-flex margin__negativeTop">
                                            <span class="hero__heading text-black">OF YOUR </span>
                                            <span class="ps-4 hero__heading hero__headingAnimate">Insurance </span>
                                        </div>
                                    </h1>
                                    <p>
                                    We are passionate about supporting our clients in the transportation industry with the best insurance options available.
                                    We understand that every trucking company is unique, and we take pride in developing personalized coverage plans that fit the specific needs of our clients.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 text-end pb-4">
                                <a href="{{ route('services') }}" class="btn bi__btn">View All Products</a>
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
                                        {{ $service->description }}
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
                        </div> --}}
                    </div>
                </div>
            </section>

            <section class="bi__aboutUs">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-sm-12">
                            <div class="about__image">
                                <img src="{{asset('front-assets/img/about-img.png')}}" class="img-fluid" />
                                <img src="{{asset('front-assets/img/about-img-2.png')}}" class="img-fluid float__img" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="content__box">
                                <h5 class="theme__color">
                                    About us
                                </h5>
                                <h1>
                                    <div class="d-flex">
                                        <span class="hero__heading text-black">Modern</span>
                                        <span class="ps-3 pe-3 hero__heading hero__headingAnimate">Insurance </span>
                                        <span class="hero__heading text-black">Driven</span>
                                    </div>
                                    <div class="d-flex margin__negativeTop ">
                                        <span class="hero__heading text-black">By Service, Safety, And</span>
                                    </div>
                                    <div class="d-flex margin__negativeTop">
                                        <span class="hero__heading text-black">Savings. </span>
                                    </div>
                                </h1>
                                <p>
                                At Licata Insurance, we are an insurance company with a great passion for helping our clients protect what is important to them.
                                Our focus is always the customer, and we strive to understand their needs and provide personalized and effective solutions.
                                </p>
                                <a href="{{ route('aboutUs') }}" class="btn bi__btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bi__cta">
                <div class="container-fluid ">
                    <div class="container ">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-sm-12">
                                <div class="cta__text">
                                    <h2>
                                        Safe Fleets Can Earn Premium Discounts <br>
                                        Each Month With The First Dynamically-<br>
                                        Priced Insurance Policy For Trucking:</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="d-flex gap-4">
                                    <a href="tel:2107426167" class="btn bi__btn textures">210-742-6167</a>
                                    <a href="{{ route('aboutUs') }}" class="btn bi__btn" style="background:black; color: #fff">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bi__whyLicata">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-sm-12">
                            <div class="content__box">
                                </h5>
                                <h1>
                                    <div class="d-flex">
                                        <span class="hero__heading text-black">Why</span>
                                        <span class="ps-3 pe-3 hero__heading hero__headingAnimate">Licata </span>
                                    </div>
                                </h1>
                                <p>
                                Our team of experts is dedicated to providing you with exceptional service and support. You can have peace of mind knowing that
                                we will work with you to develop a personalized insurance plan that meets your specific needs. Contact us today to discuss our
                                Trucking coverage options and how we can help safeguard your business for years to come.
                                </p>
                                <a href="{{ route('contact') }}" class="btn bi__btn">Get a quote</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="d-flex flex-wrap justify-content-between row-gap-4">
                                <div class="col-md-6 col-sm-12">
                                    <div class="licata__box">
                                        <object type="image/svg+xml" data="{{asset('front-assets/img/flexible.svg')}}"></object>
                                        <h2>
                                            Flexible Plans
                                        </h2>
                                        <p>
                                            you can tailor and personalize with Wyshes.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="licata__box">
                                        <object type="image/svg+xml" data="{{asset('front-assets/img/calculate.svg')}}"></object>
                                        <h2>
                                            Calculate Your Coverage
                                        </h2>
                                        <p>
                                            needs with our Wysh Builder tool.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="licata__box">
                                        <object type="image/svg+xml" data="{{asset('front-assets/img/exam.svg')}}"></object>
                                        <h2>
                                            No Medical Exam Required
                                        </h2>
                                        <p>
                                            to purchase a term life policy.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="licata__box">
                                        <object type="image/svg+xml" data="{{asset('front-assets/img/customer.svg')}}"></object>
                                        <h2>
                                            Customer Support
                                        </h2>
                                        <p>
                                            that works with you and your family.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bi__testimonials">
                <div class="container-fluid">
                    <div class="container">
                        <div class="testimonial__heading text-center mb-5">
                            <div class="content__box">
                                </h5>
                                <h1 class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <span class="hero__heading text-black">Steadily Is The </span>
                                        <span class="ps-3 pe-3 hero__heading hero__headingAnimate2">Best-Rated </span>
                                    </div>
                                    <div class="d-flex justify-content-center margin__negativeTop">
                                        <span class="hero__heading text-black">Insurance Company In </span>
                                        <span class="ps-3 pe-3 hero__heading hero__headingAnimate">America </span>
                                    </div>
                                </h1>
                                <p style="font-size: 22px;">
                                    Rated Excellent <span class="theme__color">(4.8 stars out of 5)</span> on TrustPilot
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__sliderWrapperCenter">
                        @forelse ($testimonials as $testimonial)
                            <div class="testimonial__item">
                                <div class="d-flex align-items-center">
                                    <div class="featured__name">
                                        @if ($testimonial->image)
                                            <img src="{{ $testimonial->image }}" alt="">
                                        @else
                                            {{ strtoupper( titleShotName($testimonial->title) ) }}
                                        @endif
                                    </div>
                                    <h5>
                                        {{ $testimonial->title }}
                                        {{-- <span class="destination">Louisville, KY</span> --}}
                                    </h5>
                                </div>
                                <p class="testimonial__content">
                                    {{ $testimonial->description }}
                                </p>
                                <div class="stars d-flex">
                                    <div class="star">
                                    </div>
                                    <div class="star">
                                    </div>
                                    <div class="star">
                                    </div>
                                    <div class="star">
                                    </div>
                                    <div class="star">
                                    </div>
                                </div>
                            </div>
                        @empty

                        @endforelse


                        {{-- <div class="testimonial__item">
                            <div class="d-flex align-items-center">
                                <div class="featured__name">
                                    AC
                                </div>
                                <h5>
                                    Arnold Chambers
                                    <span class="destination">Louisville, KY</span>
                                </h5>
                            </div>
                            <p class="testimonial__content">
                                Steadily was super easy and I was able to set up my new policy quickly. Customer service
                                could not have been better. Highly recommended!
                            </p>
                            <div class="stars d-flex">
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="d-flex align-items-center">
                                <div class="featured__name">
                                    AC
                                </div>
                                <h5>
                                    Arnold Chambers
                                    <span class="destination">Louisville, KY</span>
                                </h5>
                            </div>
                            <p class="testimonial__content">
                                Steadily was super easy and I was able to set up my new policy quickly. Customer service
                                could not have been better. Highly recommended!
                            </p>
                            <div class="stars d-flex">
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="d-flex align-items-center">
                                <div class="featured__name">
                                    AC
                                </div>
                                <h5>
                                    Arnold Chambers
                                    <span class="destination">Louisville, KY</span>
                                </h5>
                            </div>
                            <p class="testimonial__content">
                                Steadily was super easy and I was able to set up my new policy quickly. Customer service
                                could not have been better. Highly recommended!
                            </p>
                            <div class="stars d-flex">
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <div class="testimonial__sliderWrapper">
                        <div class="testimonial__item">
                            <div class="d-flex align-items-center">
                                <div class="featured__name">
                                    AC
                                </div>
                                <h5>
                                    Arnold Chambers
                                    <span class="destination">Louisville, KY</span>
                                </h5>
                            </div>
                            <p class="testimonial__content">
                                Steadily was super easy and I was able to set up my new policy quickly. Customer service
                                could not have been better. Highly recommended!
                            </p>
                            <div class="stars d-flex">
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="d-flex align-items-center">
                                <div class="featured__name">
                                    AC
                                </div>
                                <h5>
                                    Arnold Chambers
                                    <span class="destination">Louisville, KY</span>
                                </h5>
                            </div>
                            <p class="testimonial__content">
                                Steadily was super easy and I was able to set up my new policy quickly. Customer service
                                could not have been better. Highly recommended!
                            </p>
                            <div class="stars d-flex">
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="d-flex align-items-center">
                                <div class="featured__name">
                                    AC
                                </div>
                                <h5>
                                    Arnold Chambers
                                    <span class="destination">Louisville, KY</span>
                                </h5>
                            </div>
                            <p class="testimonial__content">
                                Steadily was super easy and I was able to set up my new policy quickly. Customer service
                                could not have been better. Highly recommended!
                            </p>
                            <div class="stars d-flex">
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="d-flex align-items-center">
                                <div class="featured__name">
                                    AC
                                </div>
                                <h5>
                                    Arnold Chambers
                                    <span class="destination">Louisville, KY</span>
                                </h5>
                            </div>
                            <p class="testimonial__content">
                                Steadily was super easy and I was able to set up my new policy quickly. Customer service
                                could not have been better. Highly recommended!
                            </p>
                            <div class="stars d-flex">
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                                <div class="star">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </section>

            <section class="bi__insurance">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-sm-12">
                            <div class="insurance__img">
                                <img src="{{asset('front-assets/img/insurance-img.png')}}" />
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
                                    <a href="{{ route('contact') }}" class="btn bi__btn" style="background: #000; color:#fff">Get a quote</a>
                                    <img src="{{asset('front-assets/img/apple.png')}}">
                                    <img src="{{asset('front-assets/img/google.png')}}">
                                </div>
                            </div>
                        </div>
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
                                    <a href="{{ route('contact') }}" class="btn bi__btn" style="background: #000; color:#fff">Get a quote</a>
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

            <section class="bi__faq">
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
                        <div class="col-lg-12 col-md-12">
                            <div class="faq">
                                <div class="accordion accordion-flush row" id="accordionFlushExample">

                                    @forelse ($faqs as $faq)
                                        <div class="accordion-item col-lg-6 col-sm-12">
                                            <h3 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $faq->id }}"
                                                    aria-expanded="false" aria-controls="flush-collapse{{ $faq->id }}">
                                                   {{ $faq?->question }}
                                                </button>
                                            </h3>
                                            <div id="flush-collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">{{ $faq?->answer }}</div>
                                            </div>
                                        </div>
                                    @empty
                                        <p class="text-center">No FAQ added</p>
                                    @endforelse

                                    {{-- <div class="accordion-item">
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
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6 col-md-12">
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
                        </div> --}}
                    </div>
                </div>
        </section>
    </main>
@endsection

@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>


<script>
//     document.querySelector('.bg__overlay video').addEventListener('ended',myHandler,false);
//     function myHandler(e) {
//     $('.bg__overlay').fadeOut()
// }

$(document).on('submit', '#newsletter', function(e) {
        e.preventDefault()
        var $this = $(this);
        var data = $this.serialize()
        $this.find('input, button').prop('disabled', true);
        $this.find('.input-group').css({"opacity": "0.5",});
        $.ajax({
            type: "get",
            url: "{{ route('newsletter') }}",
            data: data,
            dataType: "json",
            success: function (data) {
                $this.find('input, button').prop('disabled', false);
                $this.find('.input-group').css({"opacity": "1",});
                console.log(data);
                if(data.status){
                    $this.trigger('reset')
                    swal(
                        'Success',
                        data.error,
                        'success'
                    )
                } else{
                    swal(
                        'Error!',
                        data.error,
                        'error'
                    )
                }
            },
            error: function (error) {
                $this.find('input, button').prop('disabled', false);
                $this.find('.input-group').css({"opacity": "1",});
                swal(
                    'Error!',
                    error.error,
                    'error'
                )
            }
        });
    });

</script>
@endsection
