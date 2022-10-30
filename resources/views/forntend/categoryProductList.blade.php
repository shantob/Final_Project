<x-forntend.master>
    <x-slot:title>
        HOME
        </x-slot>

        <x-forntend.partials.header />
        <!-- Categories Section End -->

        <!-- Featured Section Begin -->
        <section class="featured spad container">
            <div class="container-fluid pt-5">
                <div class="row featured__filter " data-masonry='{"percentPosition": true }'>
                    @forelse($category->products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                        <div class="featured__item">
                            @foreach ($product->images as $image1)

                            @endforeach
                            <img class="img-fluid" src="{{ asset('storage/products/' . $image1->image) }}" alt="" />

                            <div class="featured__item__text">
                                <h6><a href="#">{{$product->name}}</a></h6>
                                <h5>{{$product->price}} ৳</h5>
                                <form action="{{route('product.cart.store',$product->id)}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                                </form>
                                <a href="{{route('frontend.products.show', $product->id)}}" class="btn btn-info">Show Detels</a>
                            </div>
                        </div>
                    </div>

                    @empty
                    <h1 class="text-center text-danger">No data found</h1>
                    @endforelse
                </div>
            </div>
        </section>
        <!-- Featured Section End -->

        <!-- Banner Begin -->


        <!-- ................................ -->
        <!-- fooder//////////////////////////////// -->
        {{-- <x-forntend.partials.card />--}}
</x-forntend.master>