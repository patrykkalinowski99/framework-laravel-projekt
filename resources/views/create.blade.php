@extends('app')
@section('content')
        <!-- Section-->
        <section class="py-5">
            @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                <h4>
                    {{ session()->get('message') }}
                </h4>
            </div>
        @endif
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <form action="{{ route('storeproduct') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label for="exampleInputEmail1">Nazwa produktu</label>
                              <input name="name" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Opis</label>
                              <textarea class="form-control" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Obraz</label>
                                <input type="file" class="form-control form-control-sm" name="image" accept="image/jpg, image/jpeg,
                                image/png">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input name="price" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Quantity</label>
                                <input name="count" class="form-control">
                              </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </section>
     @endsection