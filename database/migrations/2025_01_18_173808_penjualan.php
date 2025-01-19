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
        Schema::create('penjualan_m', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pembeli');
            $table->string('alamat_pembeli');
            $table->string('nomer_pembeli');
            $table->string('no_invoice');
            $table->foreignId('produk_id');
            $table->string('harga_jual');
            $table->string('jumlah');
            $table->string('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan_m');
    }
};
