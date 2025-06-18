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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->foreignId('id_penghuni')->nullable()->constrained('penghuni', 'id_penghuni');
            $table->foreignId('id_kamar')->nullable()->constrained('kamar', 'id_kamar');
            $table->string('judul_pengaduan')->nullable();
            $table->text('isi_pengaduan')->nullable();
            $table->enum('status', ['Menunggu', 'Diproses', 'Selesai'])->nullable();
            $table->string('foto_pengaduan')->nullable();
            $table->dateTime('tanggal_pengaduan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
