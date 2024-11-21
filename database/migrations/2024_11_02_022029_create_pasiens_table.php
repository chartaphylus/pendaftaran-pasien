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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_ktp')->unique();
            $table->text('alamat');
            $table->string('TTL'); // Tempat Tanggal Lahir
            $table->integer('umur');
            $table->string('no_hp');
            $table->foreignId('dokter_id')->constrained('dokters')->onDelete('cascade'); // Relasi ke dokter
            $table->string('spesialis');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
