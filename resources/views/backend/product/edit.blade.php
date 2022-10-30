<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        EDIT PEODUCT
        </x-slot>

        <!-- Main Wrapper -->

        <!-- Main Wrapper -->
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Edit Product</h4>

                    <a href="{{ route('product.index') }}"><button class="btn btn-warning">
                    <i class="bi bi-skip-backward-fill"></i>Go Back</button></a>
                    <form action="{{ route('product.update', $product->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="card-body">

                                                <x-admin.forms.input type="text" label="Product Name"
                                                    class="form-control" name="name" id="title"
                                                    placeholder="Enter Product name"
                                                    value="{{ old('name', $product->name) }}" />


                                                <x-admin.forms.textarea name="description" label="Product Description"
                                                    class="bg-light form-control"
                                                    value="{{ old('description', $product->description) }}"
                                                    placeholder="Type Description" />

                                                <x-admin.forms.input type="number" name="price" id="price"
                                                    label="Price Of Product" class="form-control"
                                                    value="{{ old('price', $product->price) }}" />

                                                <x-admin.forms.checkbox name="sizes[]" :checkList="$sizes"
                                                    :checkedItem="$selectSizes" label="Sizes" />


                                            </div>
                                            <div class="card-action">
                                                <button class="btn btn-success" type="submit">Update</button>
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
                                                <x-admin.forms.select name="category_id" label="Select category"
                                                    :values="$categories" :selectedval="old('category', $product->category_id)" />

                                                <x-admin.forms.select name="brand_id" label="Select Brands"
                                                    :values="$brands" :selectedval="old('brand', $product->brand_id)" />
                                                {{-- @php
                                                    dd($selectColors);
                                                @endphp --}}
                                                <x-admin.forms.checkbox name="colors[]" :checkList="$colors"
                                                    :checkedItem="$selectColors" label="Colors" />



                                                <x-admin.forms.input type="file" lable="Product Image" name="image"
                                                    id="image" value="$product->image"
                                                    data-default-file="{{ url('storage/products/', $product->image) }}" />



                                                <x-admin.forms.input type="text" name="img_alt" label="Image Alt."
                                                    id="img_alt" class="form-control"
                                                    value="{{ old('name', $product->img_alt) }}" />



                                                <x-admin.forms.input type="text" name="tags" label="Tags/Kewwords"
                                                    id="tags" class="form-control"
                                                    value="{{ old('name', $product->tags) }}" />

                                                <div class="mb-3 form-check">
                                                    <input name="is_active" type="checkbox" class="form-check-input"
                                                        id="isActiveInput"
                                                        @if ($product->is_active) checked @endif>
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
