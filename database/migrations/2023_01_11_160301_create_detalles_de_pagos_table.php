<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesDePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_de_pagos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('costo_total')->nullable();
            $table->string('pakeo_agente')->nullable();
            $table->string('activacion')->nullable();
            $table->integer('reporte_fee')->nullable();
            $table->integer('pago_inicial')->nullable();
            $table->integer('pendiente_de_pago')->nullable();
            $table->date('fecha_limite')->nullable();
            $table->date('fecha_de_pago')->nullable();
            $table->integer('cantidad')->nullable();
            $table->string('concepto')->nullable();
            $table->string('forma_de_pago')->nullable();
            $table->string('status_de_pago')->nullable();
            $table->string('pago_asignado')->nullable();
            $table->integer('num_aprovacion')->nullable();
            $table->string('nota')->nullable();
            $table->string('comprovante')->nullable();


            
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
        Schema::dropIfExists('detalles_de_pagos');
    }
}
