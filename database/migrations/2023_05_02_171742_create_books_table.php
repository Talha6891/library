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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('ISBN')->unique();
            $table->string('publisher');
            $table->date('publication_date')->nullable();
            $table->enum('genre',['fiction','Non Fiction']);
            $table->enum('availability',['available','unavailable']);
            $table->string('description')->nullable();
            $table->string('cover_image')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
