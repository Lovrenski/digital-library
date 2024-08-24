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
                    <div class="table-responsive">
                        <div>
                            <table class="table align-items-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Reader Name</th>
                                        <th scope="col">Request Time</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Note</th>
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
                                            <td>
                                                @if ($p->note != null)
                                                    <button class="btn btn-warning" data-toggle="modal"
                                                        data-target="#note{{ $p->id }}">Read</button>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="text-right">
                                                @if ($p->status == 'process')
                                                    <button class="btn btn-primary" data-toggle="modal"
                                                        data-target="#modal-process{{ $p->id }}">Process</button>
                                                @endif
                                            </td>
                                            <div class="modal fade" id="modal-process{{ $p->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                                <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body p-0">
                                                            <div class="card bg-secondary border-0 mb-0">
                                                                <div class="card-header bg-transparent">
                                                                    <h1 class="text-center p-0">Process Request</h1>
                                                                </div>
                                                                <div class="card-body px-lg-5 py-lg-5">
                                                                    <form role="form"
                                                                        action="/process/{{ $p->id }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <div class="form-group mb-3">
                                                                            <label for="expired"
                                                                                class="form-control-label">Expired</label>
                                                                            <div
                                                                                class="input-group input-group-merge input-group-alternative">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i
                                                                                            class="ni ni-circle-08"></i></span>
                                                                                </div>
                                                                                <input class="form-control"
                                                                                    type="date" id="expired"
                                                                                    name="expired">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="status"
                                                                                class="form-control-label">Status</label>
                                                                            <select class="form-control" name="status"
                                                                                id="status">
                                                                                <option value="accepted">Accept
                                                                                </option>
                                                                                <option value="rejected">Reject
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="note">Note
                                                                                (Optional)
                                                                            </label>
                                                                            <textarea class="form-control" name="note" id="note" cols="30" rows="5"></textarea>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <button type="submit"
                                                                                class="btn btn-primary mt-2">
                                                                                Save
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="note{{ $p->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                                <div class="modal-dialog modal- modal-dialog-centered modal-"
                                                    role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <h6 class="modal-title" id="modal-title-default">Note</h6>
                                                            <button type="button" class="close"
                                                                data-dismiss="note{{ $p->id }}"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">x</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <p>
                                                                {{ $p->note }}
                                                            </p>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link  ml-auto"
                                                                data-dismiss="modal">Close</button>
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
