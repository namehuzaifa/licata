@extends('layouts.master')
@section('title',($isEdit) ? "Edit FAQ" : 'Add FAQ'.' | '.config('app.name'))
@section('content')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0"> {{ ($isEdit) ? "Edit FAQ" : 'Add FAQ' }}</h2>
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
                                <form class="form form-vertical" method="POST" action="{{ ($isEdit) ?  route('faq.update', $faq->id) : route('faq.store') }}" enctype="multipart/form-data" >
                                    @csrf
                                    @if ($isEdit) @method('PUT') @endif
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-title-vertical" >Question</label>
                                                <input type="text" id="first-title-vertical" class="form-control" value="{{ ($isEdit) ? $faq?->question : old('question')  }}" name="question" placeholder="Question" />
                                                @error('question')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6  col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="status">Status</label>
                                                <select class="form-select" id="status" name="status" required>
                                                    <option value="1" {{ ($isEdit && $faq?->status) ? 'selected' : '' }}>active</option>
                                                    <option value="0" {{ ($isEdit && !$faq?->status) ? 'selected': '' }}>Inactive</option>
                                                </select>
                                                @error('status')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12  col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="answer">Answer</label>
                                                <textarea class="form-control" name="answer" id="" rows="8">{{ ($isEdit) ? $faq?->answer : old('answer')  }}</textarea>
                                                @error('answer')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
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
