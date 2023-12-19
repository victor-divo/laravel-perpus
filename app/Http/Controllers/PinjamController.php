<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Book;
use App\Models\Pinjam;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function index()
    {
        $list_pinjam = Pinjam::with('anggota', 'buku')->paginate(5);
        $data = [
            'query' => $list_pinjam,
        ];

        return view('pinjam.list', $data);
    }

    public function add_new()
    {
        $data = [
            'is_update' => 0,
            'listAnggota' => Anggota::all(),
            'listBuku' => Book::all()
        ];
        return view('pinjam.add', $data);
    }

    public function save(Pinjam $pinjam, Request $request)
    {
        $validated = $request->validate([
            'anggota' => 'required',
            'buku' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);

        $data['ID_Anggota'] = $request->anggota;
        $data['ID_Buku'] = $request->buku;
        $data['tgl_pinjam'] = $request->tgl_pinjam;
        $data['tgl_kembali'] = $request->tgl_kembali;
        $is_update = $request->is_update;

        if ($is_update == 0) {
            $pinjam = Pinjam::create($data);
            if ($pinjam) {
                return redirect('pinjam');
            }
        } else {
            $id = $request->id;
            $pinjam = Pinjam::find($id)->update($data);
            if ($pinjam) {
                return redirect('pinjam');
            }
        }
    }

    public function edit($id)
    {
        $data = [
            'query' => Pinjam::find($id),
            'is_update' => 1,
            'listAnggota' => Anggota::all(),
            'listBuku' => Book::all()
        ];
        return view('pinjam.edit', $data);
    }

    public function delete($id)
    {
        $isDeleted = Pinjam::destroy($id);
        if ($isDeleted) {
            return redirect('pinjam');
        }
    }
}
