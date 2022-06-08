@extends('app')
@section('content')
{{-- START - SLIDER --}}
<div class="carousel-content">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <h5>Nazwa łodzi</h5>
            <img class="d-block w-100" src="images/rent-a-yacht.png" alt="Slide">
        </div>
        @foreach($products as $product)
            <div class="carousel-item">
                <h5>{{$product->name}}</h5>
                <img class="d-block w-100" src="images/{{$product->img}}" alt="Slide">
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
{{-- END - SLIDER --}}
        <!-- Section-->
        @if(Auth::check())
        <div class="text-center mt-4">
            <h2 class="mt-4">LISTA DOSTĘPNYCH ŁODZI</h2>
        </div>
        <section>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="images/{{$product->img}}"  width="450" height="200" alt="error" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder"><a class="show" href="{{ route('showproduct', $product->id) }}">{{ $product->name }}</a></h5>
                                    <h6>Dostępna ilość: {{$product->count}}</h6>
                                    <h6>Cena wynajmu: {{$product->price}} zł</h6>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <form method="POST" action="{{ route('addcart', ['id' => $product->id]) }}">
                                @csrf
                                <input name="id" value="{{ $product->id }}" type="hidden"/>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-outline-dark mt-auto mb-2">Wynajmij</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif
     @endsection