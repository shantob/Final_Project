<x-admin.master>
    <x-slot:title>
        Carousels List
        </x-slot>


        <x-admin.forms.message />




        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Category List <h6 class="text-right">
                            <div class="btn-toolbar mb-2 mb-md-0" style="margin-left: 50">
                                <div class="btn-group me-2">
                                    <a href="{{ route('carousels.pdf') }}">
                                        <button type="button" class="btn btn-sm btn-outline-primary">PDF</button>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Export Excel</button>
                                    <a href="{{route('carousels.trash')}}">
                                        <button type="button" class="btn btn-sm btn-outline-danger">Trash</button>
                                    </a>
                                </div>
                            </div> <a href="{{route('carousels.create')}}"><button class="btn btn-danger"><i class="bi bi-plus-lg"></i> Add New</button></a>
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
                                                    <label for="caregory" class="mb-4 h1 text-dark">List $carousels <span class="text-danger">({{$carousels->count()}})</span></label>
                                                    <table class="table table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>

                                                                <th scope="col">Carousel</th>
                                                                <th colspan="3" scope="col">Action</th>

                                                        </thead>
                                                        <tbody>
                                                            @foreach($carousels as $carousel)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $carousel->name }}</td>
                                                                <td class="d-flex">
                                                                    <a class="btn btn-sm btn-outline-info" href="{{ route('carousels.show', $carousel->id) }}">Show</a>

                                                                    <a class="btn btn-sm btn-outline-info" href="{{ route('carousels.edit', $carousel->id) }}">Edit</a>

                                                                    <form action="{{ route('carousels.destroy', $carousel->id) }}" method="post">
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

</x-admin.master>