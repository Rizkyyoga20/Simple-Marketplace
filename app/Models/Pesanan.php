<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
            'id_pesanan',
            'id_pelanggan',
            'id_kasir',
            'nama_produk',
            'harga_produk',
            'catatan_produk',
            'status_pesanan'
    ];

}
