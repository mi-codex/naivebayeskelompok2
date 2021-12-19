<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mhs');
            $table->string('penanggung');
            $table->string('penghasilan');
            $table->string('rumah');
            $table->string('jenis_kelamin');
            $table->string('pekerjaan');
            $table->string('jumlah_tanggungan');
            $table->string('usia');
            $table->string('nilai_un');
            $table->softDeletes();
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
        Schema::dropIfExists('mahasiswas');
    }
}
