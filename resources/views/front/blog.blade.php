@extends('layouts.frontMaster')
@section('title', 'Blog  | '.config('app.name'))
@section('content')
    <main class="bi__mainContent">

        <section class="bi__hero page__title">
            <div class="container">
                <div class="d-flex">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-12">
                            <h1 class="hero__headingAnimate">Blogs</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item "><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bi__blog text-center my-5">
            <div class="container">
                <div class="content__box">

                    <h1 class="text-center">
                        <div class="d-flex justify-content-center">
                            <span class="hero__heading text-black">Latest </span>
                            <span class="ps-3 pe-3 hero__heading hero__headingAnimate2">Blogs </span>
                        </div>
                </div>

                <div class="row">

                    @forelse ($blogs as $blog)
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple ripple-surface-light"
                                    data-mdb-ripple-color="light" style="">
                                    <img src="{{ asset('/').$blog?->image }}" class="img-fluid">
                                    <a href="{{ route('blog-detail', $blog?->id) }}">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $blog->title }}</h5>
                                    <p class="card-text">
                                        {!! $blog->description !!}
                                    </p>
                                    <a href="{{ route('blog-detail', $blog?->id ) }}" class="btn bi__btn article">Read</a>
                                </div>
                            </div>
                        </div>
                    @empty

                    @endforelse
                    {{-- <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple ripple-surface-light"
                                data-mdb-ripple-color="light" style="">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid">
                                <a href="{{ route('innerService') }}">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Post title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                                <a href="{{ route('innerService') }}" class="btn bi__btn article">Read</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid">
                                <a href="{{ route('innerService') }}">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Post title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                                <a href="{{ route('innerService') }}" class="btn bi__btn article">Read</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid">
                                <a href="{{ route('innerService') }}">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Post title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                                <a href="{{ route('innerService') }}" class="btn bi__btn article">Read</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>


    </main>
@endsection

