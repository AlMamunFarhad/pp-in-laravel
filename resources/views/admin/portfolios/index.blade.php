@extends('admin.dashboard')
@section('adminContent')
    <div class="row">
        @include('success')
        <div class="col-xl-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class=" mb-3 mt-4 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 ">LARAVEL</h5>
                        <a href="{{ route('laravel.create') }}" class="btn bg-white rounded-pill shadow-sm px-4">Create</a>
                    </div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Project</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($laravels as $laravel)
                                <tr>
                                    <td class="d-flex">
                                        <img src="{{ asset($laravel->image) }}" alt=""
                                            style="width: 45px; height: 45px" class="rounded-circle " />
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1 py-2">{{ $laravel->title }}</p>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1 py-2"><a href="{{ $laravel->project }}">Project
                                                link</a></p>
                                    </td>
                                    <td class="py-3">
                                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="d-flex">
                                            <a href="{{ route('laravel.edit', $laravel->id) }}"
                                                class="btn btn-rounded btn-sm fw-bold shadow-sm"
                                                data-mdb-ripple-color="dark">
                                                <i class="bi bi-pencil-fill text-success"></i>
                                            </a>
                                            <form action="{{ route('laravel.destroy', $laravel->id) }}" method="POST"
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
                    {{ $laravels->links() }}
                </div>
            </div>
        </div>
        <div class="col-xl-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class=" mb-3 mt-4 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 card-title">PHP</h5>
                        <a href="{{ route('php.create') }}" class="btn bg-white rounded-pill shadow-sm px-4">Create</a>
                    </div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Project</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($phps as $php)
                                <tr>
                                    <td class="d-flex">
                                        <img src="{{ asset($php->image) }}" alt="" style="width: 45px; height: 45px"
                                            class="rounded-circle " />
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1 py-2">{{ $php->title }}</p>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1 py-2"><a href="{{ $php->project }}">Project
                                                link</a></p>
                                    </td>
                                    <td class="py-3">
                                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="d-flex">
                                            <a href="{{ route('php.edit', $php->id) }}"
                                                class="btn btn-rounded btn-sm fw-bold shadow-sm"
                                                data-mdb-ripple-color="dark">
                                                <i class="bi bi-pencil-fill text-success"></i>
                                            </a>
                                            <form action="{{ route('php.destroy', $php->id) }}" method="POST"
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
                    {{ $phps->links() }}
                </div>
            </div>
        </div>
        <div class="col-xl-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class=" mb-3 mt-4 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 ">JAVASCRIPT</h5>
                        <a href="{{ route('js.create') }}" class="btn bg-white rounded-pill shadow-sm px-4">Create</a>
                    </div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Project</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($javascript as $js)
                                <tr>
                                    <td class="d-flex">
                                        <img src="{{ asset($js->image) }}" alt="" style="width: 45px; height: 45px"
                                            class="rounded-circle " />
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1 py-2">{{ $js->title }}</p>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1 py-2"><a href="{{ $js->project }}">Project
                                                link</a></p>
                                    </td>
                                    <td class="py-3">
                                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="d-flex">
                                            <a href="{{ route('js.edit', $js->id) }}"
                                                class="btn btn-rounded btn-sm fw-bold shadow-sm"
                                                data-mdb-ripple-color="dark">
                                                <i class="bi bi-pencil-fill text-success"></i>
                                            </a>
                                            <form action="{{ route('js.destroy', $js->id) }}" method="POST" class="ml-3"
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
                    {{ $javascript->links() }}
                </div>
            </div>
        </div>
        <div class="col-xl-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class=" mb-3 mt-4 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 card-title">DESIGN</h5>
                        <a href="{{ route('design.create') }}" class="btn bg-white rounded-pill shadow-sm px-4">Create</a>
                    </div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Project</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($designs as $design)
                                <tr>
                                    <td class="d-flex">
                                        <img src="{{ asset($design->image) }}" alt=""
                                            style="width: 45px; height: 45px" class="rounded-circle " />
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1 py-2">{{ $design->title }}</p>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1 py-2"><a href="{{ $design->project }}">Project
                                                link</a></p>
                                    </td>
                                    <td class="py-3">
                                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="d-flex">
                                            <a href="{{ route('design.edit', $design->id) }}"
                                                class="btn btn-rounded btn-sm fw-bold shadow-sm"
                                                data-mdb-ripple-color="dark">
                                                <i class="bi bi-pencil-fill text-success"></i>
                                            </a>
                                            <form action="{{ route('design.destroy', $design->id) }}" method="POST"
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
                    {{ $designs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
