<!-- Main Wrapper -->
<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        COLOR EDIT
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Color Edit</h4>
                    <div class="row">
                        <div class="col-md-10">

                            <div class="main-content bg-light">
                                <a href="{{ route('color.index') }}"><button class="btn btn-success">
                                <i class="bi bi-skip-backward-fill"></i> GO BACK</button></a>

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
                                                    <div class="card bg-light">
                                                        <div class="card-body ">
                                                            <label for="caregory" class="my-4">
                                                                <h2 class="text-center text-light">Edit Color</h2>
                                                            </label>
                                                            <form action="{{ route('color.update', $color->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('patch')
                                                                <x-admin.forms.input type="text" name="name"
                                                                    label="Name" :value="old('name', $color->name)"
                                                                    placeholder="Enter name" />

                                                                <label for="color">Select Color</label>
                                                                <input type="color" name="color_code" id="color" class="w-100 my-3"
                                                                    value="{{ old('color_code', $color->color_code) }}"                                                                    
                                                                    placeholder="Enter Color Code" />

                                                                <x-admin.forms.textarea name="description"
                                                                    label="Descriptiion " :value="old('description', $color->description)"
                                                                    placeholder="Enter Color Description" />


                                                                <div class="mb-3 form-check">
                                                                    <input name="is_active" type="checkbox"
                                                                        class="form-check-input" id="isActiveInput"
                                                                        @if ($color->is_active) checked @endif>
                                                                    <label class="form-check-label"
                                                                        for="isActiveInput">Is Active ?</label>
                                                                </div>
                                                                <div class="d-flex justify-content-center mt-4 py-4">
                                                                    <button type="submit"
                                                                        class="btn btn-light mx-2">Updte
                                                                        Color</button>
                                                                    <button type="reset"
                                                                        class="btn btn-dark mx-2">Cancle</button>
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
        </x-admin>
