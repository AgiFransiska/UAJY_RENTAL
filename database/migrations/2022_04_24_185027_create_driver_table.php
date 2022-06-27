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
        Schema::create('driver', function (Blueprint $table) {
            $table->id();
            $table->string('nama_driver');
            $table->string('alamat_driver');
            $table->date('tgl_lahir_driver');
            $table->string('jenis_kelamin_driver');
            $table->string('no_telp_driver');
            $table->string('email_driver');
            $table->string('password_driver');
            $table->string('status_tersedia_driver');
            $table->string('bahasa');
            $table->string('file_pdf');
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
        Schema::dropIfExists('driver');
    }
};
