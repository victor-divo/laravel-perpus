@extends('layouts.master')

@section('content')
  <div class="mt-5">
    <a href="{{ url('anggota/add') }}">Tambah Anggota</a>
    <a class="btn btn-sm btn-secondary float-end" href="{{ url('perpus') }}">Kembali</a>
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Progdi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($query as $row)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $row['nim'] }}</td>
            <td>{{ $row['nama'] }}</td>
            <td>{{ $optprogdi[$row['progdi']] }}</td>
            <td>
              <a href="{{ url('anggota/edit/' . $row['ID_Anggota']) }}">Edit</a>
              <a href="{{ url('anggota/delete/' . $row['ID_Anggota']) }}" onclick="return confirm('Yakin?')">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $query->links('vendor.pagination.mypage') }}
  </div>
@endsection
