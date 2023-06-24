@extends('layouts.frontMaster')
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

        <section class="bi__aboutUs about">
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
                            <p>
                            With more than 10 years of experience in the insurance industry, our team has the knowledge and skills necessary to advise our
                            clients at all stages of their lives and businesses.
                            </p>
                            <p>
                            Whether they need to insure a Trucking company, automobile, home insurance, life insurance, business insurance or any other type
                            of coverage, we are here to help them find the best option for them.
                            </p>
                            <!-- <a href="#" class="btn bi__btn">Read more</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                        <div class="col-12">
                            <div class="content__box full text-center">
                                <p>
                                We pride ourselves on providing exceptional service to our customers, and we're always available to answer questions, resolve issues,
                                and even help you file a claim.Our goal is to provide peace of mind to our clients, knowing that they are protected in any situation.
                                </p>
                                <p>
                                At Licata Insurance, we value the trust our clients place in us, and we always strive to exceed their expectations. If you're looking
                                for reliable and affordable insurance in the Miami area, don't hesitate to contact us.
                                </p>
                                <h1 style="width:100%">
                                    <div class="d-flex justify-content-center">
                                        <span class="hero__heading text-black">Today! We are </span>
                                        <span class="ps-3 pe-3 hero__heading hero__headingAnimate">Ready </span>
                                    </div>
                                    <div class="d-flex margin__negativeTop justify-content-center">
                                        <span class="hero__heading text-black">to help you</span>
                                    </div>
                                </h1>
                                <p>
                                At Licata Insurance, we are an insurance company with a passion for helping our clients protect what is important to them. Our focus is
                                always on the customer, and we strive to understand their needs and provide personalized and effective solutions.
                                </p>
                                <p>
                                With over 10 years of experience in the insurance industry, our team has the knowledge and skills necessary to advise our clients at
                                all stages of their lives and businesses.Whether you need Trucking insurance, car insurance, home insurance, life insurance, business
                                insurance, or any other type of coverage, we are here to help them find the best option for them.
                                </p>
                                <p>
                                We take pride in offering exceptional service to our clients, and we are always available to answer questions, solve problems, and even help
                                them file a claim. Our goal is to provide peace of mind to our clients, knowing that they are protected in any situation.
                                </p>
                                <p>
                                At Licata Insurance, we value the trust our clients place in us, and we always strive to exceed their expectations. If you are looking for
                                reliable and affordable insurance in the big state of Texas, do not hesitate to contact us today.We are ready to help you.
                                </p>

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
                                <a href="#" class="btn bi__btn" style="background: #000; color:#fff">Get a quote</a>
                                <img src="{{asset('front-assets/img/apple.png')}}" />
                                <img src="{{asset('front-assets/img/google.png')}}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection

