<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    var $data;

    public function __construct()
    {
        $this->data['opt_progdi'] = [
            '' => '- Pilih salah satu -',
            'TI' => 'Teknik Informatika',
            'SI' => 'Sistem Informasi',
            'IK' => 'Ilmu Komunikasi',
            'PA' => 'Pariwisata',
            'MA' => 'Manajemen',
        ];
    }

    public function index()
    {
        $list_anggota = Anggota::paginate(5);
        $data = [
            'query' => $list_anggota,
            'optprogdi' => $this->data['opt_progdi']
        ];

        return view('anggota.list', $data);
    }

    public function add_new()
    {
        $data = [
            'is_update' => 0,
            'optprogdi' => $this->data['opt_progdi']
        ];
        return view('anggota.add', $data);
    }

    public function save(Anggota $anggota, Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'progdi' => 'required',
        ]);

        $data['nim'] = $request->nim;
        $data['nama'] = $request->nama;
        $data['progdi'] = $request->progdi;
        $is_update = $request->is_update;

        if ($is_update == 0) {
            $anggota = Anggota::create($data);
            if ($anggota) {
                return redirect('anggota');
            }
        } else {
            $id = $request->id;
            $anggota = Anggota::find($id)->update($data);
            if ($anggota) {
                return redirect('anggota');
            }
        }
    }

    public function edit($id)
    {
        $data = [
            'query' => Anggota::find($id),
            'is_update' => 1,
            'optprogdi' => $this->data['opt_progdi']
        ];
        return view('anggota.edit', $data);
    }

    public function delete($id)
    {
        $isDeleted = Anggota::destroy($id);
        if ($isDeleted) {
            return redirect('anggota');
        }
    }
}
