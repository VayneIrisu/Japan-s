<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKepalaTanaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepalatanaman', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',255);
            $table->integer('nik');
            $table->string('alamat',255);
            $table->string('email',255);
            $table->text('image');
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
        Schema::dropIfExists('kepalatanaman');
    }
}
