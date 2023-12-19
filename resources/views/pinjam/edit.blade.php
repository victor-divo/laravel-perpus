@extends('layouts.master')

@section('content')
  <div class="mt-5">
    <form action="{{ url('pinjam/save') }}" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{ $query->ID_Pinjam }}">
      <input type="hidden" name="is_update" value="{{ $is_update }}">
      Anggota : <select name="anggota">
        @foreach ($listAnggota as $anggota)
          @if ($query->ID_Anggota == $anggota->ID_Anggota)
            <option value="{{ $anggota->ID_Anggota }}" selected>{{ $anggota->nim }} - {{ $anggota->nama }}</option>
          @else
            <option value="{{ $anggota->ID_Anggota }}">{{ $anggota->nim }} - {{ $anggota->nama }}</option>
          @endif
        @endforeach
      </select>
      <br><br> Buku : <select name="buku">
        @foreach ($listBuku as $buku)
          @if ($query->ID_Buku == $buku->ID_Buku)
            <option value="{{ $buku->ID_Buku }}" selected>{{ $buku->Judul }} - {{ $buku->Pengarang }}</option>
          @else
            <option value="{{ $buku->ID_Buku }}">{{ $buku->Judul }} - {{ $buku->Pengarang }}</option>
          @endif
        @endforeach
      </select>
      <br><br>Tanggal Pinjam : <input type="date" name="tgl_pinjam" value="{{ $query->tgl_pinjam }}">
      <br><br>Tanggal Kembali : <input type="date" name="tgl_kembali" value="{{ $query->tgl_kembali }}">
      <br><br><button class="btn btn-sm btn-outline-primary" type="submit" name="btn_simpan">Simpan</button>
    </form>
    <br><a href="{{ url('pinjam') }}">Kembali</a>
  </div>
@endsection
