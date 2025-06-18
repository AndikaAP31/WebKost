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
        Schema::create('kamar', function (Blueprint $table) {
            $table->id('id_kamar');
            $table->unsignedBigInteger('id_tipe_kamar')->nullable();
            $table->enum('status', ['Kosong', 'Dipesan', 'Terisi'])->nullable();
            $table->string('no_kamar', 50)->nullable();
            $table->binary('foto_kamar1')->nullable();
            $table->binary('foto_kamar2')->nullable();
            $table->binary('foto_kamar3')->nullable();
            $table->text('deskripsi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamar');
    }
};
