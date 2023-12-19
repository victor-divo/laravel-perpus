@extends('layouts.master')
@section('title', 'Aplikasi Perpustakaan')
@section('content')
  <div class="mt-5">
    <h1>Silahkan Login</h1>
    <form class="form-control" action="{{ url('login') }}" method="POST">
      @csrf
      <label for="username">Username: </label>
      <input class="form-control" type="text" name="username" value="{{ old('username') }}" size="20">
      <label for="password">Password: </label>
      <input class="form-control" type="password" name="password" value="" size="20">
      <br>
      <button class="btn btn-sm btn-primary" type="submit">Login</button>
    </form>
  </div>
@endsection
