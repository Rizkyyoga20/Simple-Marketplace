<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('id_user', 16)->unique();
            $table->string('email')->unique();
            $table->string('no_telepon')->unique();
            $table->string('name_user');
            $table->string('alamat', 1000);
            $table->string('password', 1000);
            $table->enum('status_akses', ['Admin Utama', 'Kasir', 'Pelanggan']);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
