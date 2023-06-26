@extends('layouts.frontMaster')
@section('title', 'Service  | '.config('app.name'))

@section('content')
    <main class="bi__mainContent">

        <section class="bi__hero page__title">
            <div class="container">
                <div class="d-flex">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-12">
                            <h1 class="hero__headingAnimate">{{ $blog->title }}</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item "><a href="{{ route('home') }}">Blog</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bi__contact my-5">
            <div class="container-fluid">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-12">
                            <div class="detail__content text-center">
                                <div class="content__box">

                                    <h1 class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <span class="hero__heading text-black">Detail </span>
                                            <span class="ps-3 pe-3 hero__heading hero__headingAnimate2">Title </span>
                                        </div>
                                </div>
                                <div>
                                    <img src="{{ asset('/').$blog?->image }}" />
                                </div>
                                <div class="content mt-5">
                                    <p>
                                        {!! $blog->description !!}
                                    </p>
                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sem a quam
                                        convallis
                                        bibendum. Donec pulvinar enim id massa vulputate suscipit. Donec id odio mauris.
                                        Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                                        ridiculus
                                        mus. Proin vitae felis vel nunc tristique feugiat. Suspendisse a nisl ut orci
                                        malesuada faucibus in eu nisl. Quisque in dui malesuada, imperdiet sapien sed,
                                        fermentum sapien. Integer facilisis placerat vestibulum. Mauris interdum varius
                                        maximus.</p>

                                    <p>Ut ornare augue ac sem molestie, in lacinia libero laoreet. Morbi ac tortor at
                                        justo
                                        pulvinar porttitor. Nullam luctus velit urna, eget porttitor urna vestibulum
                                        vel.
                                        Nullam at molestie nisi, nec dignissim turpis. In pretium rutrum ex, ut
                                        dignissim
                                        nisl fringilla in. Duis sed porttitor quam, in ornare tellus. Integer rutrum
                                        facilisis nibh. Nullam facilisis nec nunc malesuada volutpat. Aenean venenatis
                                        lectus erat, vitae viverra lorem elementum ac. Pellentesque vel nibh arcu.
                                        Quisque a
                                        elementum nulla. Nullam placerat sodales neque sit amet maximus. Donec tempus
                                        tincidunt elit non egestas. Aliquam varius sed eros quis imperdiet. Quisque
                                        efficitur ultricies magna.</p>

                                    <p>Sed nibh justo, blandit consectetur malesuada at, luctus quis metus. Fusce at
                                        nibh
                                        scelerisque, luctus metus ut, consectetur tortor. Aliquam erat volutpat.
                                        Suspendisse
                                        vel blandit eros. Curabitur posuere aliquet consequat. Aenean felis libero,
                                        hendrerit at tincidunt sed, consequat vitae lorem. Aliquam sit amet euismod
                                        diam.</p> --}}
                                </div>
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

        <section class="bi__faq">
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
        </section>


    </main>
@endsection

