<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        COLOR LIST
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Color List <h6 class="text-right">
                            <div class="btn-toolbar mb-2 mb-md-0" style="margin-left: 50">
                                <div class="btn-group me-2">
                                    <a href="{{ route('colors.pdf') }}">
                                        <button type="button" class="btn btn-sm btn-outline-primary">PDF</button>
                                    </a>
                                    <a href="{{ route('colors.export') }}">
                                        <button type="button" class="btn btn-sm btn-outline-primary">Excel</button>
                                    </a>
                                    <a href="{{route('colors.trash')}}">
                                        <button type="button" class="btn btn-sm btn-outline-danger">Trash</button>
                                    </a>
                                </div>
                            </div> <a href="{{ route('color.create') }}"><button class="btn btn-danger"><i class="bi bi-plus-lg"></i> Add New</button></a>
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
                                                    <label for="caregory" class="mb-4 h1 text-dark">Color List <span class="text-danger">({{ $colors->count() }})</span></label>
                                                    <table class="table table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Name Of Color</th>
                                                                <th scope="col">Product</th>
                                                                <th scope="col">Is Active</th>
                                                                <th colspan="3" scope="col">Action</th>

                                                        </thead>
                                                        <tbody>
                                                            @foreach ($colors as $color)
                                                            <tr>
                                                                <th scope="row">{{ $loop->iteration }}</th>
                                                                <td style="color: {{ $color->color_code }}">
                                                                    <h4>{{ $color->name }}</h4>
                                                                </td>
                                                                <td>{{$color->products->count()}}</td>
                                                                <td>{{ $color->is_active ? 'True' : 'False' }}</td>
                                                                <td class="d-flex">
                                                                    <a href="{{ route('color.edit', $color->id) }}" class="btn btn-sm btn-outline-warning">Edit
                                                                        Now</a>

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