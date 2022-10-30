
<x-admin.master>
    <x-slot:title>
        Colors trash
        </x-slot>
<div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Size trash <h6 class="text-right">
                            <div class="btn-toolbar mb-2 mb-md-0" style="margin-left: 50">
                                <div class="btn-group me-2">

                                    <a href="{{ route('sizes.index') }}">
                                        <button type="button" class="btn btn-sm btn-outline-primary">List</button>
                                    </a>
                                    <a href="{{route('sizes.trash')}}">
                                        <button type="button" class="btn btn-sm btn-outline-danger">Trash</button>
                                    </a>
                                </div>

                            </div>



                            <a href="{{route('sizes.create')}}"> <button type="button" class="btn btn-sm btn-outline-primary">
                                    <span data-feather="plus"></span>
                                    Add New
                                </button> </a> <a href="{{ route('sizes.create') }}"><button class="btn btn-danger"><i class="bi bi-plus-lg"></i> Add New</button></a>
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
                                                    <label for="caregory" class="mb-4 h1 text-dark">Color List <span class="text-danger">({{ $sizes->count() }})</span></label>
                                                    <table class="table table table-hover">
                                                        <thead>
                                                            <tr>
                                                            <th>SL#</th>
                                                                    <th>Title</th>
                                                                  
                                                                    <th>IS active</th>
                                                                    <th width="180">Action</th>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($sizes as $size)
                                                                <tr>
                                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                                    
                                                                    <td>{{ $size->title }}</td>
                                                                    <td>{{ $size->is_active? 'Yes' : 'No' }}

                                                                    </td>
                                                                <td class="d-flex">
                                                                    <form action="{{ route('sizes.restore', $size->id) }}" method="post">
                                                                        @csrf
                                                                        @method('patch')
                                                                        <button class="btn btn-sm btn-outline-warning" onclick="return confirm('Are you sure want to restore?')">Restore</button>
                                                                    </form>

                                                                    
                                                                    <form action="{{ route('sizes.delete', $size->id) }}" method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure want to delete permanetly')" title="parmanet delete">Delete </button>
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
        </x-admin.master>