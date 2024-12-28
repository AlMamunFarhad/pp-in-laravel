@extends('admin.dashboard')
@section('adminContent')
    <div class="row justify-content-center">
        @include('success')
        <div class="col-xl-12 shadow-sm rounded-5 mb-4 grid-margin stretch-card p-0">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">About</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th class="text-end pe-5">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($abouts as $about)
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <img src="{{ asset($about->image) }}" alt=""
                                                    style="width: 45px; height: 45px" class="rounded-circle " />
                                                <p class="fw-bold mb-1 pl-3 py-2">{{ $about->name }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1 py-2">{{ $about->title }}</p>
                                        </td>
                                        <td>
                                            <p class="py-2">{{ Str::words($about->description, 5) }}</p>
                                        </td>
                                        <td class="py-3">
                                            <span class="badge badge-success rounded-pill d-inline">Active</span>
                                        </td>
                                        <td class="py-3 px-0">
                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('about.edit', $about->id) }}"
                                                    class="btn btn-rounded btn-sm fw-bold shadow-sm">
                                                    <i class="bi bi-pencil-fill text-dark"></i>
                                                </a>
                                                <form action="{{ route('about.destroy', $about->id) }}" method="POST"
                                                    class="ml-3"
                                                    onsubmit="return confirm('Are you sure you want to delete?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger btn-rounded btn-sm fw-bold shadow-sm me-2"><i
                                                        class="bi bi-trash ps-1"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 p-0">
            <div class="bg-white p-5 rounded-4 shadow-sm">
                <form action="{{ route('about.store') }}" method="POST" class="login" enctype="multipart/form-data">
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
                            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
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
                                <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                            @error('description')
                                <span class="text-danger mb-0 pb-0">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mt-2">
                            <label for="image" class="form-label">image <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="file" name="image" id="image">
                            </div>
                            @error('image')
                                <span class="text-danger lh-sm mb-0 pb-0">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <div class="d-flex justify-content-end ">
                                <button class="btn py-3 px-4 btn-primary text-white" type="submit">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
