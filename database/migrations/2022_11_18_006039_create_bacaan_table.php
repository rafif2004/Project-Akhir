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
        Schema::create('bacaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('judul_buku');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('ringkasan');
            $table->date('tanggal_baca');
            $table->integer('poin_baca')->default('0');
            $table->bigInteger('id_siswa')->unsigned();
            $table->foreign('id_siswa')->references('id')->on('siswa')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->bigInteger('id_kelas')->unsigned();
            $table->foreign('id_kelas')->references('id')->on('kelas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('bacaan');
    }
};
