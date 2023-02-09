<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $fillable = [
        'nama_peminjam', 'barang_pinjam', 'tgl_pinjam',
        ];        
    use HasFactory;
}
