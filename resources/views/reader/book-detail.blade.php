<x-frontend_main>
    <x-slot:title>
        {{ $book->title }} | White Library
    </x-slot:title>
    <x-collection />
    <section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                            <div class="slick3 gallery-lb">
                                <div class="item-slick3" data-thumb="{{ asset('storage/' . $book->cover) }}">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="{{ asset('storage/' . $book->cover) }}" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                            href="{{ asset('storage/' . $book->cover) }}">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            {{ $book->title }}
                        </h4>

                        <span class="mtext-106 cl2">
                            {{ $book->author }}
                        </span>

                        <p class="stext-102 cl3 p-t-23">
                            {{ $book->synopsis }}
                        </p>

                        <!--  -->
                        <div class="p-t-33">
                            <div class="flex-w">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    @if ($permission && $permission->expired != date('Y-m-d'))
                                        @if ($permission->status == 'process')
                                            <span
                                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                                On Process
                                            </span>
                                        @elseif ($permission->status == 'accepted')
                                            <a href="{{ asset('storage/' . $permission->book->file) }}#toolbar=0"
                                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                                Read Now
                                            </a>
                                        @else
                                            <button
                                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"
                                                data-toggle="modal" data-target="#reqModal">
                                                Request Permission
                                            </button>
                                        @endif
                                    @else
                                        <button
                                            class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"
                                            data-toggle="modal" data-target="#reqModal">
                                            Request Permission
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bor10 m-t-50 p-t-43 p-b-40">
                <!-- Tab01 -->
                <div class="tab01">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item p-b-10">
                            <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Synopsis</a>
                        </li>

                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional
                                information</a>
                        </li>

                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-t-43">
                        <!-- - -->
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <div class="how-pos2 p-lr-15-md">
                                <p class="stext-102 cl6">
                                    {{ $book->synopsis }}
                                </p>
                            </div>
                        </div>

                        <!-- - -->
                        <div class="tab-pane fade" id="information" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                    <ul class="p-lr-28 p-lr-15-sm">
                                        <li class="flex-w flex-t p-b-7">
                                            <span class="stext-102 cl3 size-205">
                                                Publisher
                                            </span>

                                            <span class="stext-102 cl6 size-206">
                                                {{ $book->publisher }}
                                            </span>
                                        </li>

                                        <li class="flex-w flex-t p-b-7">
                                            <span class="stext-102 cl3 size-205">
                                                Categories
                                            </span>

                                            <span class="stext-102 cl6 size-206">
                                                @foreach ($book->category as $cat)
                                                    {{ $cat->name }},
                                                @endforeach
                                            </span>
                                        </li>

                                        <li class="flex-w flex-t p-b-7">
                                            <span class="stext-102 cl3 size-205">
                                                Release Date
                                            </span>

                                            <span class="stext-102 cl6 size-206">
                                                {{ $book->year }}
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- - -->
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                    <div class="p-b-30 m-lr-15-sm">
                                        <!-- Review -->
                                        <div class="flex-w flex-t p-b-68">
                                            <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                                <img src="images/avatar-01.jpg" alt="AVATAR">
                                            </div>

                                            <div class="size-207">
                                                <div class="flex-w flex-sb-m p-b-17">
                                                    <span class="mtext-107 cl2 p-r-20">
                                                        Ariana Grande
                                                    </span>

                                                    <span class="fs-18 cl11">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-half"></i>
                                                    </span>
                                                </div>

                                                <p class="stext-102 cl6">
                                                    Quod autem in homine praestantissimum atque optimum est, id
                                                    deseruit. Apud ceteros autem philosophos
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Add review -->
                                        <form class="w-full">
                                            <h5 class="mtext-108 cl2 p-b-7">
                                                Add a review
                                            </h5>

                                            <p class="stext-102 cl6">
                                                Your email address will not be published. Required fields are marked *
                                            </p>

                                            <div class="flex-w flex-m p-t-50 p-b-23">
                                                <span class="stext-102 cl3 m-r-16">
                                                    Your Rating
                                                </span>

                                                <span class="wrap-rating fs-18 cl11 pointer">
                                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                    <input class="dis-none" type="number" name="rating">
                                                </span>
                                            </div>

                                            <div class="row p-b-25">
                                                <div class="col-12 p-b-5">
                                                    <label class="stext-102 cl3" for="review">Your review</label>
                                                    <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
                                                </div>

                                                <div class="col-sm-6 p-b-5">
                                                    <label class="stext-102 cl3" for="name">Name</label>
                                                    <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name"
                                                        type="text" name="name">
                                                </div>

                                                <div class="col-sm-6 p-b-5">
                                                    <label class="stext-102 cl3" for="email">Email</label>
                                                    <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email"
                                                        type="text" name="email">
                                                </div>
                                            </div>

                                            <button
                                                class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                                                Submit
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
            <span class="stext-107 cl6 p-lr-25">
                Categories:
                @foreach ($book->category as $cat)
                    {{ $cat->name }},
                @endforeach
            </span>
        </div>
        <div class="modal fade" id="reqModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="margin-top: 10rem;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Request Permission</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Do you want to borrow the book?
                    </div>
                    <form action="/borrow" method="POST">
                        @csrf
                        <div class="modal-footer">
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-frontend_main>
