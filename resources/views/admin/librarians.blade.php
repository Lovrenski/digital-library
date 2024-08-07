<x-backend_main>
    <x-slot:title>Librarians | White Library</x-slot:title>
    <x-slot:path>
        <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Librarians</li>
    </x-slot:path>
    <x-slot:header>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h1>Manage Librarians</h1>
                        <h3 class="text-gray font-weight-500">You can manage your users here</h3>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:header>
    <div class="row justify-center">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#modal-add">Add
                        New Librarian</button>
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
                            <span class="alert-text">{{ session('success') }}!</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @error('email')
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-icon"><i class="ni ni-curved-next"></i></span>
                            <span class="alert-text">{{ $messages }}!</span>
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
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($librarians as $l)
                                        <tr>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    @if ($l->avatar != null)
                                                        <a href="https://images.unsplash.com/photo-1722778610328-2457fedbac41?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                            class="avatar rounded-circle mr-3">
                                                            <img alt="Image placeholder"
                                                                src="https://images.unsplash.com/photo-1722778610328-2457fedbac41?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                                        </a>
                                                    @else
                                                        <a href="{{ asset('default.png') }}"
                                                            class="avatar rounded-circle mr-3">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('default.png') }}">
                                                        </a>
                                                    @endif
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">{{ $l['name'] }}</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="font-weight-600">
                                                {{ $l['email'] }}
                                            </td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#modal-delete{{ $l['id'] }}">Delete</button>
                                            </td>
                                            <div class="modal fade" id="modal-delete{{ $l['id'] }}" tabindex="-1"
                                                role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                                <div class="modal-dialog modal- modal-dialog-centered modal-"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title" id="modal-title-default">Delete User
                                                            </h6>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure want to delete this librarian?</p>
                                                        </div>
                                                        <form action="/delete/user/{{ $l['id'] }}" method="POST">
                                                            @csrf
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Confirm</button>
                                                                <button type="button" class="btn btn-link  ml-auto"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
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
    <div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="modal-form"
        aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header bg-transparent">
                            <h1 class="text-center p-0">Add New Librarian</h1>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <form role="form" action="/add/librarian" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Name" type="text"
                                            name="name">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Email" type="email"
                                            name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" type="password"
                                            name="password">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Add New Librarian</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-backend_main>
