@extends('app')
@section('content')
<div class="form-padding">
  <!-- Section-->
  <section class="py-5 text-center">
    <form action="{{ route('updateprofile') }}" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label>Login</label>
        <input name="name" class="form-control" id="exampleFormControlInput1" value="{{ $user->name }}">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input name="email" class="form-control" id="exampleFormControlInput1" value="{{ $user->email }}">
      </div>
      <br>
      <button class="btn btn-outline-dark text-uppercase" type="submit">Zmień</button>
    </form>
  </section>
</div>
@endsection