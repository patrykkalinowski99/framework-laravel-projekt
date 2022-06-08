@extends('app')
@section('content')
        <!-- Page content-->
        <div class="content-padding">
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <a class="btn btn-outline-dark mt-auto" href="{{ route('index') }}">Powrót</a>
                    <div class="card mb-4">
                        <img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." />
                        <div class="card-body">
                            <h2 class="card-title">{{$product->name}}</h2>
                            <p class="card-subtitle">{{$product->price}}PLN</p>
                            <p class="card-text">{{$product->description}}</p>
                            <a class="btn btn-outline-dark mt-auto" href="#!">Wybierz</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-outline-dark mt-auto" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
     @endsection