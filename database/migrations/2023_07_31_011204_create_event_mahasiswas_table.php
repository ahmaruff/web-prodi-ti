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
        Schema::create('event_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug');
            $table->date('tanggal');
            $table->string('poster')->nullable();
            $table->text('content_html')->nullable();
            $table->mediumText('content_json')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_mahasiswas');
    }
};
