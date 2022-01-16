<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratmasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratmasuk', function (Blueprint $table) {
            $table->bigIncrements('idsurat');
            $table->string('no_surat')->unique();
            $table->string('pengirim');
            $table->text('perihal');
            $table->string('klasifikasi');
            $table->string('status_surat');
            $table->string('tujuan_disposisi');
            $table->text('keterangan_disposisi');
            $table->text('keterangan_tindaklanjut');
            $table->string('file_surat');
            $table->timestamps();

            // $table->string('klasifikasi_kode')->unsigned();
            // $table->foreign('klasifikasi_kode')->references('kode')->on('klasifikasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suratmasuk');
    }
}
