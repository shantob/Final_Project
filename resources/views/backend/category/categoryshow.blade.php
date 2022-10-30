<!-- Main Wrapper -->
<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        CATEGORY SHOW
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Category Show</h4>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="main-content bg-light">


                                <div class=" my-container active-cont">
                                    <!-- Top Nav -->

                                    <!--End Top Nav -->

                                    <br>
                                    <br>
                                    <div class="col-md-10">
                                        <a href="{{ route('category.index') }}"><button class="btn btn-success">
                                        <i class="bi bi-skip-backward-fill"></i> GO BACK</button></a>
                                        <div class="main-content">

                                            <br>
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body  text-center">
                                                        <div class=" w-100 ">
                                                            <div class=" px-2">
                                                                <label for="caregory" class="mb-4 h1 text-dark">
                                                                    Category Info</label>




                                                                <p>Category Id: {{ $category->id }}</p>
                                                                <p>Name: {{ $category->name }}</p>
                                                                <p>Is Active?: {{ $category->is_active ? 'Yes' : 'No' }}
                                                                </p>
                                                                @foreach( $category->images as $image)
                                                                <img src="{{ asset('storage/categories/' . $image->image	) }}"
                                                                    height="250" />
                                                                @endforeach
                                                                
                                                            </div>

                                                            <table
                                                                class="table table-responsive table-hover table-responsive round mt-5"
                                                                style="width: 100%" id="product_table">
                                                                <thead>
                                                                    <tr class="text-light">
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Name Of All Product</th>
                                                                        <th scope="col">Category </th>
                                                                        <th scope="col">Price</th>
                                                                        <th scope="col">Image</th>
                                                                        <th scope="col">Tags</th>
                                                                        <th scope="col">Img_alt</th>
                                                                        <th colspan="3" scope="col">Action</th>

                                                                </thead>
                                                                <tbody>



                                                                    @foreach ($products as $product)
                                                                        @if ($product->count() > 0)
                                                                            <tr>
                                                                                <th scope="row">
                                                                                    {{ $loop->iteration }}
                                                                                </th>
                                                                                <td>{{ $product->name }}</td>

                                                                                {{--  <td>{{ $product->categories?->name }}</td> --}}

                                                                                <td>Lorem ipsum dolor sit amet.</td>
                                                                                <td>#</td>
                                                                                <td><img src="#" height="40px"
                                                                                        alt=""></td>
                                                                                <td>#</td>
                                                                                <td>#</td>

                                                                                <td><a href="#"><button
                                                                                            type="submit"
                                                                                            class="btn-sm btn-outline-info w-100">View</button></a>
                                                                                </td>



                                                                            </tr>
                                                                        @endif
                                                                        <h5>No Productphp</h5>
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
            </div>

            <x-admin.partials.footer />

        </div>
        </x-admin>
