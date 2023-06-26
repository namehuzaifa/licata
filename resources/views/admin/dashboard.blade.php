@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

<style>
    .avatar-content svg{
        height: 20px;
        width: 20px;
        font-size: 1.45rem;
        flex-shrink: 0;
    }
</style>
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
<div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- Dashboard Analytics Start -->
        <section id="dashboard-analytics">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="fw-bolder mb-75">{{ $newsLetter }}</h3>
                                <span>Total NewsLetter</span>
                            </div>
                            <div class="avatar bg-light-primary p-50">
                                <span class="avatar-content">
                                    <i data-feather='mail'></i>
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-4"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> --}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="fw-bolder mb-75">{{ $blog }}</h3>
                                <span>Total Blog</span>
                            </div>
                            <div class="avatar bg-light-success p-50">
                                <span class="avatar-content">
                                    <i data-feather='message-circle'></i>
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check font-medium-4"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg> --}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="fw-bolder mb-75">{{ $faq  }}</h3>
                                <span>Total FAQ</span>
                            </div>
                            <div class="avatar bg-light-danger p-50">
                                <span class="avatar-content">
                                    <i data-feather='grid'></i>
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-x font-medium-4"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="18" y1="8" x2="23" y2="13"></line><line x1="23" y1="8" x2="18" y2="13"></line></svg> --}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="fw-bolder mb-75">{{ $service }}</h3>
                                <span>Total Sevice</span>
                            </div>
                            <div class="avatar bg-light-danger p-50">
                                <span class="avatar-content">
                                    <i data-feather='sliders'></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="fw-bolder mb-75">{{ $testimonial }}</h3>
                                <span>Total Testimonial</span>
                            </div>
                            <div class="avatar bg-light-success p-50">
                                <span class="avatar-content">
                                    <i data-feather='message-square'></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="fw-bolder mb-75">{{ $Location }}</h3>
                                <span>Total Location</span>
                            </div>
                            <div class="avatar bg-light-primary p-50">
                                <span class="avatar-content"><i data-feather='map'></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="fw-bolder mb-75">{{ $Employers }}</h3>
                                <span>Employers Contact</span>
                            </div>
                            <div class="avatar bg-light-warning p-50">
                                <span class="avatar-content"><i data-feather='check-square'></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="fw-bolder mb-75">{{ $ManageResume }}</h3>
                                <span>Total Applied job</span>
                            </div>
                            <div class="avatar bg-light-danger p-50">
                                <span class="avatar-content"><i data-feather='arrow-down-circle'></i></span>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- Dashboard Analytics end -->
    </div>
</div>
</div>
@endsection
