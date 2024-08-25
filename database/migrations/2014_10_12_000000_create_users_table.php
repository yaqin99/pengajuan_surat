<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('berkas_id');
            $table->string('name');
            $table->string('username');
            $table->string('alamat')->nullable();
            $table->string('noHp')->nullable();
            $table->string('rt')->nullable();;
            $table->string('rw')->nullable();;
            $table->string('nik')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('pekerjaan')->nullable();
            $table->string('agama')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
