<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet" />
    <title>Ajab Admin Login</title>
</head>

<body class="bg-dark">
    <div class="col-md-12 d-flex mt-4">
        <div class="col-md-4"></div>
        <div class="card col-md-4">
            <div class="card-body mt-2">
                <!-- Pills navs -->
                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <!-- Pills navs -->

                <!-- Pills content -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="text-center mb-3">
                                <p>Sign in :</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>

                            <p class="text-center">or:</p>

                            <!-- Email input -->

                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control" />
                                <label class="form-label" for="email">Email or username</label>
                                <x-input-error :messages="$errors->get('email')" class=" form-label text-danger mx-5" />

                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="password" name="password" class="form-control" />
                                <label class="form-label" for="password">Password</label>
                                <x-input-error :messages="$errors->get('password')" class=" form-label text-danger mx-5" />

                            </div>

                            <!-- 2 column grid layout -->
                            <div class="row mb-4">
                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-3 mb-md-0">
                                        <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                        <label class="form-check-label" for="loginCheck"> Remember me </label>
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Simple link -->
                                    <a href="{{ route('password.request') }}">Forgot password?</a>
                                    <a href="{{ route('register') }}">For Create An Account?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-3">Sign In</button>

                            <!-- Register buttons -->
                        </form>
                    </div>
                    <div class="tab-pane fade show" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="text-center mb-3">
                                <p>Resister up with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>

                            <p class="text-center">or:</p>

                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="name" class="form-control" name="name" :value="old('name')" />
                                <label class="form-label" for="registerName">Name</label>
                                <x-input-error :messages="$errors->get('name')" class=" form-label text-danger mx-5" />

                                </label>
                            </div>

                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" :value="old('email')" class="form-control" />
                                <label class="form-label" for="email">Type Email</label>
                                <x-input-error :messages="$errors->get('email')" class=" form-label text-danger mx-5" />
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="present_address" name="present_address" class="form-control" :value="__('Present Address')" />
                                <label class="form-label" for="present_address">Present Address</label>
                                <x-input-error :messages="$errors->get('present_address')" class=" form-label text-danger mx-5" />

                            </div>
                            <x-admin.forms.select name="district_id" label="Select district" :values="$districts" :selectedval="old('district_id')" class="form-control" />

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="password" id="password" class="form-control" />
                                <label class="form-label" for="password">Password</label>
                                <x-input-error :messages="$errors->get('password')" class=" form-label text-danger mx-5" />

                            </div>
                            <!-- Repeat Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password" class="form-control" />
                                <label class="form-label" for="password_confirmation">Repeat password</label>
                                <x-input-error :messages="$errors->get('password_confirmation')" class=" form-label text-danger mx-5" />

                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="file">Input Your Photo</label>

                                <input type="file" id="file" name="image" />
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
                                <label class="form-check-label" for="registerCheck">
                                    I have read and agree to the terms
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-3">Register Now</button>
                        </form>
                    </div>
                </div>
                <!-- Pills content -->
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>