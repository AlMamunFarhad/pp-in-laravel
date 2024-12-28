@extends('admin.dashboard')
@section('adminContent')
    <div class="main-content" id="main_content">
        <div class="py-3 py-md-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    @include('success')
                    <div class="bg-light p-4 p-md-5 rounded shadow-sm">
                        <form action="{{ route('about.update', $about->id) }}" method="POST" class="login"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row gy-3 gy-md-4 overflow-hidden">
                                <div class="col-12">
                                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name" id="name" value="{{ $about->name }}">
                                    </div>
                                    @error('name')
                                        <span class="text-danger lh-sm mb-0 pb-0">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="title" class="form-label">Title <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="title" id="title" value="{{ $about->title }}">
                                    </div>
                                    @error('title')
                                        <span class="text-danger lh-sm mb-0 pb-0">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="description" class="form-label">Description <span
                                            class="text-danger">*</span></label>
                                        <textarea name="description" id="description" cols="30" rows="6" class="form-control">{{ $about->description }}</textarea>
                                    @error('description')
                                        <span class="text-danger mb-0 pb-0">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label for="image" class="form-label">image <span
                                            class="text-danger">*</span></label>
                                            <div class="mb-2">
                                                <img src="{{ asset($about->image) }}" alt="" width="120" height="80" class="img-thumbnail p-2 rounded-4">
                                            </div>
                                    <div class="input-group">
                                        <input type="file" name="image" id="image">                                                                              
                                    </div> 
                                    @error('image')
                                        <span class="text-danger lh-sm mb-0 pb-0">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="d-grid text-center">
                                        <button class="btn btn-primary text-sm form-control"
                                            type="submit">UPDATE</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <style>
        .login input {
            padding: .6rem !important;
        }
        .login-btn {
            background: var(--button-color) !important;
            border: 1px solid var(--button-border-color) !important;
        }
    </style>
@endpush
