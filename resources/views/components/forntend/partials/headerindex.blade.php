<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid mb-5 ">
    <div class="row border-top px-xl-5 ">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0"
                id="navbar-vertical">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    @foreach ($categories as $category)
                        <a class="nav-item nav-link"
                            href="{{ route('frontend.products.index', $category->id) }}">{{ $category->name }}</a>
                        @endforeach
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span
                            class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">

                        <a href="{{ route('home') }}"
                            class="nav-item nav-link {{ Route::is('home') ? 'active' : '' }} mx-2">Home</a>
                        <a href="{{ route('frontend.products.all') }}"
                            class="nav-item nav-link {{ Route::is('frontend.products.all') ? 'active' : '' }}  mx-2">All
                            Product</a>
                        <a href="{{ route('contact') }}"
                            class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }} mx-2">Contact
                            Us</a>

                        <a href="{{ route('about') }}"
                            class="nav-item nav-link {{ Route::is('about') ? 'active' : '' }} mx-2">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                <a href="checkout.html" class="dropdown-item">Checkout</a>
                            </div>
                        </div>
                    </div>
                    @if (Auth::user() != null)
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle"
                                data-toggle="dropdown">{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                @if (Auth::user()->role_id != 3)
                                    <a href="{{ route('admin.home') }}" class="dropdown-item"> Dashboard</a>
                                @endif
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button onclick="event.preventDefault();this.closest('form').submit();"
                                        class="dropdown-item btn">Logout</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="navbar-nav ml-auto py-0">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><i class="fa fa-user"></i>Login</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                                                <li class="nav-item" style="width: 50%;" role="presentation">
                                                    <a class="nav-link active text-dark" id="tab-login"
                                                        data-mdb-toggle="pill" href="#pills-login" role="tab"
                                                        aria-controls="pills-login" aria-selected="true">Login</a>
                                                </li>
                                                <li class="nav-item" style="width: 50%;" role="presentation">
                                                    <a class="nav-link text-dark" id="tab-register"
                                                        data-mdb-toggle="pill" href="#pills-register" role="tab"
                                                        aria-controls="pills-register"
                                                        aria-selected="false">Register</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="modal-body">

                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                                                    aria-labelledby="tab-login">
                                                    <form method="POST" action="{{ route('login') }}">
                                                        @csrf
                                                        <div class="text-center mb-3">
                                                            <p>Sign in :</p>
                                                            <button type="button"
                                                                class="btn btn-link btn-floating mx-1">
                                                                <i class="fab fa-facebook-f"></i>
                                                            </button>

                                                            <button type="button"
                                                                class="btn btn-link btn-floating mx-1">
                                                                <i class="fab fa-google"></i>
                                                            </button>

                                                            <button type="button"
                                                                class="btn btn-link btn-floating mx-1">
                                                                <i class="fab fa-twitter"></i>
                                                            </button>

                                                            <button type="button"
                                                                class="btn btn-link btn-floating mx-1">
                                                                <i class="fab fa-github"></i>
                                                            </button>
                                                        </div>

                                                        <p class="text-center">or:</p>

                                                        <!-- Email input -->

                                                        <div class="form-outline mb-4">
                                                            <input type="email" id="email" name="email"
                                                                class="form-control" />
                                                            <label class="form-label" for="email">Email or
                                                                username</label>
                                                            <x-input-error :messages="$errors->get('email')"
                                                                class=" form-label text-danger mx-5" />

                                                        </div>

                                                        <!-- Password input -->
                                                        <div class="form-outline mb-4">
                                                            <input type="password" id="password" name="password"
                                                                class="form-control" />
                                                            <label class="form-label" for="password">Password</label>
                                                            <x-input-error :messages="$errors->get('password')"
                                                                class=" form-label text-danger mx-5" />

                                                        </div>

                                                        <!-- 2 column grid layout -->
                                                        <div class="row mb-4">
                                                            <div class="col-md-6 d-flex justify-content-center">
                                                                <!-- Checkbox -->
                                                                <div class="form-check mb-3 mb-md-0">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="loginCheck" checked />
                                                                    <label class="form-check-label" for="loginCheck">
                                                                        Remember me </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 d-flex justify-content-center">
                                                                <!-- Simple link -->
                                                                <a href="{{ route('password.request') }}">Forgot
                                                                    password?</a>
                                                            </div>
                                                        </div>

                                                        <!-- Submit button -->
                                                        <button type="submit"
                                                            class="btn btn-primary btn-block mb-3">Sign In</button>

                                                        <!-- Register buttons -->
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade show" id="pills-register" role="tabpanel"
                                                    aria-labelledby="tab-register">
                                                    <form method="POST" action="{{ route('register') }}">
                                                        @csrf
                                                        <div class="text-center mb-3">
                                                            <p>Resister up with:</p>
                                                            <button type="button"
                                                                class="btn btn-link btn-floating mx-1">
                                                                <i class="fab fa-facebook-f"></i>
                                                            </button>

                                                            <button type="button"
                                                                class="btn btn-link btn-floating mx-1">
                                                                <i class="fab fa-google"></i>
                                                            </button>

                                                            <button type="button"
                                                                class="btn btn-link btn-floating mx-1">
                                                                <i class="fab fa-twitter"></i>
                                                            </button>

                                                            <button type="button"
                                                                class="btn btn-link btn-floating mx-1">
                                                                <i class="fab fa-github"></i>
                                                            </button>
                                                        </div>

                                                        <p class="text-center">or:</p>

                                                        <!-- Name input -->
                                                        <div class="form-outline mb-4">
                                                            <input type="text" id="registerName"
                                                                class="form-control" placeholder="Input Your Namw"
                                                                name="name" :value="old('name')" />
                                                            <label class="form-label" for="registerName">Name</label>
                                                            <x-input-error :messages="$errors->get('name')"
                                                                class=" form-label text-danger mx-5" />

                                                            </label>
                                                        </div>

                                                        <!-- Username input -->
                                                        <div class="form-outline mb-4">
                                                            <input type="email" id="email" name="email"
                                                                placeholder="Input Your Email" :value="old('email')"
                                                                class="form-control" />
                                                            <label class="form-label" for="email">Type
                                                                Email</label>
                                                            <x-input-error :messages="$errors->get('email')"
                                                                class=" form-label text-danger mx-5" />
                                                        </div>

                                                        <!-- Email input -->
                                                        <div class="form-outline mb-4">
                                                            <input type="text" id="present_address"
                                                                name="present_address"
                                                                placeholder="Input Present Address"
                                                                class="form-control" :value="__('Present Address')" />
                                                            <label class="form-label" for="present_address">Present
                                                                Address</label>
                                                            <x-input-error :messages="$errors->get('present_address')"
                                                                class=" form-label text-danger mx-5" />

                                                        </div>
                                                        <x-admin.forms.select name="district_id"
                                                            label="Select district" :values="$districts" :selectedval="old('district_id')"
                                                            class="form-control" />

                                                        <!-- Password input -->
                                                        <div class="form-outline mb-4">
                                                            <input type="password" name="password" id="password"
                                                                class="form-control" placeholder="Input Passqord" />
                                                            <label class="form-label" for="password">Password</label>
                                                            <x-input-error :messages="$errors->get('password')"
                                                                class=" form-label text-danger mx-5" />

                                                        </div>

                                                        <!-- Repeat Password input -->
                                                        <div class="form-outline mb-4">
                                                            <input type="password" name="password_confirmation"
                                                                id="password_confirmation"
                                                                placeholder="Rapid Password"
                                                                autocomplete="new-password" class="form-control" />
                                                            <label class="form-label"
                                                                for="password_confirmation">Repeat password</label>
                                                            <x-input-error :messages="$errors->get('password_confirmation')"
                                                                class=" form-label text-danger mx-5" />

                                                        </div>
                                                        <div class="form-outline mb-4">
                                                            <label class="form-label" for="file">Input Your
                                                                Photo</label>

                                                            <input type="file" id="file" name="image" />
                                                        </div>
                                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                                        <!-- Checkbox -->
                                                        <div class="form-check d-flex justify-content-center mb-4">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                value="" id="registerCheck" checked
                                                                aria-describedby="registerCheckHelpText" />
                                                            <label class="form-check-label" for="registerCheck">
                                                                I have read and agree to the terms
                                                            </label>
                                                        </div>

                                                        <!-- Submit button -->
                                                        <button type="submit"
                                                            class="btn btn-primary btn-block mb-3">Register
                                                            Now</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endif
                </div>
            </nav>
            <x-forntend.partials.carousel :carousels="$carousels" />
        </div>
    </div>
</div>
<!-- Navbar End -->


<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>
