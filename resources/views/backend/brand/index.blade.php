<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        BRAND LIST
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Brand List <h6 class="text-right">
                            <div class="btn-toolbar mb-2 mb-md-0" style="margin-left: 50">

                            </div> <a href="{{ route('brand.create') }}"><button class="btn btn-danger"><span data-feather="plus"></span> Add New</button></a>
                        </h6>
                    </h4>
                    <div class="row">

                        <div class="col-md-10">

                            <div class="main-content bg-dark">


                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body  text-center">
                                            <div class=" w-100 ">
                                                <div class=" px-2">
                                                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

                                                    </div>
                                                    <label for="caregory" class="mb-4 h1 text-dark">List Brand <span class="text-danger">({{ $brands->count() }})</span></label>
                                                    <table class="table table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Brand Name</th>
                                                                <th scope="col">Brand Item</th>
                                                                <th scope="col">Image</th>
                                                                <th scope="col">Is Active</th>☻
                                                                <th colspan="3" scope="col">Action</th>

                                                        </thead>
                                                        <tbody>
                                                            @foreach ($brands as $color)
                                                            <tr>
                                                                <th scope="row">{{ $loop->iteration }}</th>
                                                                <td>{{ $color->name }}</td>
                                                                <td>{{ $color->company }}</td>
                                                                <td> 
                                                                    @foreach( $color->images as $image)
                                                                    <img src="{{ asset('storage/brands/'. $image->image) }}" height="50" />
                                                                    @endforeach
                                                                </td>
                                                                <td>{{ $color->is_active ? 'True' : 'False' }}</td>


                                                                <td>
                                                                    <form action="{{ route('color.destroy', $color->id) }}" method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
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

            <x-admin.partials.footer />

        </div>
        </x-admin>
        <!-- Main Wrapper -->