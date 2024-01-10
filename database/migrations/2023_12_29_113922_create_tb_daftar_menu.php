<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_daftar_menu', function (Blueprint $table) {
            $table->increments('menu_id');
            $table->string('foto');
            $table->string('nama_menu');
            $table->string('keterangan');
            $table->string('jenis');
            $table->string('kategori');
            $table->integer('harga');
            $table->string('stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_daftar_menu');
    }
};
