<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('title', 255)->unique();
            $table->string('slug');
            $table->string('tags', 100)->nullable();
            $table->string('image')->nullable();
            $table->longText('content');
            $table->enum('status', ['draft', 'published', 'deleted'])->default('draft');
            $table->unsignedBigInteger('views')->default(0); 
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
