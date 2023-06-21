@extends('front_layout.app')
@section('title', 'About Us  | '.config('app.name'))

@section('content')
    <main class="bi__mainContent">

        <section class="bi__hero page__title">
            <div class="container">
                <div class="d-flex">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-12">
                            <h1 class="hero__headingAnimate">About Us</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item "><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bi__aboutUs my-5">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-12">
                        <div class="about__image">
                            <img src="{{asset('assets/img/about-img.png')}}" class="img-fluid" />
                            <img src="{{asset('assets/img/about-img-2.png')}}" class="img-fluid float__img" />
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
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English.
                            </p>
                            <!-- <a href="#" class="btn bi__btn">Read more</a> -->
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
                            <img src="{{asset('assets/img/insurance-img.png')}}" />
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
                                <img src="{{asset('assets/img/apple.png')}}" />
                                <img src="{{asset('assets/img/google.png')}}" />
                            </div>
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
        </section>

    </main>
@endsection

