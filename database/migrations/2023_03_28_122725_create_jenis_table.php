<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_surat');
            $table->string('ktp')->nullable();
            $table->string('ktp2')->nullable();
            $table->string('ktp_pelapor')->nullable();
            $table->string('ktp_saksi1')->nullable();
            $table->string('ktp_saksi2')->nullable();
            $table->string('kk')->nullable();
            $table->string('kk2')->nullable();
            $table->string('surat_nikah')->nullable();
            $table->string('surat_nikah2')->nullable();
            $table->string('surat_nikah3')->nullable();
            $table->string('surat_keterangan')->nullable();
            $table->string('no_pelapor')->nullable();
            $table->text('keterangan')->nullable();

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
        Schema::dropIfExists('jenis');
    }
}
