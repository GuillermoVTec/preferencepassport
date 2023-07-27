<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormaDePagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forma_de_pago', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('banco')->nullable();
            $table->string('titular')->nullable();
            $table->string('afiliacion')->nullable();
            $table->string('16_digitos')->nullable();
            $table->string('vigencia')->nullable();
            $table->string('CVV')->nullable();
            $table->string('nota')->nullable();
            $table->string('imagen')->nullable();
            $table->unsignedBigInteger('detalles_de_pagos_id')->unsigned();
            $table->foreign('detalles_de_pagos_id')->unsigned()
                  ->references('id')->unsigned()
                  ->on('detalles_de_pagos')->unsigned()
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
        Schema::dropIfExists('forma_de_pago');
    }
}
