@extends('admin.dashboard')
@section('adminContent')
    <div class="row justify-content-center">
        @include('success')
        <div class="col-xl-10 mb-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <div class="mb-3 mt-4 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 ">My Description</h5>
                        <a href="{{ route('descriptions.create') }}" class="btn bg-white rounded-pill shadow-sm px-4">Create</a>
                    </div>
                    <div class="table-responsive">
                    <table class="table mb-0 bg-white">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody style="width: 100%;">
                            @foreach ($contents as $content)
                                <tr>
                                    <td>
                                        <p class="fw-normal mb-1 py-2">{{ $content->title }}</p>
                                    </td>
                                    <td class="d-flex description">
                                        <p class="fw-normal mb-1 py-2">{!! $content->description !!}</p>
                                    </td>
                                    <td class="py-3">
                                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="d-flex">
                                           
                                            <a  href="{{ route('descriptions.edit', $content->id) }}"
                                                class="btn btn-rounded btn-sm fw-bold shadow-sm">
                                                <i class="bi bi-pencil-fill text-success"></i>
                                            </a>
                                            
                                            <form  method="POST" action="{{ route('descriptions.destroy', $content->id) }}"
                                                class="ml-3"
                                                onsubmit="return confirm('Are you sure you want to delete?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-danger rounded-4 btn-sm fw-bold shadow-sm me-2"><i
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
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class=" mb-3 mt-4 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 ">Skills</h5>
                        <a href="{{ route('skills.create') }}" class="btn bg-white rounded-pill shadow-sm px-4">Create</a>
                    </div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Summary</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skills as $skill)
                                <tr>
                                    <td class="h-100">
                                       <div class="d-flex align-items-center justify-content-center">
                                        @php
                                            $images = json_decode($skill->images)
                                        @endphp
                                      @foreach ($images as $image)
                                      <img src="{{ asset($image) }}" alt=""
                                      style="width: 45px; height: 45px" class="rounded-circle " />
                                      @endforeach
                                       </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1 py-2">{{ $skill->description }}</p>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1 py-2">{!! $skill->content !!}</p>
                                    </td>
                                    <td class="py-3">
                                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="d-flex">
                                           
                                            <a  href="{{ route('skills.edit', $skill->id) }}"
                                                class="btn btn-rounded btn-sm fw-bold shadow-sm"
                                                data-mdb-ripple-color="dark">
                                                <i class="bi bi-pencil-fill text-success"></i>
                                            </a>
                                            
                                            <form  method="POST" action="{{ route('skills.destroy', $skill->id) }}"
                                                class="ml-3"
                                                onsubmit="return confirm('Are you sure you want to delete?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-danger rounded-4 btn-sm fw-bold shadow-sm me-2"><i
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
@endsection
