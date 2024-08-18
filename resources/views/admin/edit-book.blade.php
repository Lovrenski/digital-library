<x-backend_main>
    <x-slot:title>Edit Book | White Library</x-slot:title>
    <x-slot:path>
        <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Books</li>
        <li class="breadcrumb-item active" aria-current="page">{{ $book->title }}</li>
    </x-slot:path>
    <x-slot:header>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h1>Edit Book</h1>
                        <h3 class="text-gray font-weight-500">You can edit your books here</h3>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:header>
    <div class="row justify-center">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form role="form" action="/edit/book/{{ $book->id }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-single-copy-04"></i></span>
                                </div>
                                <input class="form-control" placeholder="Title" type="text" name="title"
                                    value="{{ $book->title }}">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                </div>
                                <input class="form-control" placeholder="Author" type="text" name="author"
                                    value="{{ $book->author }}">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                                <input class="form-control" type="date" name="year" value="{{ $book->year }}">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-align-left-2"></i></span>
                                </div>
                                <textarea class="form-control" name="synopsis" placeholder="Synopsis" cols="30" rows="5" name="synopsis">{{ $book->synopsis }}</textarea>
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
                        <button type="submit" class="btn btn-primary my-4">Save</button>
                        <a href="/books" class="btn btn-default my-4">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-backend_main>
