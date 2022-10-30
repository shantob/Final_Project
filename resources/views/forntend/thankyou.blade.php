<x-forntend.master>
    <x-slot:title>
        THANK YOU
        </x-slot>
        <x-forntend.partials.header/>
        <section class="shoping-cart spad" style="margin-top: 8rem;">
<div class="col-md-12 row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6">
 <div class="card">
    <div class="card-body">
    <div class="container text-center">
            <img src="https://th.bing.com/th/id/OIP.YTsuhxUOkDbnbQG7tv8eUwHaEn?w=302&h=188&c=7&r=0&o=5&pid=1.7"
                height="200" width="350" alt="">
            <h2 class="text-success">Thank You {{Auth::user()->name}}</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas illum aspernatur temporibus facilis
                adipisci suscipit, iste placeat magnam? Doloremque, deserunt?
            </p>
            <a href="{{route('invoice')}}">
                <button type="submit" class="btn btn-success w-100">Downlood Pement Slip</button>
            </a>
        </div>
    </div>
 </div>
    </div>
</div>
    </section>
        <!-- ................................ -->
        <!-- fooder//////////////////////////////// -->
</x-forntend.master>