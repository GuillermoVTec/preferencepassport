<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsDistribuidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads_distribuidors', function (Blueprint $table) {
            $table->id();
            $table->integer('id_lead');
            $table->string('nombre');
            $table->integer('edad');
            $table->string('estadocivil');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('correo');
            $table->string('pais');
            $table->date('created_at2');
            $table->string('id_vendedor_name');
            $table->string('user_name');

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
        Schema::dropIfExists('leads_distribuidors');
    }
}
