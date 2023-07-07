<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
           
            $table->string('nombre');
            $table->integer('edad');
            $table->string('estadocivil');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('correo');
            $table->string('pais');
            $table->date('created_at2');
            $table->int('id_vendedor');
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->unsignedBigInteger('statuses_id')->unsigned();
            $table->foreign('statuses_id')->unsigned()
                  ->references('id')->unsigned()
                  ->on('statuses')->unsigned()
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
        Schema::dropIfExists('leads');
    }
}
