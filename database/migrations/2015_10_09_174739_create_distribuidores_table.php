<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistribuidoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribuidores', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('razonsocial');
            $table->string('representantelegal');
            $table->string('rfc');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('pais');
            $table->string('cp');
            $table->string('correo');
            $table->string('telefono');
            $table->date('date');
            $table->string('matriculaid');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distribuidores');
    }
}
