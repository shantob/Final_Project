<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        CHANGE USER ROLE
        </x-slot>

        <!-- Main Wrapper -->

        <!-- Main Wrapper -->
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Change Users Role</h4>

                    <a href="{{ route('users.index') }}"><button class="btn btn-warning">
                            << Go Back</button></a>
                    <form action="{{ route('users.update_role',$user->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="row">

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="card-body">

                                                <x-admin.forms.select name="role" label="Select Role"
                                                    :values="$roles" name="role_id" :selectedval="old('role_id', $user->role_id)" />
                                                    <button type="submit" class="btn btn-primary">Submit</button>

                                            </div>
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
