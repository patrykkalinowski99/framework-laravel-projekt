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
            <th scope="col">EMAIL</th>
            <th scope="col">DATA DOLACZENIA</th>
          </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>  
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection