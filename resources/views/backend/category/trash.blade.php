<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        CATEGORY TRASH LIST
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Category List <h6 class="text-right">                        <div class="btn-toolbar mb-2 mb-md-0" style="margin-left: 50">
                        <div class="btn-group me-2">
                            <a href="#">
                                <button type="button" class="btn btn-sm btn-outline-primary">PDF</button>
                            </a>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export Excel</button>
                            <a href="{{route('category.index')}}">
                                <button type="button" class="btn btn-sm btn-outline-success">List Page</button>
                            </a>
                        </div>
                    </div> <a href="{{route('category.create')}}"><button class="btn btn-danger"><span data-feather="plus"></span> Add New</button></a></h6></h4>
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
                                                    <label for="caregory" class="mb-4 h1 text-dark">List Trasted Category <span class="text-danger">({{$categories->count()}})</span></label>
                                                    <table class="table table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">List Category</th>
                                                                <th colspan="3" scope="col">Action</th>

                                                        </thead>
                                                        <tbody>
                                                            @foreach ($categories as $categors)
                                                            <tr>
                                                                <th scope="row">{{$loop->iteration}}</th>
                                                                <td>{{$categors->name}}</td>
                                                                <td class="d-flex">
                                                                <form action="{{ route('category.restore', $categors->id) }}" method="post">
                                                                    @csrf
                                                                    @method('patch')
                                                                    <button class="btn btn-sm btn-outline-warning" onclick="return confirm('Are you sure want to restore?')">Restore</button>
                                                                </form>
                                                                <form action="{{ route('category.delete', $categors->id) }}" method="post">
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

            <x-admin.partials.footer />

        </div>
        </x-admin>
        <!-- Main Wrapper -->