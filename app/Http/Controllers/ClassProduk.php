<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pesanan;
use App\Models\Produk;
use PDF;

class ClassProduk extends Controller
{
   public function Home()
    {
        $toko = "Script Sports";
        $title = "Home";

        $produks = Produk::all();

        return view('home', compact(['toko','title','produks']));
    }

   public function Fqi()
    {
        $toko = "Script Sports";
        $title = "FQI";
        return view('fqi', compact(['toko','title']));
    }

   public function PesananPelanggan()
    {
        $toko = "Script Sports";
        $title = "Pesanan Pelanggan";
        $status = "Pelanggan";
        
        $pelanggans = User::all()->where('status_akses', $status);
        $pesanans = Pesanan::all();
        $produks = Produk::all();

        return view('pesanan-pelanggan', compact(['toko','title','pelanggans','produks','pesanans']));
    }

   public function Grafik()
    {
        $toko = "Script Sports";
        $title = "Grafik";
        $produks = Produk::all();

        return view('grafik', compact(['toko','title','produks']));
    }

    public function print_pesanan_pelanggan($id_user)
    {

        $toko = "Script Sports";
        $title = "List Pesanan Pelanggan";

        $pelanggans = User::all()->where('id_user', $id_user);
        $pesanans = Pesanan::all();        

        $data = PDF::loadview('print-pesanan-pelanggan', compact(['toko','title','pesanans','pelanggans']))->setPaper('a4', 'landscape');
        return $data->stream();

    }

    public function print_pesanan($id_pesanan)
    {

        $toko = "Script Sports";
        $title = "Info Pesanan Pelanggan";

        $pes = Pesanan::all()->where('id_pesanan', $id_pesanan);
        $pelanggans = User::all();        


        $data = PDF::loadview('print-pesanan', compact(['toko','title','pes','pelanggans']))->setPaper('a4', 'landscape');
        return $data->stream();

    }



}
