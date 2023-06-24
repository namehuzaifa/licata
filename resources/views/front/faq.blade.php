@extends('layouts.frontMaster')
@section('title', 'FAQ  | '.config('app.name'))

@section('content')
    <main class="bi__mainContent">

        <section class="bi__hero page__title">
            <div class="container">
                <div class="d-flex">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-12">
                            <h1 class="hero__headingAnimate">FAQ</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item "><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                                </ol>
                            </nav>
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
                                    It is a long established fact that a reader will be distracted by the readable content
                                    of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                    here', making it look like readable English.
                                </p>
                                <a href="#" class="btn bi__btn">Get a quote</a>
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




        <section class="bi__faq mb-5">
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
                            <div class="accordion accordion-flush" id="accordionFlushExample">

                                @forelse ($faqs as $faq)
                                        <div class="accordion-item">
                                            <h3 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                   {{ $faq?->question }}
                                                </button>
                                            </h3>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
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

