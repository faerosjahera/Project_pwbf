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
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->id('id_pengiriman');
            $table->foreignId('id_transaksi');
            $table->string('alamat_kirim');
            $table->boolean('stts_kirim');
            $table->enum('metode_bayar',['ewallet','cod']);
            $table->timestamps();

            $table->foreign('id_transaksi')->references('id_transaksi')->on('pembayaran');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengiriman');
    }
};
