<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        PRODUCT LIST
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Product List <h5 class="text-right"><a href="{{ route('product.create') }}"><button class="btn btn-danger"><i class="bi bi-plus-lg"></i>Add New</button></a>
                    </h4>
                    </h5>
                    <div class="btn-group me-2">
                        <a href="{{ route('product.pdf') }}">
                            <button type="button" class="btn btn-sm btn-outline-primary">PDF</button>
                        </a>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export Excel</button>
                        <a href="{{ route('product.trash') }}">
                            <button type="button" class="btn btn-sm btn-outline-danger">Trash</button>
                        </a>
                    </div>
                    <div class="row">
                        <div class=" my-container active-cont mx-2">
                            <!-- Top Nav -->

                            <!--End Top Nav -->

                            <br>
                            <br>
                            <div class="col-md-12">

                                <div class="main-content bg-dark">


                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <div class=" w-100 ">
                                                    <div class=" px-2">
                                                        <label for="caregory" class=" h1 text-dark">Product LIst
                                                            <br><span class="text-danger mb-4">Total :
                                                                ({{ $allproduct->count() }})</span></label>
                                                        <input type="text" id="product_search" class="form-control" placeholder="Search Product" onclick="searchFun()">
                                                        <table class="table table-responsive table-hover table-responsive round" id="product_table">
                                                            <thead>
                                                                <tr class="text-light">
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Name Of All Product</th>
                                                                    <th scope="col">Category </th>
                                                                    <th scope="col">Price</th>
                                                                    <th scope="col">Image</th>
                                                                    <th scope="col">Brand</th>
                                                                    <th scope="col">Color</th>
                                                                    <th scope="col">Created At</th>
                                                                    <th colspan="3" scope="col">Action</th>

                                                            </thead>
                                                            <tbody>
                                                                @foreach ($productlist as $product)
                                                                <tr>
                                                                    <th scope="row">{{ $serialNo++ }}</th>
                                                                    <td>{{ $product->name }}</td>

                                                                    {{-- <td>{{ $product->categories?->name }}</td> --}}

                                                                    <td>{{ $product->category?->name }}</td>
                                                                    <td>{{ $product->price }} ৳</td>
                                                                    <td>
                                                                        @foreach( $product->images as $image)
                                                                        <img src="{{ asset('storage/products/' . $image->image	) }}" height="30" />
                                                                        @endforeach
                                                                    </td>
                                                                    <td>{{ $product->brand?->name }}</td>
                                                                    <td style="color: ">
                                                                        <h6></h6>
                                                                    </td>
                                                                    {{-- {{ $product->colors?->name? $product->colors->name : 'NULL'}} --}}
                                                                    <td>{{ $product->created_at->diffForHumans() }}</td>

                                                                    <td><a href="{{ route('product.show', $product->id) }}"><button type="submit" class="btn-sm btn-outline-info w-100">View</button></a>
                                                                    </td>
                                                                    <td><a href="{{ route('product.edit', $product->id) }}">
                                                                            <button type="submit" class="btn-sm btn-outline-primary w-100">Edit</button></a>
                                                                    </td>

                                                                    <td>
                                                                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <button type="submit" class="btn-sm btn-outline-danger w-100">Delete</button>
                                                                        </form>

                                                                    </td>
                                                                </tr>
                                                                @endforeach

                                                            </tbody>

                                                        </table>
                                                        <span>{{ $productlist->links() }}</span>
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