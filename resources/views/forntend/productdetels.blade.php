<x-forntend.master>
    <x-slot:title>
        SINGLE PRODUCT
        </x-slot>
        <x-forntend.partials.header />

        <div class="col-md-12 row text-center">
            <div class="col-md-2"></div>
            <div class="col-lg-8 col-md-7 order-md-1 order-1">
                <div class="blog__details__text mt-5">

                    @foreach ($product->images as $image)
                    <img src="{{ asset('storage/products/' . $image->image) }}" alt="">
                    @endforeach
                </div>
                <div class="blog__details__author__text">

                    <h5>{{ $product->name }}</h5>
                    <span class="text-danger">{{ $product->price }}</span>
                    <p>{{ $product->description }}</p>
                </div>
                <form action="{{route('product.cart.store',$product->id)}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                </form>
                <div class="blog__details__content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog__details__author">
                                <div class="blog__details__author__pic">
                                    @foreach ($product->images as $image)
                                    @endforeach
                                    <h6>{{ $image->uploatedBy->name }}</h6>

                                    <span>{{ $image->uploatedBy->role->name }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog__details__widget">
                                <ul>
                                    <li><span>Categories:</span> {{ $product->category?->name }}</li>
                                    <li><span>Tags:</span> {{ $product->tags }}</li>
                                </ul>
                                <div class="blog__details__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="card container">
                <div class="card-body">
                    <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                        @auth
                        <form action="{{ route('products.comments.store', $product->id) }}" method="post">
                            @csrf
                            <div class="d-flex flex-start w-100">
                                <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="40" height="40" />
                                <div class="form-outline w-100">
                                    <label class="form-label" for="description">. Type Your Comment</label>
                                    <textarea class="form-control" id="description" rows="4" name="body" style="background: #fff;"></textarea>
                                </div>
                            </div>
                            <div class="float-end mt-2 pt-1 mx-5">
                                <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
                                <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                            </div>
                        </form>
                        @else
                        <h5 class="text-center">For Comment You must be <a href="{{ route('login') }}" class="btn btn-warning">login </a></h5>
                        @endauth
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="card container">

                @foreach ($product->comments as $comment)
                <div class="card-body">

                    <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                        <div class="d-flex flex-start align-items-center">
                            <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="60" class="" height="60" />
                            <div class="mx-3">
                                <h6 class="fw-bold text-primary mb-1"></h6>
                                <p class="text-muted small mb-0">
                                    {{ $comment->commentedBy->name }}
                                </p>
                                <p class="text-muted small mb-0">
                                    {{ $comment->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                        <p class="mt-3 mb-4 pb-2">
                            {{ $comment->body }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
        </section>
        <section class="related-blog spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title related-blog-title">
                            <h2>Post You May Like</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="blog__item">
                                    <div class="blog__item__pic">
                                        <img src="https://images.unsplash.com/photo-1578939662863-5cd416d45a69?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGdhcm1lbnRzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" height="500" alt="">
                                    </div>
                                    <div class="blog__item__text">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i> May 4,2022</li>

                                        </ul>
                                        <h5><a href="#">Cooking tips make cooking simple</a></h5>
                                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                            quaerat </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="blog__item">
                                    <div class="blog__item__pic">
                                        <img src="https://images.unsplash.com/photo-1622445275463-afa2ab738c34?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dCUyMHNoYXJ0fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" height="500" alt="">
                                    </div>
                                    <div class="blog__item__text">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i> June 4,2022</li>

                                        </ul>
                                        <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                            quaerat </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="blog__item">
                                    <div class="blog__item__pic">
                                        <img src="https://images.unsplash.com/photo-1571875257727-256c39da42af?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y29zbWV0aWNzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" height="500" alt="">
                                    </div>
                                    <div class="blog__item__text">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i> August 7,2022</li>

                                        </ul>
                                        <h5><a href="#">Visit the clean farm in the US</a></h5>
                                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                            quaerat </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ................................ -->
        <!-- fooder//////////////////////////////// -->
</x-forntend.master>