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
        Schema::create('tb_order', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('kode_order');
            $table->string('pelanggan');
            $table->integer('meja');
            $table->string('pelayan');
            $table->string('status');
            $table->string('waktu_order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations. 
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_order');
    }
};
