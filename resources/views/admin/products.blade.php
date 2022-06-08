@extends('app')
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
            <h4>
                {{ session()->get('message') }}
            </h4>
        </div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NAZWA</th>
            <th scope="col">OPIS</th>
            <th scope="col">CENA</th>
            <th scope="col">OPCJE</th>
          </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
          <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}PLN</td>
            <td><a href="{{ route('destroyproduct', ['id' => $product->id]) }}">Usun</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection