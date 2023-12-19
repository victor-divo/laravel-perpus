@extends('layouts.master')

@section('content')
  <div class="mt-5">
    <a href="{{ url('pinjam/add') }}">Tambah Peminjaman</a>
    <a class="btn btn-sm btn-secondary float-end" href="{{ url('perpus') }}">Kembali</a>
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Anggota</th>
          <th>Buku</th>
          <th>Tanggal Pinjam</th>
          <th>Tanggal Kembali</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($query as $row)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $row->anggota->nama }}({{ $row->anggota->nim }})</td>
            <td>{{ $row->buku->Judul }} ({{ $row->buku->Pengarang }})</td>
            <td>{{ $row['tgl_pinjam'] }}</td>
            <td>{{ $row['tgl_kembali'] }}</td>
            <td>
              <a href="{{ url('pinjam/edit/' . $row['ID_Anggota']) }}">Edit</a>
              <a href="{{ url('pinjam/delete/' . $row['ID_Anggota']) }}" onclick="return confirm('Yakin?')">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $query->links('vendor.pagination.mypage') }}
  </div>
@endsection
