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
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nidn')->nullable();
            $table->string('email')->nullable();
            $table->string('jabatan_struktural')->nulllable()->defaut('dosen');
            $table->string('jabatan_akademik')->nullable()->default('asisten ahli');
            $table->string('image')->nullable();
            $table->string('homebase')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
