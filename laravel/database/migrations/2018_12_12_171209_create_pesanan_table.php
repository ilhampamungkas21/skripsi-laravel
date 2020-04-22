<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_pemesan')->unsigned();
          $table->foreign('id_pemesan')->references('id')->on('users');


          $table->string('nama_barang');
          $table->integer('id_barang')->unsigned();
          $table->foreign('id_barang')->references('id')->on('barang');
          $table->string('nama_penerima');
          $table->string('telepon_pemesan');
          $table->text('alamat_penerima');
          $table->integer('harga_total')->unsigned();
          $table->string('status')->default('belum dibayar');
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
        Schema::dropIfExists('pesanan');
    }
}
