<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nohp');
            $table->string('ttl');
            $table->string('jeniskelamin');
            $table->string('dateappointment')->default('tidak dipilih');
            $table->string('jenisappointment')->default('tidak dipilih');
            $table->string('keterangan')->default('tidak mencantumkan keterangan');
            $table->string('status')->default('belum di follow up');
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
        Schema::dropIfExists('pasiens');
    }
}
