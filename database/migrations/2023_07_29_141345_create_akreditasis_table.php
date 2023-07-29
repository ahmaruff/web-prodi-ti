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
        Schema::create('akreditasis', function (Blueprint $table) {
            $table->id();
            $table->string('prodi')->default('Teknik Informatika');
            $table->string('no_sk');
            $table->date('tgl_terbit');
            $table->date('tgl_kadaluarsa');
            $table->enum('status',['masih berlaku', 'kadaluarsa']);
            $table->enum('peringkat', ['A', 'B', 'C', 'Unggul', 'Baik Sekali', 'Baik', 'Tidak Terakreditasi']);
            $table->string('dokumen_sk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akreditasis');
    }
};
