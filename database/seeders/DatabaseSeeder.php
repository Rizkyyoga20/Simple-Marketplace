<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Pesanan;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\user;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'id_user'  => '2932893289382932',
            'name_user'  => 'Muhammad Salah',
            'email'  => 'salah21@gmail.com',
            'status_akses'  => 'Admin Utama',
            'no_telepon' => '082121222434',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jln. Macan Puti III, Lrg. Kucing hitam, No. 210',
            'password'  => hash::make('salah21')
        ]);

        User::create([
            'id_user'  => '2932893289384232',
            'name_user'  => 'Sedo Male',
            'email'  => 'mane212.com',
            'status_akses'  => 'Kasir',
            'no_telepon' => '087721432134',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jln. Tegal binangun I, Lrg. Alir, No. 21',
            'password'  => hash::make('mane212')
        ]);

        User::create([
            'id_user'  => '9932893289382921',
            'name_user'   => 'Sinta Amanda',
            'email'  => 'sinta12@gmail.com',
            'status_akses'  => 'Kasir',
            'no_telepon' => '081234432434',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Jln. Mangga harum, Lrg. Jambu air merah, No. 33',
            'password'  => hash::make('sinta12')
        ]);

        User::create([
            'id_user'  => '8882893221382911',
            'name_user'   => 'Ahmad Firmansa',
            'email'  => 'firman211@gmail.com',
            'status_akses'  => 'Pelanggan',
            'no_telepon' => '081121222232',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jln. Air terjun I, Lrg. Alran II, No. 2111',
            'password'  => hash::make('firman211')
        ]);

        User::create([
            'id_user'  => '2112893289382932',
            'name_user'   => 'Rianto Abi Yaso',
            'email'  => 'abi11@gmail.com',
            'status_akses'  => 'Pelanggan',
            'no_telepon' => '081121224343',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jln. Sayangan I, Lrg. Jambu menyet, No. 1121',
            'password'  => hash::make('abi11')
        ]);





        Kategori::create([
            'nama_kategori' => 'Sepatu Olaraga',
            'keterangan_kategori' => 'Sepatu olaraga model tarbaru seperti futsal, bola tangkis, voli, sepak bola dan masih banyak lagi, dengan harga kisaran 100.000 sd 1.500.000.',
        ]);

        Kategori::create([
            'nama_kategori' => 'Kaos Olaraga',
            'keterangan_kategori' => 'full set Kaos atau sataun kaos olaraga seperti futsal, bola tangkis, voli, sepak bola dan masih banyak lagi, dengan harga kisaran 50.000 sd 2.000.000.',
        ]);

        Kategori::create([
            'nama_kategori' => 'Alat Olaraga',
            'keterangan_kategori' => 'Alat olaraga seperti bola futsal, bola tangkis, bola voli, jaring gawang futsal dan net jaring bola tangkis, dengan harga kisaran 50.000 sd 2.000.000.',
        ]);

        Kategori::create([
            'nama_kategori' => 'Alat Musik',
            'keterangan_kategori' => 'Alat musik seperti gitar, biola, dram, piyano dan masih banyak lagi, dengan harga kisaran 200.000 sd 2.000.000.',
        ]);





        Produk::create([
            'id_produk' => 'P001',
            'nama_produk' => 'Sepatu futsal Puma',
            'harga_produk' => '450.000',
            'kategori_produk' => 'Sepatu Olaraga',
            'status_produk' => 'Diskon',
            'keterangan_produk' => 'Sapetu futsal Puma tersedia warna hitam, kuning, dan biru dengan dengan potongan diskon 50%.',
            'gambar' => 'produk/puma_puma_sepatu_futsal_puma_future_4-3_netfit_it_men-s_futsal_-105686_02-__puma_factory_outlet_full01_f4b6mlly.jpg',
            'stok' => '100',

        ]);

        Produk::create([
            'id_produk' => 'P002',
            'nama_produk' => 'Sepatu jogging Adidas',
            'harga_produk' => '320.000',
            'kategori_produk' => 'Sepatu Olaraga',
            'status_produk' => 'Ada',
            'keterangan_produk' => 'Sepatu jogging Adidas tersedia warna hitam, abu-abu, dan biru.',
            'gambar' => 'produk/batch-upload_e0b8a540-bc02-4372-9c4f-b473986ad38d.jpg',
            'stok' => '50',
        ]);

        Produk::create([
            'id_produk' => 'P003',
            'nama_produk' => 'Kaos custom futsal',
            'harga_produk' => '300.000',
            'kategori_produk' => 'Kaos Olaraga',
            'status_produk' => 'Diskon',
            'keterangan_produk' => 'kaos custom futsal dengan berbagai macam warna bisa reques, dengan potongan diskon 10%.',
            'gambar' => 'produk/jersey-futsal-motif-sarang-lebah-hijau-hitam-6668246.jpg',
            'stok' => '100',
        ]);

        Produk::create([
            'id_produk' => 'P004',
            'nama_produk' => 'Gitar Akustik Yamaha',
            'harga_produk' => '800.000',
            'kategori_produk' => 'Alat Musik',
            'status_produk' => 'Diskon',
            'keterangan_produk' => 'Gitar akustik dengan merek yamaha ori full set satu stel dapat tali gitar catangan satu set tali 1 - 6, dengan potongan diskon 10%.',
            'gambar' => 'produk/4.jpg',
            'stok' => '10',
        ]);



        Pesanan::create([
            'id_pesanan' => 'PJ001',
            'id_pelanggan' => '2112893289382932',
            'id_kasir' => '2932893289384232',
            'nama_produk' => 'Kaos custom futsal',
            'harga_produk' => '300.000',
            'catatan_produk' => 'Diskon | Kaos Olaraga',
            'status_pesanan' => 'Lunas',
        ]);


        Pesanan::create([
            'id_pesanan' => 'PJ002',
            'id_pelanggan' => '2112893289382932',
            'id_kasir' => '2932893289384232',
            'nama_produk' => 'Sepatu futsal Puma',
            'harga_produk' => '450.000',
            'catatan_produk' => 'Diskon | Sepatu Olaraga',
            'status_pesanan' => 'Lunas',
        ]);

        Pesanan::create([
            'id_pesanan' => 'PJ003',
            'id_pelanggan' => '2112893289382932',
            'id_kasir' => '2932893289384232',
            'nama_produk' => 'Sepatu jogging Adidas',
            'harga_produk' => '320.000',
            'catatan_produk' => 'Ada | Sepatu Olaraga',
            'status_pesanan' => 'Dibatalkan',
        ]);

        Pesanan::create([
            'id_pesanan' => 'PJ004',
            'id_pelanggan' => '8882893221382911',
            'id_kasir' => '2932893289384232',
            'nama_produk' => 'Sepatu jogging Adidas',
            'harga_produk' => '320.000',
            'catatan_produk' => 'Ada | Sepatu Olaraga',
            'status_pesanan' => 'Lunas',
        ]);


        Pesanan::create([
            'id_pesanan' => 'PJ005',
            'id_pelanggan' => '8882893221382911',
            'id_kasir' => '9932893289382921',
            'nama_produk' => 'Sepatu jogging Adidas',
            'harga_produk' => '320.000',
            'catatan_produk' => 'Ada | Sepatu Olaraga',
            'status_pesanan' => 'Dikeranjang',
        ]);

        Pesanan::create([
            'id_pesanan' => 'PJ006',
            'id_pelanggan' => '8882893221382911',
            'id_kasir' => '9932893289382921',
            'nama_produk' => 'Gitar Akustik Yamaha',
            'harga_produk' => '800.000',
            'catatan_produk' => 'Diskon | Alat Musik',
            'status_pesanan' => 'Dikeranjang',
        ]);        


    }
}
