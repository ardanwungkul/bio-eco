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
        Schema::create('tokos', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('url')->nullable();
            $table->string('bio')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('template')->default(1);
            $table->string('gambar')->nullable();
            $table->boolean('default_product')->default(1);
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('cascade')->change();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokos');
    }
};
