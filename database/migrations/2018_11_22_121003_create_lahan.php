<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lahan', function (Blueprint $table) {
            $table->increments('id_lahan');
            $table->string('pemiliklahan',255);
            $table->string('lokasilahan',255);
            $table->integer('luas');
            $table->integer('harga');
            $table->date('tgl_sewa');
            $table->date('tgl_berakhirsewa');
            $table->string('status_sewa',255);
            $table->text('denah');
            $table->integer('user_id') -> unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lahan');
    }
}
