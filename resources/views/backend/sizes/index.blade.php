<x-admin.master>
    <x-slot:title>
        Size List
        </x-slot>

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Size List <h5 class="text-right"><a href="{{ route('sizes.create') }}"><button class="btn btn-danger"><i class="bi bi-plus-lg"></i>Add New</button></a>
                    </h4>
                    </h5>
                    <div class="btn-group me-2">
                        <a href="{{ route('sizes.pdf') }}">
                            <button type="button" class="btn btn-sm btn-outline-primary">PDF</button>
                        </a>

                        <a href="{{ route('sizes.export') }}">
                            <button type="button" class="btn btn-sm btn-outline-primary">Excel</button>
                        </a>
                       
                       
                        <a href="{{ route('sizes.trash') }}">
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
                                                        <label for="caregory" class=" h1 text-dark">Size LIst
                                                            <br><span class="text-danger mb-4">Total :
                                                                ({{ $sizes->count() }})</span></label>
                                                        <input type="text" id="product_search" class="form-control" placeholder="Search Size" onclick="searchFun()">
                                                        <table class="table table-responsive table-hover table-responsive round" id="product_table">
                                                            <thead>
                                                                <tr class="text-light">
                                                                    <th>SL#</th>
                                                                    <th>Title</th>
                                                                  
                                                                    <th>IS active</th>
                                                                    <th width="180">Action</th>

                                                            </thead>
                                                            <tbody>
                                                                @foreach($sizes as $size)
                                                                <tr>
                                                                    <th scope="row">{{ $serialNo++ }}</th>
                                                                    
                                                                    <td>{{ $size->title }}</td>
                                                                    <td>{{ $size->is_active? 'Yes' : 'No' }}

                                                                    </td>
                                                                    
                                                                   
                                                                   

                                                                    <td><a href="{{ route('sizes.show', $size->id) }}"><button type="submit" class="btn-sm btn-outline-info w-100">View</button></a>
                                                                    </td>
                                                                    <td><a href="{{ route('sizes.edit', $size->id) }}">
                                                                            <button type="submit" class="btn-sm btn-outline-primary w-100">Edit</button></a>
                                                                    </td>

                                                                    <td>
                                                                        <form action="{{ route('sizes.destroy', $size->id) }}" method="POST">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <button type="submit" class="btn-sm btn-outline-danger w-100">Delete</button>
                                                                        </form>

                                                                    </td>
                                                                </tr>
                                                                @endforeach

                                                            </tbody>

                                                        </table>
                                                      <span>{{ $sizes->links() }}</span>
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

        {{-- <x-forms.message /> --}}

      


</x-admin.master>