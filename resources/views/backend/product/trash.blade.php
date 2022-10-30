<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        PRODUCT TRASH LIST
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Product Trash List <h5 class="text-right"><a href="{{route('product.create') }}"><button class="btn btn-danger">+ Add New</button></a></h4>
                    </h5>
                    <a href="{{ route('product.index') }}"><button class="btn btn-warning">
                    <i class="bi bi-skip-backward-fill"></i>Go Back</button></a>
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
                                                        <label for="product" class=" h1 text-dark">Product LIst
                                                            <br><span class="text-danger mb-4">Total :
                                                                ({{ $product->count() }})</span></label>
                                                        <input type="text" id="product_search" class="form-control" placeholder="Search Product" onclick="searchFun()">
                                                        <table class="table table-responsive table-hover table-responsive round" id="product_table">
                                                            <thead>
                                                                <tr class="text-light">
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Name Of All Product</th>
                                                                    <th scope="col">Category </th>
                                                                    <th scope="col">Price</th>
                                                                    <th scope="col">Brand</th>
                                                                    <th scope="col">Color</th>
                                                                    <th colspan="3" scope="col">Action</th>

                                                            </thead>
                                                            <tbody>
                                                                @foreach ($product as $products)
                                                                <tr>
                                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                                    <td>{{ $products->name }}</td>
                                                                    <td>{{ $products->category?->name }}</td>                                                                    <td>{{ $products->price }}</td>
                                                                    <td>{{ $products->price }}</td>
                                                                    <td>{{ $products->brand?->name }}</td>
                                                                    <td>{{ $products->color?->name }}</td>
                                                                   <td class="d-flex"> <form action="{{ route('product.restore', $products->id) }}" method="post">
                                                                        @csrf
                                                                        @method('patch')
                                                                        <button class="btn btn-sm btn-outline-warning" onclick="return confirm('Are you sure want to restore?')">Restore</button>
                                                                    </form>
                                                                    <form action="{{ route('product.delete', $products->id) }}" method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure want to delete?')">Delete</button>
                                                                    </form>
                                                                </td>
                                                                </tr>
                                                                @endforeach

                                                            </tbody>

                                                        </table>
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