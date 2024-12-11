@extends('admin.dashboard')
@section('adminContent')
    <div class="main-content" id="main_content">
        <div class="py-3 py-md-5 mt-5">
            <div class="row">
                <div class="col-xl-8 shadow-sm">
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                            <tr>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($abouts as $about)
                                <tr>
                                    <td class="d-flex">
                                        <img src="{{ asset($about->image) }}" alt="" style="width: 45px; height: 45px"
                                            class="rounded-circle " />
                                        <p class="fw-bold mb-1 pl-3 py-2">{{ $about->name }}</p>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1 py-2">{{ $about->title }}</p>
                                    </td>
                                    <td><p class="py-2">{{ Str::words($about->description, 5) }}</p></td>
                                    <td class="py-3">
                                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="d-flex">
                                            <a href="{{ route('edit.about', $about->id) }}" class="btn btn-link btn-rounded btn-sm fw-bold shadow-sm"
                                                data-mdb-ripple-color="dark">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>
                                            <form action="{{ route('destroy.about', $about->id) }}" method="POST" class="ml-3" onsubmit="return confirm('Are you sure you want to delete?')">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-danger btn-rounded btn-sm fw-bold shadow-sm me-2"><i class="bi bi-x-square-fill"></i></button>                              
                                          </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-xl-4">
                    @include('success')
                    <div class="bg-light p-4 p-md-5 rounded shadow-sm">
                        <form action="{{ route('create.about') }}" method="POST" class="login"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row gy-3 gy-md-4 overflow-hidden">
                                <div class="col-12">
                                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    @error('name')
                                        <span class="text-danger lh-sm mb-0 pb-0">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="title" class="form-label">Title <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="title" id="title">
                                    </div>
                                    @error('title')
                                        <span class="text-danger lh-sm mb-0 pb-0">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="description" class="form-label">Description <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <textarea name="description" id="description" cols="30" rows="3" class="form-control"></textarea>
                                    </div>
                                    @error('description')
                                        <span class="text-danger mb-0 pb-0">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="image" class="form-label">image <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" name="image" id="image">
                                    </div>
                                    @error('image')
                                        <span class="text-danger lh-sm mb-0 pb-0">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="d-grid text-center">
                                        <button class="btn btn-primary login-btn form-control"
                                            type="submit">Submit</button>
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
