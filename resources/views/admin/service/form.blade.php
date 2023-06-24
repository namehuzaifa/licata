@extends('layouts.master')
@section('title',($isEdit) ? "Edit Service" : 'Add Service'.' | '.config('app.name'))
@section('content')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0"> {{ ($isEdit) ? "Edit Service" : 'Add Service' }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">

            <!-- Basic Vertical form layout section start -->

            <section id="basic-vertical-layouts">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form form-vertical" method="POST" action="{{ ($isEdit) ?  route('service.update', $service->id) : route('service.store') }}" enctype="multipart/form-data" >
                                    @csrf
                                    @if ($isEdit) @method('PUT') @endif
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-title-vertical" >Title</label>
                                                <input type="text" id="first-title-vertical" class="form-control" value="{{ ($isEdit) ? $service?->title : old('title')  }}" name="title" placeholder="title" />
                                                @error('title')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6  col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="status">Status</label>
                                                <select class="form-select" id="status" name="status" required>
                                                    <option value="1" {{ ($isEdit && $service?->status) ? 'selected' : '' }}>active</option>
                                                    <option value="0" {{ ($isEdit && !$service?->status) ? 'selected': '' }}>Inactive</option>
                                                </select>
                                                @error('status')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6  col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="description">Description</label>
                                                <textarea class="form-control" name="description" id="" rows="8">{{ ($isEdit) ? $service?->description : old('description')  }}</textarea>
                                                @error('description')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-1">
                                                <label class="form-label" for="website-vertical">Banner image</label>
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type='file' id="imageUpload" name="b_image" accept="image/png, image/jpeg" />
                                                        <label for="imageUpload">
                                                            <i data-feather='edit' style="width: 33px; height: 29px;"></i>
                                                        </label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview" style="background-image: url({{ asset( (isset($service?->image)) ? $service?->image : 'assets/images/no-preview.png' ) }});">
                                                        </div>
                                                    </div>
                                                    @error('b_image')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror

                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Basic Vertical form layout section end -->

        </div>
    </div>
</div>

@endsection
@section('script')
    {{--  --}}
@endsection
