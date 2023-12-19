@extends('layouts.master')

@section('content')
  <div class="mt-5">
    <a href="{{ url('buku/add') }}">Tambah Buku</a>
    <a class="btn btn-sm btn-secondary float-end" href="{{ url('perpus') }}">Kembali</a>
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Pengarang</th>
          <th>Kategori</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($query as $row)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $row['Judul'] }}</td>
            <td>{{ $row['Pengarang'] }}</td>
            <td>{{ $optkategori[$row['Kategori']] }}</td>
            <td>
              <a href="{{ url('buku/edit/' . $row['ID_Buku']) }}">Edit</a>
              <a href="{{ url('buku/delete/' . $row['ID_Buku']) }}" onclick="return confirm('Yakin?')">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $query->links('vendor.pagination.mypage') }}
  </div>
@endsection
