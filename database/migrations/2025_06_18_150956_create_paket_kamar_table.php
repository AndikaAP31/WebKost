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
         Schema::create('paket_kamar', function (Blueprint $table) {
            $table->id('id_paket_kamar');
            $table->foreignId('id_tipe_kamar')->nullable()->constrained('tipe_kamar', 'id_tipe_kamar');
            $table->enum('jenis_paket', ['Mingguan', 'Bulanan', 'Tahunan'])->nullable();
            $table->enum('kapasitas', ['1', '2'])->nullable();
            $table->double('harga')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_kamar');
    }
};
