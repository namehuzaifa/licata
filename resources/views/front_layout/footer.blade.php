
<footer class="bi__footer">
        <div class="container text-center">
            <div class="pt-4">
                <img src="{{asset('assets/img/footer-logo.png')}}" class="img-fluid pb-5" />
                <div class="row text-start text-white">
                    <div class="col-6 col-md-2 mb-3">
                        <h5>COMPANY</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="{{ route('aboutUs') }}" class="nav-link p-0">About Us</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Where're Hiring</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>FEATURES</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="{{ route('aboutUs') }}" class="nav-link p-0 ">Wyshes</a></li>
                            <li class="nav-item mb-2"><a href="{{ route('aboutUs') }}" class="nav-link p-0 ">Flexible coverage</a></li>
                            <li class="nav-item mb-2"><a href="{{ route('aboutUs') }}" class="nav-link p-0 ">Wysh granters</a></li>
                            <li class="nav-item mb-2"><a href="{{ route('aboutUs') }}" class="nav-link p-0 ">Instant coverage</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>RESOURCES</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="{{ route('blog') }}" class="nav-link p-0 ">Blog</a></li>
                            <li class="nav-item mb-2"><a href="{{ route('faq') }}" class="nav-link p-0 ">FAQ's</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Claims</a></li>
                            <li class="nav-item mb-2"><a href="{{ route('contact') }}" class="nav-link p-0 ">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-md-5 offset-md-1 mb-3">
                        <form>
                            <h5>GET OUR APP</h5>
                            <p>Monthly digest of what's new and exciting from us.</p>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <img src="{{asset('assets/img/apple.png')}}" />
                                <img src="{{asset('assets/img/google.png')}}" />
                            </div>
                            <h5 class="mt-3">FOLLOW US</h5>
                            <div class="d-flex gap-3 followus">
                                <img src="{{asset('assets/img/fb.png')}}" />
                                <img src="{{asset('assets/img/twitter.png')}}" />
                                <img src="{{asset('assets/img/insta.png')}}" />
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between pt-3 border-top text-white">
                    <p>© 2023 Company, Inc. All rights reserved.</p>
                    <a href="https://www.logomentary.com" style="color:#F7EAAF">Design By Logomentry</a>
                </div>
            </div>
        </div>
    </footer>
