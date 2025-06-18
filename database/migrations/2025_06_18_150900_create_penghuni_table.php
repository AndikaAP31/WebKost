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
        Schema::create('penghuni', function (Blueprint $table) {
            $table->id('id_penghuni');
            $table->foreignId('id_user')->nullable()->constrained('user', 'user_id')->restrictOnDelete()->restrictOnUpdate();
            $table->enum('status_penghuni', ['Aktif', 'Non-aktif'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penghuni');
    }
};
