<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        CATEGORY ADD
        </x-slot>

        <!-- Main Wrapper -->

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
                                                            <form action="{{ route('category.store') }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <x-admin.forms.input type="text" name="name"
                                                                    label="Name" :value="old('name')"
                                                                    placeholder="Enter name" />

                                                                <x-admin.forms.input type="file" name="image"
                                                                    label="Image" />

                                                                <div class="mb-3 form-check">
                                                                    <input name="is_active" type="checkbox"
                                                                        class="form-check-input" id="isActiveInput">
                                                                    <label class="form-check-label"
                                                                        for="isActiveInput">Is
                                                                        Active ?</label>
                                                                </div>


                                                                <div class="d-flex justify-content-center mt-4 py-4">
                                                                    <button type="submit"
                                                                        class="btn btn-success mx-2">Create
                                                                        Category</button>
                                                                    <button type="reset"
                                                                        class="btn btn-danger mx-2">Cancle</button>
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
