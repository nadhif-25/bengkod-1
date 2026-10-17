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
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            
            // --- BAGIAN TAMBAHAN DARI TUGAS ---
            $table->string('nama_obat');
            $table->string('kemasan', 35)->nullable();
            $table->integer('harga');
            
            // --- BAWAAN LARAVEL ---
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obat');
    }
};