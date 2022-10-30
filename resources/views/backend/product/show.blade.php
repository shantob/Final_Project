<!-- Main Wrapper -->
<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        PRODUCT SHOW
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Product Show</h4>
                    <a href="{{ route('product.index') }}"><button class="btn btn-warning">
                            << Go Back</button></a>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card-body ">
                                <div class=" w-100 ">
                                    <div class=" px-2">
                                        <label for="caregory" class="mb-4 h1 text-dark"> Product
                                            Info</label>

                                        <div class="col-md-12 row d-flex">

                                            <div class="col-md-6 mx-5">
                                            <p> Picture : </p>
                                            @foreach($product->images as $image)
                                                <div class="card  text-center d-flex">
                                                   <img
                                                            src="{{ asset('storage/products/' . $image->image) }}"
                                                            height="180px" alt="" class="w-90"> 
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="col md-6 card" style="width: 150">
                                                <span>Product Id: {{ $product->id }}</span>
                                                <h4>Name: {{ $product->name }}</h4>
                                                <p>Category: <a href="{{ route('category.index') }}"> <span
                                                            class="text-dark h6">{{ $product->category?->name }}</span></a>
                                                </p>
                                                <p>Brand:
                                                    {{ $product->brand?->name ? $product->brand->name : 'No brand' }}
                                                </p>
                                                <p>Color: <span
                                                        style="color: {{ $product->color?->color_code }}">{{ $product->color?->name ? $product->color->name : 'No Color' }}</span>
                                                </p>
                                                <p>Price: <span class="text-danger"> {{ $product->price }} ৳ </span></p>
                                                <p>Description about this Product: {{ $product->description }}</p>
                                                <p>Colors:
                                                    @foreach ($colors as $color)
                                                        <h5 class="text-light"
                                                            style="background-color:  {{ $color->color_code }}">
                                                            {{ $color->name }}</h5>
                                                    @endforeach

                                                </p>
                                                <p>Sizes:
                                                    @foreach ($sizes as $size)
                                                        <h5 class="text-dark">
                                                            {{ $size->title }}</h5>
                                                    @endforeach

                                                </p>
                                                {{-- @foreach ($product->colors as $color)
                                                    {{ $color }}
                                                @endforeach --}}

                                                <p>Create:
                                                    {{ $product->created_at->diffForHumans() }}
                                                </p>
                                                <p> {{ $product->created_at }}</p>
                                                

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>



        </div>
        </div>

        <x-admin.partials.footer />

        </div>
        </x-admin>
