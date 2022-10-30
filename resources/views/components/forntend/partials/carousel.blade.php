@props(['carousels'=>[],])


<div id="header-carousel" class="carousel slide" data-ride="carousel">
    @for ($i = 0; $i < count($carousels); $i++) <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}" @if ($i==0)class="active" aria-current="true" @endif aria-label="Slide {{$i+1}}"></button>
        @endfor
        <div class="carousel-inner">
            @forelse ($carousels as $carousel)
            <div class="carousel-item 
                @if ($loop->first) active @endif" style="height: 410px;">
                <img class="img-fluid" src="{{ asset('storage/carousels/' . $carousel->image) }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order
                        </h4>
                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">{{ $carousel->name }}</h3>
                        <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                    </div>
                </div>
            </div>
            @empty
            <h1>No Caousel Found</h1>
            @endforelse

        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
</div>
{{--
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        @for ($i = 0; $i < count($carousels); $i++)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}"
@if ($i == 0)class="active" aria-current="true" @endif aria-label="Slide {{$i+1}}"></button>
@endfor

</div>
<div class="carousel-inner">
    @forelse ($carousels as $carousel)
    <div class="carousel-item 
                @if ($loop->first) active @endif
                
                ">
        <img src="{{ asset('storage/carousels/' . $carousel->image) }}" class="d-block w-100" alt="...">
        <div class="container">
            <div class="carousel-caption">
                <h1>{{ $carousel->name }}</h1>
                <p>{{ $loop->iteration }}</p>
                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
        </div>
    </div>

    @empty
    <h1>No Caousel Found</h1>
    @endforelse

</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div> --}}
