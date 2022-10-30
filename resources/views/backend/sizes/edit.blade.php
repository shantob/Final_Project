<x-admin.master>
    <x-slot:title>
        Size add
        </x-slot>


        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Size Edit</h4>
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
                                                            <form action="{{ route('sizes.update',$size->id )}}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('patch')
                                                                <x-admin.forms.input type="text" name="title" label="Name" :value="old('title',$size->title)" placeholder="Enter name" />



                                                                @php
                                                                $checklist = ['1'=>'Is Active'];
                                                                if($size->is_active){
                                                                $checkedItems=[];
                                                                }
                                                                else {
                                                                $checkedItems=[];
                                                                }
                                                                @endphp

                                                                <x-admin.forms.checkboxcc name="is_active" :checklist="$checklist" :checkedItems="[$size->is_active]" />
                                         
                                                             


                                                                <div class="d-flex justify-content-center mt-4 py-4">
                                                                    <button type="submit" class="btn btn-success mx-2">Create
                                                                        Size</button>
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



        <x-admin.forms.errors />



</x-admin.master>