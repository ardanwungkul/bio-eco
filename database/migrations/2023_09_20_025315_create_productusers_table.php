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
        Schema::create('product_users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gambar');
            $table->string('harga');
            $table->text('deskripsi');
            $table->bigInteger('toko_id')->unsigned();
            $table->foreign('toko_id')->references('id')->on('tokos')->onUpdate('CASCADE')->onDelete('cascade')->change();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_users');
    }
};
