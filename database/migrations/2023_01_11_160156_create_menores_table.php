<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('datos_de_reservas_id')->unsigned(); 
            $table->foreign('datos_de_reservas_id')->unsigned()
                  ->references('id')->unsigned()
                  ->on('datos_de_reservas')->unsigned()
                  ->onDelete('cascade');
            $table->Integer('edad');
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
        Schema::dropIfExists('menores');
    }
}
