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
        Schema::create('tb_list_order', function (Blueprint $table) {
            $table->increments('list_order_id');
            $table->string('kode_order');
            $table->string('waktu_order');
            $table->integer('menu');
            $table->string('jumlah');
            $table->string('catatan');
            $table->string('status');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_list_order');
    }
};
