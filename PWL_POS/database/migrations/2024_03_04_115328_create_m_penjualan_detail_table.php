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
        Schema::create('m_penjualan_detail', function (Blueprint $table) {
            $table->bigIncrements('detail_id');
            $table->unsignedBigInteger('penjualan_id');
            $table->unsignedBigInteger('barang_id');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('barang_id')->references('barang_id')->on('m_barang')->onDelete('cascade');
            $table->foreign('penjualan_id')->references('penjualan_id')->on('m_penjualan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_penjualan_detail');
    }
};