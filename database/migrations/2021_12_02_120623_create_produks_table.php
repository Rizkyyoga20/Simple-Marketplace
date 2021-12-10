<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('id_produk')->unique();
            $table->string('nama_produk', 500)->unique();
            $table->string('harga_produk', 50);
            $table->string('kategori_produk', 100);
            $table->enum('status_produk', ['Diskon', 'Ada', 'Kosong']);
            $table->string('keterangan_produk', 1000);
            $table->string('gambar', 1000);
            $table->string('stok', 1000);
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
        Schema::dropIfExists('produks');
    }
}
