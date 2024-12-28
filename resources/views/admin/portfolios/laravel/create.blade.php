@extends('admin.dashboard')
@section('adminContent')
    <div class="row justify-content-center">
        @include('success')
        <div class="col-xl-5">
            <div class="card p-4">
                <div class="card-body">
                    <h4 class="card-title mb-5">Create</h4>
                    <form action="{{ route('laravel.store') }}" method="POST" class="login" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-3 gy-md-4 overflow-hidden">
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
                                <label for="project" class="form-label">Project Link <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="project" id="project">
                                </div>
                                @error('project')
                                    <span class="text-danger lh-sm mb-0 pb-0">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 mt-2">
                                <label for="github" class="form-label">GitHub Link <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="github" id="github">
                                </div>
                                @error('github')
                                    <span class="text-danger lh-sm mb-0 pb-0">{{ $message }}</span>
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
                            <div class="col-12 mt-4">
                                <div class="d-grid text-center">
                                    <button class="btn btn-primary text-white btn-lg form-control"
                                        type="submit">Create</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="back mt-4">
                        <a href="{{ route('portfolio.index') }}" style="text-decoration: none">&#8592; Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
