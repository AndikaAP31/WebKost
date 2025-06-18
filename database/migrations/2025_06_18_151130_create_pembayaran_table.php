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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->foreignId('id_user')->nullable()->constrained('user', 'user_id');
            $table->foreignId('id_booking')->nullable()->constrained('booking', 'id_booking');
            $table->foreignId('id_kamar')->nullable()->constrained('kamar', 'id_kamar');
            $table->dateTime('tanggal_pembayaran')->nullable();
            $table->enum('status_pembayaran', ['Belum bayar', 'Gagal', 'Lunas'])->nullable();
            $table->double('jumlah_pembayaran')->nullable();
            $table->string('bukti_pembayaran')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
