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
        Schema::table('users', function (Blueprint $table) {
            // --- BAGIAN TAMBAHAN DARI TUGAS ---
            $table->foreignId('id_poli')->nullable()->constrained('poli')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Menghapus foreign key terlebih dahulu, baru hapus kolomnya
            $table->dropForeign(['id_poli']);
            $table->dropColumn('id_poli');
        });
    }
};