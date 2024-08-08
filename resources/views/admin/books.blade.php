<x-backend_main>
    <x-slot:title>Books | White Library</x-slot:title>
    <x-slot:path>
        <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Books</li>
    </x-slot:path>
    <x-slot:header>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h1>Manage Books, and Categories</h1>
                        <h3 class="text-gray font-weight-500">You can manage your books, and categories here</h3>
                        <div class="row mt-4 mx-1">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modal-add-book">Add
                                New Book</button>
                        </div>
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
                    @error('title')
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-icon"><i class="ni ni-curved-next"></i></span>
                            <span class="alert-text">{{ $message }}!</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                    <div class="row">
                        @if (count($books) > 0)
                            @foreach ($books as $b)
                                <div class="col-4">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('storage/' . $b->cover) }}"
                                            alt="cover">
                                        <div class="card-body">
                                            <h2 class="card-title">{{ $b->title }}</h2>
                                            <p class="card-text">{{ $b->synopsis }}</p>
                                            <div class="mb-4">
                                                @foreach ($b->category as $cat)
                                                    <span class="badge badge-default"
                                                        style="font-size: 14px;">{{ $cat->name }}</span>
                                                @endforeach
                                            </div>
                                            <button class="btn btn-default" data-toggle="modal"
                                                data-target="#modal-edit-book">Edit</button>
                                            <button class="btn btn-danger" data-toggle="modal"
                                                data-target="#modal-delete-book">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col mt-3">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <span class="alert-icon"><i class="ni ni-bell-55"></i></span>
                                    <span class="alert-text">No Books Found! Go add new book</span>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-delete-book" tabindex="-1" role="dialog" aria-labelledby="modal-default"
        aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Delete Book
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to delete this book?</p>
                </div>
                <form action="/delete/book" method="POST">
                    @csrf
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-edit-book" tabindex="-1" role="dialog" aria-labelledby="modal-form"
        aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header bg-transparent">
                            <h1 class="text-center p-0">Edit Book</h1>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <form role="form" action="/add/category" method="POST">
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
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Edit Book</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-add-book" tabindex="-1" role="dialog" aria-labelledby="modal-form"
        aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header bg-transparent">
                            <h1 class="text-center p-0">Add New Book</h1>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <form role="form" action="/add/book" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-single-copy-04"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Title" type="text"
                                            name="title">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Author" type="text"
                                            name="author">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input class="form-control" type="date" name="year">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-align-left-2"></i></span>
                                        </div>
                                        <textarea class="form-control" name="synopsis" placeholder="Synopsis" cols="30" rows="5"
                                            name="synopsis"></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <label class="form-control-label" for="categories">Select Categories</label>
                                        <select class="form-control categories" id="categories" name="categories[]"
                                            multiple="multiple">
                                            @foreach ($categories as $c)
                                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="cover">Cover</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-image"></i></span>
                                        </div>
                                        <input type="file" id="cover" name="cover" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="file">File</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-folder-17"></i></span>
                                        </div>
                                        <input type="file" id="file" name="file" class="form-control">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Add New Book</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-backend_main>
