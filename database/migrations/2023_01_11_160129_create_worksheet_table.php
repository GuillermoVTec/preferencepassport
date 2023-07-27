<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worksheet', function (Blueprint $table) {
            $table->id();
            $table->string('calificacion');
            $table->string('booking')->nullable();
            $table->string('ocupaciont')->nullable();
            $table->string('nombrec')->nullable();
            $table->string('edadc')->nullable();
            $table->string('ocupácionc')->nullable();
            $table->string('estadocivilc')->nullable();
            $table->string('ingresos')->nullable();
            $table->string('tarjetas')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('cp')->nullable();
            $table->string('plataforma')->nullable();
            $table->string('localizador')->nullable();
            $table->string('moneda')->nullable();

            $table->unsignedBigInteger('leads_id')->unsigned();
            $table->foreign('leads_id')->unsigned()
                  ->references('id')->unsigned()
                  ->on('leads')->unsigned()
                  ->onDelete('cascade');
                  



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
        Schema::dropIfExists('worksheet');
    }
}
