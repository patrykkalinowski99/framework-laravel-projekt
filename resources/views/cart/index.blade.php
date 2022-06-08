@extends('app')
@section('content')
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Numer produktu</th>
        <th scope="col">Nazwa</th>
        <th scope="col">Cena</th>
        <th scope="col">Akcje</th>
      </tr>
    </thead>    
    @php ($i = 1)
  @foreach ($cart as $item)
  <tbody>
      @foreach ($item->product as $prod)
      <tr>
        <th scope="row">{{ $i }}</th>
        <td>{{$prod->name}}</td>
        <td>{{$prod->price}}</td>
        <td><a class="btn btn-secondary"href="/destroy/{{$item->id}}">X</a></td>
        @php ($i++)
      </tr>
      @endforeach   
    </tbody> 
  @endforeach
  <form action="{{ route('storeorder') }}">
    <button type="sumbit">Zamowienie</button>  
</form>
  </table>
@endsection