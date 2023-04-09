<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_tokos', function (Blueprint $table) {
            $table->id();
            $table->string('nama_toko');
            $table->string('produk');
            $table->string('harga');
            $table->text('link_toko_online');
            $table->string('nomor_whatsapp');
            $table->text('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_tokos');
    }
};
