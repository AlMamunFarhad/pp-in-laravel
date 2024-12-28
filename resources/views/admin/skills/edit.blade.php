@extends('admin.dashboard')
@section('adminContent')
    <div class="row justify-content-center">
        @include('success')
        <div class="col-xl-10">
            <div class="card py-4 px-4">
                <div class="card-body">
                    <h4 class="card-title mb-5">Update Skills</h4>
                    <form action="{{ route('skills.update', $update->id) }}" method="POST" enctype="multipart/form-data"
                        id="skills_form">
                        @csrf
                        @method('PUT')
                        <div class="col-12 mt-3">
                            <label for="title" class="form-label">Skill Title <span
                                    class="text-danger">*</span></label>
                            <input name="title" id="title" cols="30" rows="5" class="form-control" value="{{ $update->title }}"></input>
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-12 mt-3">
                            <label for="content" class="form-label">Contents <span class="text-danger">*</span></label>
                            <textarea name="content" id="content" cols="30" rows="5" class="form-control editor">{{ $update->content }}</textarea>
                            @error('content')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-12 mt-3">
                            <label for="images" class="form-label mb-3">Upload New Images</label><br>

                            <input type="file" name="new_images[]" multiple class="mb-3">
                            @error('images')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <br>
                            <label for="images">Previous Images:</label>
                            <div style="display: flex; flex-wrap: wrap;">
                                @php
                                    $images = json_decode($update->images, true);
                                @endphp
                                @foreach ($images as $key => $image)
                                    <div class="d-flex" style="margin: 10px; position: relative;">
                                        <img src="{{ asset($image) }}" alt="Skill Image"
                                            style="width: 100px; height: 100px;">
                                        <a type="submit" class="remove-image delete-btn-img"
                                            data-index="{{ $key }}">X</a>
                                        <input type="hidden" name="existing_images[]" value="{{ $image }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12 mt-4 h-100 d-flex justify-content-between align-items-center">
                            <div class="back">
                                <a href="{{ route('skills.index') }}" style="text-decoration: none">&#8592; Back</a>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary text-white btn-lg form-control"
                                    type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('adminScripts')
    <script>
        document.querySelectorAll('.remove-image').forEach(button => {
            button.addEventListener('click', function() {
                const parentDiv = this.parentElement;
                parentDiv.remove(); // ইমেজ UI থেকে সরানো
            });
        });
    </script>
@endpush
@push('adminStyle')
    <style>
        .delete-btn-img {
            background: red;
            position: absolute;
            right: -10px;
            top: -10px;
            border-radius: 50%;
            width: 28px;
            height: 28px;
            border: none;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
        }
    </style>
@endpush
