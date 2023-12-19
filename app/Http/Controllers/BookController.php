<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    var $data;

    public function __construct()
    {
        $this->data['opt_kategori'] = [
            '' => '- Pilih salah satu -',
            'novel' => 'Novel',
            'komik' => 'Komik',
            'teori' => 'Teori',
            'kamus' => 'Kamus',
            'program' => 'Pemrograman',
        ];
    }

    public function index()
    {
        $list_buku = Book::paginate(5);
        $data = [
            'query' => $list_buku,
            'optkategori' => $this->data['opt_kategori']
        ];

        return view('buku.list', $data);
    }

    public function add_new()
    {
        $data = [
            'is_update' => 0,
            'optkategori' => $this->data['opt_kategori']
        ];
        return view('buku.add', $data);
    }

    public function save(Book $buku, Request $request)
    {
        $validated = $request->validate([
            'Judul' => 'required',
            'Pengarang' => 'required',
            'Kategori' => 'required',
        ]);

        $data['Judul'] = $request->Judul;
        $data['Pengarang'] = $request->Pengarang;
        $data['Kategori'] = $request->Kategori;
        $is_update = $request->is_update;

        if ($is_update == 0) {
            $buku = Book::create($data);
            if ($buku) {
                return redirect('buku');
            }
        } else {
            $id = $request->id;
            $buku = Book::find($id)->update($data);
            if ($buku) {
                return redirect('buku');
            }
        }
    }

    public function edit($id)
    {
        $data = [
            'query' => Book::find($id),
            'is_update' => 1,
            'optkategori' => $this->data['opt_kategori']
        ];
        return view('buku.edit', $data);
    }

    public function delete($id)
    {
        $isDeleted = Book::destroy($id);
        if ($isDeleted) {
            return redirect('buku');
        }
    }
}
