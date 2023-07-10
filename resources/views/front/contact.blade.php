@extends('layouts.frontMaster')

@section('title', 'Contact Us  | '.config('app.name'))
@section('content')

    <main class="bi__mainContent">

        <section class="bi__hero page__title">
            <div class="container">
                <div class="d-flex">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-12">
                            <h1 class="hero__headingAnimate">Contact Us</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item "><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
                            <div class="wrapper">
                                <div class="row no-gutters">
                                    <div class="col-md-7 d-flex align-items-stretch">
                                        <div class="contact-wrap w-100 p-md-5 p-4">
                                            <h3 class="mb-4">Get in touch</h3>
                                            <div id="form-message-warning" class="mb-4"></div>
                                            <div id="form-message-success" class="mb-4">
                                                Your message was sent, thank you!
                                            </div>
                                            <form method="POST" action="{{ route('contact-store') }}" id="contactForm" name="contactForm" novalidate="novalidate">
                                               @csrf

                                               {!! RecaptchaV3::field('contact-query', $name='g-recaptcha-response') !!}
                                               {{-- {!! RecaptchaV3::field('contact') !!} --}}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="name"
                                                                id="name" placeholder="Name" required>
                                                        </div>
                                                        @error('name') <p class="alert alert-danger p-1"><small>{{ $message }}</small></p> @enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email"
                                                                id="email" placeholder="Email" required>
                                                        </div>
                                                        @error('email') <p class="alert alert-danger p-1"><small>{{ $message }}</small></p> @enderror
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="subject"
                                                                id="subject" placeholder="Subject" required>
                                                        </div>
                                                        @error('subject') <p class="alert alert-danger p-1"><small>{{ $message }}</small></p> @enderror
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea name="message" class="form-control" id="message"
                                                                cols="30" rows="15" placeholder="Message"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        @if (session('status') == 'success')
                                                            <p class="alert alert-success p-1"><small>{{ session('message') }}</small></p>
                                                        @endif
                                                        @if (session('status') == "failed")
                                                            <p class="alert alert-danger p-1"><small>{{ session('message') }}</small></p>
                                                        @endif
                                                        @error('g-recaptcha-response')
                                                            <p class="alert alert-danger p-1"><small>{{ $message }}</small></p>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="submit" value="Send Message"
                                                                class="btn bi__btn contact">
                                                            <div class="submitting"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-5 d-flex align-items-stretch">
                                        <div class="info-wrap bg-primary w-100 p-lg-5 p-4">
                                            <h3 class="mb-4 mt-md-4">Information</h3>
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-map-marker"></span>
                                                </div>
                                                <div class="text pl-3">
                                                    <p><span>Address:</span> 5900 Balconies Dr Ste 13213 Austin, Texas 78731</p>
                                                </div>
                                            </div>
                                            <div class="dbox w-100 d-flex align-items-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-phone"></span>
                                                </div>
                                                <div class="text pl-3">
                                                    <p><span>Phone:</span> <a href="tel:2107426167">210-742-6167</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="dbox w-100 d-flex align-items-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-paper-plane"></span>
                                                </div>
                                                <div class="text pl-3">
                                                    <p><span>Email:</span> <a
                                                            href="mailto:management@licata-insurance.com">Management@licata-insurance.com</a></p>
                                                </div>
                                            </div>
                                            <!--<div class="dbox w-100 d-flex align-items-center">-->
                                            <!--    <div class="icon d-flex align-items-center justify-content-center">-->
                                            <!--        <span class="fa fa-globe"></span>-->
                                            <!--    </div>-->
                                            <!--    <div class="text pl-3">-->
                                            <!--        <p><span>Website</span> <a href="#">yoursite.com</a></p>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
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

