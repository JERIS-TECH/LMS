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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('thumbnail_path', 255);
            $table->string('preview_path', 255);
            $table->float('price', 16, 2);
            $table->string('author', 255);
            $table->string('language', 255);
            $table->text('description');
            $table->text('course_contents');
            $table->text('what_to_learn')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
