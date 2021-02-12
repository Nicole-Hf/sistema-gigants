<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('carnet_identidad',15)->unique();
            $table->string('nombre',60);
            $table->string('apellidos',60);
            $table->unsignedInteger('telefono',false)->nullable();
            $table->string('direccion',100)->nullable();
            $table->string('email',60)->unique();
            $table->string('tipo',15);
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
        Schema::dropIfExists('personas');
    }
}
