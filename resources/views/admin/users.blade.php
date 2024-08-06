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
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar rounded-circle mr-3">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/angular.jpg">
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="font-weight-600">
                                            www@gmail.com
                                        </td>
                                        <td class="text-right">
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#modal-delete">Delete</button>
                                        </td>
                                        <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog"
                                            aria-labelledby="modal-default" aria-hidden="true">
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
                                                    <form action="/delete" method="POST">
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-backend_main>
