<!-- Main Wrapper -->
<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        USER SHOW
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">User Show</h4>
                    <div class="row">
                        <div class="col-md-10">

                            <div class="main-content bg-light">


                                <div class=" my-container active-cont">
                                    <!-- Top Nav -->

                                    <!--End Top Nav -->

                                    <br>
                                    <br>
                                    <div class="col-md-10">

                                        <div class="main-content">

                                            <br>
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body  text-center">
                                                        <div class=" w-100 ">
                                                            <div class=" px-2">
                                                                <label for="caregory" class="mb-4 h1 text-dark"> User Info</label>




                                                                <p>User Id Id: {{$user->id}} </p>
                                                                <p>User Name: {{$user->name}}</p>
                                                                <p>User Email: {{$user->email}}</p>
                                                                <p>User Present Address: {{$user->profile?->present_address}}</p>
                                                                <p>User Phone Number: {{$user->profile?->phone_number}}</p>
                                                                <p>User Created At: {{$user->created_at}}</p>
                                                              
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
            </div>

            <x-admin.partials.footer />

        </div>
        </x-admin>