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
                                        <th style="padding-left: 3rem;">Title</th>
                                        <th>Librarian</th>
                                        <th>Status</th>
                                        <th>Request Time</th>
                                        <th></th>
                                    </tr>
                                    @foreach ($requests as $r)
                                        <tr class="table_row">
                                            <td style="padding-left: 3rem;">{{ $r->book->title }}</td>
                                            <td>
                                                @if ($r->librarian != null)
                                                    {{ $r->librarian }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td style="text-transform: capitalize;">
                                                @if ($r->status == 'process')
                                                    <span
                                                        style="background: orange; color: white;border-radius: 5px; padding: 10px">
                                                        {{ $r->status }}
                                                    </span>
                                                @elseif ($r->status == 'accepted')
                                                    <span
                                                        style="background: green; color: white;border-radius: 5px; padding: 10px">
                                                        {{ $r->status }}
                                                    </span>
                                                @else
                                                    <span
                                                        style="background: red; color: white;border-radius: 5px; padding: 10px">
                                                        {{ $r->status }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td>{{ $r->created_at->diffForHumans() }}</td>
                                            <td>
                                                @if ($r->expired != date('Y-m-d'))
                                                    @if ($r->status == 'process')
                                                        <button class="btn btn-danger" data-toggle="modal"
                                                            data-target="#cancel{{ $r->id }}">Cancel</button>
                                                    @elseif ($r->status == 'accepted')
                                                        <a href="{{ asset('storage/' . $r->book->file) }}#toolbar=0"
                                                            class="btn btn-primary" target="_blank">Read Now</a>
                                                    @else
                                                        <button class="btn btn-secondary" data-toggle="modal"
                                                            data-target="#note{{ $r->id }}">Note</button>
                                                    @endif
                                                @else
                                                    <span
                                                        style="color: red; font-weight: bold; font-style: italic">Expired</span>
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
                                            <div class="modal fade" id="note{{ $r->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                aria-hidden="true" style="margin-top: 10rem;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Note</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @if ($r->note != null)
                                                                <p>
                                                                    {{ $r->note }}
                                                                </p>
                                                            @else
                                                                <span style="font-style: italic;">
                                                                    No Note
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <a href="/book/{{ $r->book->slug }}"
                                                                class="btn btn-primary">New Request</a>
                                                        </div>
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
