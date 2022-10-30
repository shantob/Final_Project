<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        ADD PEODUCT
        </x-slot>

        <!-- Main Wrapper -->

        <!-- Main Wrapper -->
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">ADD Product</h4>

                    <a href="{{ route('product.index') }}"><button class="btn btn-warning">
                    <i class="bi bi-skip-backward-fill"></i> Go Back</button></a>
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="card-body">

                                                <x-admin.forms.input type="text" label="Product Name" class="form-control" name="name" id="title" placeholder="Enter Product name" value="{{ old('name') }}" />


                                                <x-admin.forms.textarea name="description" label="Product Description" class="bg-light form-control" value="{{ old('description') }}" placeholder="Type Description" />

                                                <x-admin.forms.input type="number" name="price" id="price" label="Price Of Product" class="form-control" value="{{ old('price') }}" />

                                                <x-admin.forms.checkbox name="sizes[]" :checkList="$sizes" label="Size Product" />


                                            </div>
                                            <div class="card-action">
                                                <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-plus"></i>Update</button>
                                                <button class="btn btn-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="card-body">
                                                <x-admin.forms.select name="category_id" label="Select category" :values="$categories" :selectedval="old('category')" />

                                                <x-admin.forms.select name="brand_id" label="Select Brands" :values="$brands" :selectedval="old('brand')" />

                                                {{-- <x-admin.forms.select name="color_id" label="Select Color"
                                                    :values="$colors" :selectedval="old('color')" /> --}}
                                                <x-admin.forms.checkbox name="colors[]" :checkList="$colors" label="Colors" />
                                                @php
                                                                $checklist = ['Is Active'];
                                                                @endphp


                                                           
                                                <div class="mb-3">
                                                <label class="input-lable" for="">
                                                        Image Upload</label>
                                                        <input type="file" class="form-control"name="image[]" multiple />
                                                </div>
                                                <!-- <x-admin.forms.input type="file" lable="Product Image" name="image[]"
                                                    id="image" value="{{ old('image') }}" multiple />
 -->


                                                <x-admin.forms.input type="text" name="img_alt" label="Image Alt." id="img_alt" class="form-control" value="{{ old('name') }}" />



                                                <x-admin.forms.input type="text" name="tags" label="Tags/Kewwords" id="tags" class="form-control" value="{{ old('name') }}" />


                                                <div class="mb-3 form-check">
                                                    <input name="is_active" type="checkbox" class="form-check-input" id="isActiveInput">
                                                    <label class="form-check-label" for="isActiveInput">Is
                                                        Active ?</label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>






        <x-admin.partials.footer />

        </div>
        </x-admin>