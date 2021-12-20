<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasets', function (Blueprint $table) {
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
            $table->enum('status_beasiswa', ['layak', 'tidak-layak']);
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
        Schema::dropIfExists('datasets');
    }
}
