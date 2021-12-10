<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $fillable = [
            'id_produk',
            'nama_produk',
            'harga_produk',
            'kategori_produk',
            'status_produk',
            'keterangan_produk',
            'gambar',
            'stok',
    ];

}
