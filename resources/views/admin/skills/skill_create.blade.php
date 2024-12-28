@extends('admin.dashboard')
@section('adminContent')
    <div class="row justify-content-center">
        @include('success')
        <div class="col-xl-10">
            <div class="card py-4 px-4">
                <div class="card-body">
                    <h4 class="card-title mb-5">My Description</h4>
                    <form action="{{ route('descriptions.store') }}" method="POST">
                        @csrf
                        <div class="col-12 mt-3">
                            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                            <input name="title" id="title" cols="30" rows="5"
                                class="form-control ">{{ old('title') }}</input>
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-12 mt-3">
                            <label for="content" class="form-label">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="description" cols="30" rows="5" class="form-control editor">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-12 mt-4 h-100 d-flex justify-content-between align-items-center">
                            <div class="back">
                                <a href="{{ route('skills.index') }}" style="text-decoration: none">&#8592; Back</a>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary text-white btn-lg form-control"
                                    type="submit">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
