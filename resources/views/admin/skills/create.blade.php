@extends('admin.dashboard')
@section('adminContent')
    <div class="row justify-content-center">
        @include('success')
        <div class="col-xl-10">
            <div class="card py-4 px-4">
                <div class="card-body">
                    <h4 class="card-title mb-5">Create Skills</h4>
                    <form action="{{ route('skills.store') }}" method="POST" enctype="multipart/form-data" id="skills_form">
                        @csrf
                            <div class="col-12 mt-3">
                                <label for="title" class="form-label">Skill Title <span
                                        class="text-danger">*</span></label>
                                <input name="title" id="title" cols="30" rows="5" class="form-control ">{{ old('title') }}</input>
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="col-12 mt-3">
                                <label for="content" class="form-label">Content <span
                                        class="text-danger">*</span></label>
                                <textarea name="content" id="content" cols="30" rows="5" class="form-control editor">{{ old('content') }}</textarea>
                                @error('content')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12 mt-3">
                                <label for="content" class="form-label mb-3">Images <span
                                        class="text-danger">*</span></label><br>
                                <input type="file" name="images[]" multiple>
                                @error('images')
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
