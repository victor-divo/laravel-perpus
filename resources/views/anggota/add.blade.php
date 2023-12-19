@extends('layouts.master')

@section('content')
  <div class="mt-5">
    @include('layouts.errors-message')
    <form action="{{ url('anggota/save') }}" method="POST">
      @csrf
      <input type="hidden" name="id" value="">
      <input type="hidden" name="is_update" value="{{ $is_update }}">
      NIM : <input type="text" name="nim" value="{{ old('nim') }}" size="50" maxlength="100">
      <br><br>Nama : <input type="text" name="nama" value="{{ old('nama') }}" size="50" maxlength="150">
      <br><br>Progdi :
      <select name="progdi">
        @foreach ($optprogdi as $key => $value)
          @if (old('progdi') == $key)
            <option value="{{ $key }}" selected>{{ $value }}</option>
          @else
            <option value="{{ $key }}">{{ $value }}</option>
          @endif
        @endforeach
      </select>
      <br><br><button type="submit" class="btn btn-sm btn-outline-primary" name="btn_simpan">Simpan</button>
    </form>
    <br><a href="{{ url('anggota') }}">Kembali</a>
  </div>
@endsection
