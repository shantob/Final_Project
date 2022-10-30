<x-admin.master>
    <x-slot:title>
        Carousels add
        </x-slot>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Calrousal Create</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export PDF</button>
                </div>
                <a href="{{ route('carousels.index') }}">
                    <button type="button" class="btn btn-sm btn-outline-primary">
                        <span data-feather="list"></span>
                        List
                    </button>
                </a>
            </div>
        </div>

        <x-admin.forms.errors />


        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Category Add</h4>
                    <div class="row">
                        <div class="col-md-10">

                            <div class="main-content bg-light">
                                <!-- Main Wrapper -->
                                <div class=" my-container active-cont">
                                    <!-- Top Nav -->

                                    <!--End Top Nav -->

                                    <br>
                                    <br>
                                    <div class="col-md-10">

                                        <div class="main-content">


                                            <div class="col-md-12 text-center d-flex">
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card">
                                                        <div class="card-body ">
                                                            <form action="{{ route('carousels.store') }}" method="post" enctype="multipart/form-data">
                                                                @csrf

                                                                <x-admin.forms.input type="text" name="name" label="Name" :value="old('name')" required placeholder="Enter name" />

                                                                <x-admin.forms.input type="file" name="image" label="Image" />

                                                                {{-- select, checkbox, radio, texarea --}}

                                                                <div class="mb-3 form-check">
                                                                    <input name="is_active" type="checkbox" class="form-check-input" id="isActiveInput">
                                                                    <label class="form-check-label" for="isActiveInput">Is Active ?</label>
                                                                </div>

                                                                <div class="d-flex justify-content-center mt-4 py-4">
                                                                    <button type="submit" class="btn btn-success mx-2">Create
                                                                        Category</button>
                                                                    <button type="reset" class="btn btn-danger mx-2">Cancle</button>
                                                                </div>
                                                            </form>
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


</x-admin.master>