<x-frontend_main>
    <x-slot:title>
        Requests | White Library
    </x-slot:title>
    <x-collection />
    <section class="bg0 p-t-75 p-b-85">
        <div class="container">
            <div class="row">
                <div class="col m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($requests->count() > 0)
                            <div class="wrap-table-shopping-cart">
                                <table class="table-shopping-cart">
                                    <tr class="table_head">
                                        <th class="column-1">Cover</th>
                                        <th class="column-2">Title</th>
                                        <th class="column-3">Status</th>
                                        <th class="column-4">Request Time</th>
                                        <th class="column-5"></th>
                                    </tr>
                                    @foreach ($requests as $r)
                                        <tr class="table_row">
                                            <td class="column-1">
                                                <div class="how-itemcart1">
                                                    <img src="{{ asset('storage/' . $r->book->cover) }}" alt="IMG">
                                                </div>
                                            </td>
                                            <td class="column-2">{{ $r->book->title }}</td>
                                            <td class="column-3" style="text-transform: capitalize;">
                                                {{ $r->status }}
                                            </td>
                                            <td class="column-4">{{ $r->created_at->diffForHumans() }}</td>
                                            <td class="column-5">
                                                @if ($r->status == 'process')
                                                    <button class="btn btn-danger" data-toggle="modal"
                                                        data-target="#cancel{{ $r->id }}">Cancel</button>
                                                @elseif ($r->status == 'accepted')
                                                    <a href="#" class="btn btn-primary">Read Now</a>
                                                @else
                                                    <a href="/book/{{ $r->book->slug }}" class="btn btn-danger">New
                                                        Request</a>
                                                @endif
                                            </td>
                                            <div class="modal fade" id="cancel{{ $r->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                aria-hidden="true" style="margin-top: 10rem;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Cancel
                                                                Request</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure want to cancel?
                                                        </div>
                                                        <form action="/cancel-borrow/{{ $r->id }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Yes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        @else
                            <div class="alert alert-warning" role="alert">
                                No Requests Found, Go add some request
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend_main>
