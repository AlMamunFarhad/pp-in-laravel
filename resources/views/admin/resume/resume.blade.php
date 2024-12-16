@extends('admin.dashboard')
@section('adminContent')
    <div class="row justify-content-center">
        @include('success')
        <div class="col-xl-10 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class=" mb-3 mt-4 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 ">RESUME</h5>
                        <a href="{{ route('create.resume') }}" class="btn bg-white rounded-pill shadow-sm px-4">Create</a>
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
                            @foreach ($resumes as $resume)
                                <tr>
                                    <td class="d-flex">
                                        <img src="{{ asset($resume->image) }}" alt=""
                                            style="width: 45px; height: 45px" class="rounded-circle " />
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1 py-2">{{ $resume->title }}</p>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1 py-2">{!! $resume->summary !!}</p>
                                    </td>
                                    <td class="py-3">
                                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="d-flex">
                                            <a href="{{ route('edit.resume', $resume->id) }}"
                                                class="btn btn-rounded btn-sm fw-bold shadow-sm"
                                                data-mdb-ripple-color="dark">
                                                <i class="bi bi-pencil-fill text-success"></i>
                                            </a>
                                            <form action="{{ route('destroy.resume', $resume->id) }}" method="POST"
                                                class="ml-3"
                                                onsubmit="return confirm('Are you sure you want to delete?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-danger rounded-4 btn-sm fw-bold shadow-lg me-2"><i
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
