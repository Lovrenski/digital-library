<x-backend_main>
    <x-slot:title>Users | White Library</x-slot:title>
    <x-slot:path>
        <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Users</li>
    </x-slot:path>
    <x-slot:header>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h1>Manage Users</h1>
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
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($users as $u)
                                        <tr>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    @if ($u->avatar != null)
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
                                                        <span class="name mb-0 text-sm">{{ $u['name'] }}</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="font-weight-600">
                                                {{ $u['email'] }}
                                            </td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#modal-delete{{ $u['id'] }}">Delete</button>
                                            </td>
                                            <div class="modal fade" id="modal-delete{{ $u['id'] }}" tabindex="-1"
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
                                                            <p>Are you sure want to delete this user?</p>
                                                        </div>
                                                        <form action="/delete/user/{{ $u['id'] }}" method="POST">
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
</x-backend_main>
