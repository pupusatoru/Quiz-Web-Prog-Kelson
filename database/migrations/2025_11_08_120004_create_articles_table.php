<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('excerpt')->nullable();
            $table->longText('content');
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('writer_id')->constrained('writers')->cascadeOnDelete();
            $table->date('published_at')->nullable();
            $table->timestamps();
            $table->unsignedInteger('views')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
