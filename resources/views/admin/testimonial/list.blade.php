@extends('layouts.master')
@section('content')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Testimonial List</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-body">

                <!-- Basic table -->
                <section id="basic-datatable">

                    <div class="row">
                        <div class="col-12">
                            <div class="card p-1">
                                <div class="d-flex flex-row-reverse">
                                    <a class="btn btn-sm btn-primary" href="{{ route('testimonial.create') }}">Add Testimonial <i data-feather='plus'></i></a>
                                </div>
                                <table class="table table-bordered table-hover datatables-basic" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>Title</th>
                                            <th>image</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($testimonials as $key => $testimonial)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$testimonial->title}}</td>
                                            <td width="25%" ><img class="img-thumbnail w-25" src="{{ asset('/').$testimonial->image }}" onerror="this.onerror=null;this.src='{{ asset('assets/images/no-preview.png') }}';" alt=""></td>
                                            <td>
                                                <div class="badge {{$testimonial->status == 1 ? 'badge-light-success' : 'badge-light-danger'}}">{{$testimonial->status == 1 ? 'Active' : 'Inactive'}}</div>
                                            </td>
                                            <td>
                                                <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST">
                                                    <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="btn btn-sm btn-outline-primary">Edit <i data-feather='edit'></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" title="delete" class="btn btn-sm btn-outline-danger" style="border: none; background-color:transparent;" onclick="return confirm('Are you sure?')">
                                                      Delete <i data-feather='trash-2'></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
@include('components.admin.datatable-script')
