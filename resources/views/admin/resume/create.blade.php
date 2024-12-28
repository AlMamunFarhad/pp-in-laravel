@extends('admin.dashboard')
@section('adminContent')
    <div class="row justify-content-center">
        @include('success')
        <div class="col-xl-10">
            <div class="card py-4 px-1">
                <div class="card-body">
                    <h4 class="card-title mb-5">Create Resume</h4>
                    <form action="{{ route('resume.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-6 mt-3">
                                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                                    </div>
                                    @error('name')
                                        <span class="text-danger lh-sm mb-0 pb-0">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="title" class="form-label">Title <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                                    </div>
                                    @error('title')
                                        <span class="text-danger lh-sm mb-0 pb-0">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-3">
                                    <label for="image" class="form-label">image <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" name="image" id="image">
                                    </div>
                                    @error('image')
                                        <span class="text-danger lh-sm mb-0 pb-0">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mt-3">
                                    <label for="summary" class="form-label">Summary <span
                                            class="text-danger">*</span></label>
                                        <textarea name="summary" id="summary" cols="30" rows="5" class="form-control editor">{{ old('summary') }}</textarea>
                                    @error('summary')
                                        <span class="text-danger mb-0 pb-0">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="experiences" class="form-label">Work Experiences <span
                                            class="text-danger">*</span></label>
                                        <textarea name="experiences" id="experiences" cols="30" rows="5" class="form-control editor">{{ old('experiences') }}</textarea>
                                    @error('experiences')
                                        <span class="text-danger mb-0 pb-0">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-6 mt-3">
                                <label for="projects" class="form-label">Projects <span class="text-danger">*</span></label>
                                    <textarea name="projects" id="projects" cols="30" rows="5" class="form-control editor">{{ old('projects') }}</textarea>
                                @error('projects')
                                    <span class="text-danger mb-0 pb-0">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 mt-3">
                                <label for="skill"s class="form-label">Skills <span class="text-danger">*</span></label>
                                    <textarea name="skills" id="skills" cols="30" rows="5" class="form-control editor">{{ old('skills') }}</textarea>
                                @error('skills')
                                    <span class="text-danger mb-0 pb-0">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-6 mt-3">
                                    <label for="educations" class="form-label">Educations <span
                                            class="text-danger">*</span></label>
                                        <textarea name="educations" id="educations" cols="30" rows="5" class="form-control editor">{{ old('educations') }}</textarea>
                                    @error('educations')
                                        <span class="text-danger mb-0 pb-0">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="interests" class="form-label">interests <span
                                            class="text-danger">*</span></label>
                                        <textarea name="interests" id="interests" cols="30" rows="5" class="form-control editor">{{ old('interests') }}</textarea>
                                    @error('interests')
                                        <span class="text-danger mb-0 pb-0">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mt-4 h-100 d-flex justify-content-between align-items-center">
                                <div class="back">
                                    <a href="{{ route('resume.index') }}" style="text-decoration: none">&#8592; Back</a>
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
