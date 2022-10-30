<x-forntend.master>
    <x-slot:title>
        ALL PRODUCT LIST
        </x-slot>
        <x-forntend.partials.header />

        <!-- Breadcrumb Section End -->

        <!-- Product Section Begin -->
        <div class="container-fluid pt-5">
            <div class="row px-xl-5">
                <!-- Shop Sidebar Start -->
                <div class="col-lg-3 col-md-12">
                    <!-- Price Start -->
                    <div class="border-bottom mb-4 pb-4">
                        <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>
                        <form>
                            <div
                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                <input type="checkbox" class="custom-control-input" checked id="price-all">
                                <label class="custom-control-label" for="price-all">All Price</label>
                                <span class="badge border font-weight-normal">1000</span>
                            </div>
                            <div
                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                <input type="checkbox" class="custom-control-input" id="price-1">
                                <label class="custom-control-label" for="price-1">$0 - $100</label>
                                <span class="badge border font-weight-normal">150</span>
                            </div>
                            <div
                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                <input type="checkbox" class="custom-control-input" id="price-2">
                                <label class="custom-control-label" for="price-2">$100 - $200</label>
                                <span class="badge border font-weight-normal">295</span>
                            </div>
                            <div
                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                <input type="checkbox" class="custom-control-input" id="price-3">
                                <label class="custom-control-label" for="price-3">$200 - $300</label>
                                <span class="badge border font-weight-normal">246</span>
                            </div>
                        </form>
                    </div>
                    <!-- Price End -->

                    <!-- Color Start -->
                    <div class="border-bottom mb-4 pb-4">
                        <h5 class="font-weight-semi-bold mb-4">Filter by color</h5>
                        <form>
                            <div
                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                <input type="checkbox" class="custom-control-input" checked id="color-all">
                                <label class="custom-control-label" for="price-all">All Color</label>
                                <span class="badge border font-weight-normal">1000</span>
                            </div>
                            @foreach ($colors as $color)
                                <div
                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                    <input type="checkbox" class="custom-control-input" id="color-1">
                                    <label class="custom-control-label" for="color-1">{{ $color->name }}</label>
                                    <span class="badge border font-weight-normal">{{ $colors->count() }}</span>
                                </div>
                            @endforeach
                        </form>
                    </div>
                    <!-- Color End -->

                    <!-- Size Start -->
                    <div class="mb-5">
                        <h5 class="font-weight-semi-bold mb-4">Filter by size</h5>
                        <form>
                            <div
                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                <input type="checkbox" class="custom-control-input" checked id="size-all">
                                <label class="custom-control-label" for="size-all">All Size</label>
                                <span class="badge border font-weight-normal">{{ $sizes->count() }}</span>
                            </div>
                            @foreach ($sizes as $size)
                                <div
                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                    <input type="checkbox" class="custom-control-input" id="size-1">
                                    <label class="custom-control-label" for="size-1">{{ $size->name }}</label>
                                    <span class="badge border font-weight-normal">{{ $size->count() }}</span>
                                </div>
                            @endforeach
                        </form>
                    </div>
                    <!-- Size End -->
                </div>
                <!-- Shop Sidebar End -->


                <!-- Shop Product Start -->
                <div class="col-lg-9 col-md-12">
                    <div class="row pb-3">
                        <div class="col-12 pb-1">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <form action="{{ url('/productlist') }}">
                                    <div class="input-group">
                                        <input type="text" name="p_name" placeholder="Search By Name"
                                            value="{{ old('name') }}" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-transparent text-primary">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                                <div class="dropdown ml-4">
                                    <button class="btn border dropdown-toggle" type="button" id="triggerId"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sort by
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                        <a class="dropdown-item" href="#">Latest</a>
                                        <a class="dropdown-item" href="#">Popularity</a>
                                        <a class="dropdown-item" href="#">Best Rating</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($products->count() > 0)
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-md-6 col-sm-12 pb-1 row">
                                    <div class="card product-item border-0 mb-4">
                                        <div
                                            class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            @foreach ($product->images as $image)
                                            @endforeach

                                            <img class="img-fluid w-100"
                                                src="{{ asset('storage/products/' . $image->image) }}" alt="">
                                        </div>
                                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                            <h6 class="text-truncate mb-3">{{ $product->name }}</h6>
                                            <div class="d-flex justify-content-center">
                                                <h6>৳{{ $product->price }}</h6>
                                                <h6 class="text-muted ml-2"><del>৳{{ $product->price }}</del></h6>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between bg-light border">
                                            <a href="{{ route('frontend.products.show', $product->id) }}"
                                                class="btn btn-sm text-dark p-0"><i
                                                    class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                            <form action="{{ route('product.cart.store', $product->id) }}"
                                                method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-sm text-dark p-0"><i
                                                        class="fas fa-shopping-cart text-primary mr-1"></i>Add To
                                                    Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    </div>
                </div>
                <!-- Shop Product End -->
            </div>
        </div>
    @else
        <h3 class="text-danger text-center">No Product</h3>
        @endif
        </div>
        </div>
        <!-- Shop Product End -->
        </div>
        </div>


        <!-- ................................ -->
        <!-- fooder//////////////////////////////// -->
</x-forntend.master>
