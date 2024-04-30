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
        Schema::create('hasil_response', function (Blueprint $table) {
            $table->string('nama');
            $table->enum('jenis_kelamin',[1,2]);
            $table->string('email')->unique();
            $table->string('nama_jalan');
            $table->integer('angka_kurang');
            $table->integer('angka_lebih');
            $table->enum('profesi',['A','B','C','D','E']);
            $table->json('plain_json');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_response');
    }
};
