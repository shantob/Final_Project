<x-forntend.master>
    <x-slot:title>
        CHECKOUT LIST
        </x-slot>
        <x-forntend.partials.header />
        <div class="container-fluid pt-5">
            <div class="row px-xl-5">
                <div class="col-lg-8 table-responsive mb-5">
                    <form action="" name="cart">
                        <table class="table table-bordered text-center mb-0">
                            <thead class="bg-secondary text-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle" id="cartItems">

                            </tbody>
                            <div id="loader" class="spinner-border text-success mx-5" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </table>
                    </form>
                </div>
                <div class="col-lg-4">
                    <form class="mb-5" action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-4" placeholder="Coupon Code">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Apply Coupon</button>
                            </div>
                        </div>
                    </form>
                    <div class="card border-secondary mb-5">
                        <div class="card-header bg-secondary border-0">
                            <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3 pt-1">
                                <h6 class="font-weight-medium">Subtotal</h6>
                                <h6 class="font-weight-medium">$150</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Shipping</h6>
                                <h6 class="font-weight-medium">$10</h6>
                            </div>
                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <div class="d-flex justify-content-between mt-2">
                                <h5 class="font-weight-bold">Total</h5>

                                <h5 class="font-weight-bold" id="totalPrice">0</h5>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section Begin -->
        <!-- ................................ -->
        <!-- fooder//////////////////////////////// -->
        @push('script')
            <script src="{{ asset('assets/forntend/js/cart.js') }}"></script>
        @endpush

</x-forntend.master>
