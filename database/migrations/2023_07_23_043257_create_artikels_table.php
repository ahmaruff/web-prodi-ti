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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('author')->default('admin');
            $table->string('image')->nullable();
            $table->enum('category',['pengumuman', 'berita', 'kemahasiswaan'])->default('berita');
            $table->text('content_html')->nullable();
            $table->json('content_json')->nullable();
            $table->boolean('is_published')->default(false);
            $table->date('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
