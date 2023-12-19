<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'mst_buku';
    protected $primaryKey = 'ID_Buku';
    public $timestamps = false;
    protected $fillable = ['Judul', 'Pengarang', 'Kategori'];
}
