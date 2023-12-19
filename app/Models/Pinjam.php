<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

    protected $table = 'pinjam';
    protected $primaryKey = 'ID_Pinjam';
    public $timestamps = false;
    protected $fillable = ['ID_Anggota', 'ID_Buku', 'tgl_pinjam', 'tgl_kembali'];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'ID_Anggota');
    }

    public function buku()
    {
        return $this->belongsTo(Book::class, 'ID_Buku');
    }
}
