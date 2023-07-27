<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosDeReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_de_reservas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('destino')->nullable();
            $table->string('hotel')->nullable();
            $table->integer('noches')->nullable();
            $table->string('fecha_entrada')->nullable();
            $table->string('fecha_salida')->nullable();
            $table->integer('habitaciones')->nullable();
            $table->string('tipo habitacion')->nullable();
            $table->integer('adultos')->nullable();
            $table->integer('menores')->nullable();

            $table->string('plan')->nullable();

            $table->unsignedBigInteger('worksheet_id')->unsigned();
            $table->foreign('worksheet_id')->unsigned()
                  ->references('id')->unsigned()
                  ->on('worksheet')->unsigned()
                  ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_de_reserva');
    }
}
