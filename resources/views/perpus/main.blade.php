@extends('layouts.master')

@section('content')
  <div class="mt-5">
    <h1>Aplikasi Perpustakaan FTIK USM</h1>
    <h3>Pilihan menu:</h3>
    <ol>
      <li><a href="{{ url('buku') }}">Kelola data buku</a> </li>
      <li><a href="{{ url('anggota') }}">Kelola data anggota</a> </li>
      <li><a href="{{ url('pinjam') }}">Transaksi Pinjam</a> </li>
    </ol>
    <a class="btn btn-outline-danger" href="{{ url('logout') }}">Logout</a>
  </div>
@endsection
