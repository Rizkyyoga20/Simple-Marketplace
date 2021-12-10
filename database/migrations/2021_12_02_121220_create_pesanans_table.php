<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('id_pesanan')->unique();
            $table->string('id_pelanggan');
            $table->string('id_kasir');
            $table->string('nama_produk', 500);
            $table->string('harga_produk', 50);
            $table->string('catatan_produk', 1000);
            $table->enum('status_pesanan', ['Dikeranjang', 'Dibatalkan', 'Lunas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
}
