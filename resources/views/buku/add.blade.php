@extends('layouts.master')

@section('content')
  <div class="mt-5">
    @include('layouts.errors-message')
    <form action="{{ url('buku/save') }}" method="POST">
      @csrf
      <input type="hidden" name="id" value="">
      <input type="hidden" name="is_update" value="{{ $is_update }}">
      Judul : <input type="text" name="Judul" value="{{ old('Judul') }}" size="50" maxlength="100">
      <br><br>Pengarang : <input type="text" name="Pengarang" value="{{ old('Pengarang') }}" size="50"
        maxlength="150">
      <br><br>Kategori :
      <select name="Kategori">
        @foreach ($optkategori as $key => $value)
          @if (old('Kategori') == $key)
            <option value="{{ $key }}" selected>{{ $value }}</option>
          @else
            <option value="{{ $key }}">{{ $value }}</option>
          @endif
        @endforeach
      </select>
      <br><br><button type="submit" class="btn btn-sm btn-outline-primary" name="btn_simpan">Simpan</button>
    </form>
    <br><a href="{{ url('buku') }}">Kembali</a>
  </div>
@endsection
