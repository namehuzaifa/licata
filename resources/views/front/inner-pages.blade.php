@extends('layouts.frontMaster')
@section('title', 'Service  | '.config('app.name'))

@section('content')
    <main class="bi__mainContent">

        <section class="bi__hero page__title" style="background-image: url({{ asset('').$service?->image }})">
            <div class="container">
                <div class="d-flex">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-12">
                            <!-- <h1 class="hero__headingAnimate">{{ $service->title }}</h1> -->
                            <h1 class="hero__headingAnimate">Service Detail</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item "><a href="{{ route('home') }}">Service</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $service->title }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bi__contact my-5 inner_detail">
            <div class="container-fluid">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-12">
                            <div class="detail__content text-center">
                                <div class="content__box">

                                    <h1 class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <!-- <span class="hero__heading text-black">Detail </span> -->
                                            <span class="ps-3 pe-3 hero__heading hero__headingAnimate2">{{ $service->title }} </span>
                                        </div>
                                </div>
                                <!-- <div>
                                    <img src="{{ asset('').$service?->image }}" />
                                </div> -->
                                <div class="content mt-5">
                                    <p>
                                        {!! $service->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="bi__fourSteps">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="content__box">

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
        </section> --}}

        <!-- <section class="bi__faq">
            <div class="container">
                <div class="content__box text-center">

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
                                    </h3>
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
        </section> -->


    </main>
@endsection

