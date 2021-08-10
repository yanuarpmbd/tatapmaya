<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('nama_pemohon');
            $table->string('nama_perusahaan');
            $table->string('alamat_usaha');
            $table->string('email');
            $table->string('phone', 15);
            $table->string('sektor');
            $table->string('kbli');
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
        Schema::dropIfExists('data_pendaftarans');
    }
}
