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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id')->unsigned();
            $table->string('name', 255);
            $table->string('email', 255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('phone');
            $table->string('password', 255);
            $table->rememberToken();
            $table->string('profile_img_path', 255)->nullable();
            $table->text('address')->nullable();
            $table->string('fb_id_link', 255)->nullable();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles');
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email', 255)->primary();
            $table->string('token', 255);
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};