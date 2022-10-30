<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        CATEGORY LIST
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Category List <h6 class="text-right">
                            <div class="btn-toolbar mb-2 mb-md-0" style="margin-left: 50">
                                <div class="btn-group me-2">
                                    <a href="{{ route('pdf') }}">
                                        <button type="button" class="btn btn-sm btn-outline-primary">PDF</button>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Export Excel</button>
                                    <a href="{{route('category.trash')}}">
                                        <button type="button" class="btn btn-sm btn-outline-danger">Trash</button>
                                    </a>
                                </div>
                            </div> <a href="{{route('category.create')}}"><button class="btn btn-danger"><i class="bi bi-plus-lg"></i> Add New</button></a>
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
                                                    <label for="caregory" class="mb-4 h1 text-dark">List Category <span class="text-danger">({{$categories->count()}})</span></label>
                                                    <table class="table table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">List Category</th>
                                                                <th scope="col">Image Category</th>
                                                                <th colspan="3" scope="col">Action</th>

                                                        </thead>
                                                        <tbody>
                                                            @foreach ($categories as $categors) 
                                                            <tr>
                                                                <th scope="row">{{$loop->iteration}}</th>
                                                                <td>{{$categors->name}}</td>
                                                                <td> @foreach( $categors->images as $image)
                                                                <img src="{{ asset('storage/categories/' . $image->image	) }}"
                                                                    height="50" />
                                                                @endforeach</td>
                                                                <td><a href="{{route('category.show', $categors->id)}}"><button type="submit" class=" btn-sm btn-outline-info w-100">Wiew</button></a></td>
                                                                <td><a href="{{route('category.edit',$categors->id)}}"><button type="submit" class="btn-sm btn-outline-warning w-100">UPDATE</button></a></td>
                                                                <td>
                                                                    <form action="{{ route('category.destroy', $categors->id) }}" method="post">
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