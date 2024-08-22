<x-backend_main>
    <x-slot:title>Categories | White Library</x-slot:title>
    <x-slot:path>
        <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Read Permissions</li>
    </x-slot:path>
    <x-slot:header>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h1>Manage Requests</h1>
                        <h3 class="text-gray font-weight-500">You can manage read permissions from reader here</h3>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:header>
    <div class="row justify-center">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
                            <span class="alert-text">{{ session('success') }}!</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @error('name')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="alert-icon"><i class="ni ni-curved-next"></i></span>
                            <span class="alert-text">{{ $message }}!</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                    <div class="table-responsive">
                        <div>
                            <table class="table align-items-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Reader Name</th>
                                        <th scope="col">Request Time</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($permissions as $p)
                                        <tr>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">{{ $p->book->title }}</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="text-left">
                                                {{ $p->user->name }}
                                            </td>
                                            <td>
                                                {{ $p->created_at->diffForHumans() }}
                                            </td>
                                            <td>
                                                @if ($p->status == 'process')
                                                    <span class="badge badge-dot mr-4"
                                                        style="text-transform: capitalize;">
                                                        <i class="bg-warning"></i>
                                                        <span class="status">process</span>
                                                    </span>
                                                @elseif ($p->status == 'accepted')
                                                    <span class="badge badge-dot mr-4"
                                                        style="text-transform: capitalize;">
                                                        <i class="bg-success"></i>
                                                        <span class="status">accepted</span>
                                                    </span>
                                                @else
                                                    <span class="badge badge-dot mr-4"
                                                        style="text-transform: capitalize;">
                                                        <i class="bg-danger"></i>
                                                        <span class="status">rejected</span>
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="text-right">
                                                <button class="btn btn-primary" data-toggle="modal"
                                                    data-target="#modal-process{{ $p->id }}">Process</button>
                                            </td>
                                            <div class="modal fade" id="modal-process{{ $p->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                                <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body p-0">
                                                            <div class="card bg-secondary border-0 mb-0">
                                                                <div class="card-header bg-transparent">
                                                                    <h1 class="text-center p-0">Add New Category</h1>
                                                                </div>
                                                                <div class="card-body px-lg-5 py-lg-5">
                                                                    <form role="form" action="/add/category"
                                                                        method="POST">
                                                                        @csrf
                                                                        <div class="form-group mb-3">
                                                                            <div
                                                                                class="input-group input-group-merge input-group-alternative">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i
                                                                                            class="ni ni-circle-08"></i></span>
                                                                                </div>
                                                                                <input class="form-control"
                                                                                    placeholder="Name" type="text"
                                                                                    name="name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <button type="submit"
                                                                                class="btn btn-primary my-4">Add New
                                                                                Category</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-backend_main>
