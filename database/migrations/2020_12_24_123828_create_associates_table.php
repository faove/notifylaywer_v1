<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associates', function (Blueprint $table) {
            $table->increments('id');  // Asociado 
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('dni')->nullable()->unsigned(); //DNI
            $table->integer('passport')->nullable()->unsigned(); //PASAPORTE
            $table->string('tution')->nullable(); //COLEGIARUTA
            $table->string('nationality')->nullable();//NACIONALIDAD
            $table->integer('age')->nullable()->unsigned(); //EDAD
            $table->integer('gender')->length(1)->nullable()->unsigned(); //GENERO
            $table->string('address')->nullable(); //DIRECION DOMICILIO
            $table->string('country')->nullable(); //PAIS
            $table->date('date_birth')->nullable(); //FECHA DE NACIMIEMNTO
            $table->date('date_begin')->nullable(); //FECHA DE ENTRADA A LA CONSULTORIO JURIDICO
            $table->string('email')->nullable(); 
            $table->string('social_networks')->nullable();
            $table->string('telegram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('phone_landline')->nullable(); //TELEFONO FIJO
            $table->string('phone_number',45)->nullable(); //CELULAR
            $table->integer('areas_serve_id')->nullable()->unsigned(); //AREAS ATENDIDAS     CIVIL / MERCANTIL / PENAL / ETC.
            $table->integer('area_specialties_id')->nullable()->unsigned(); //ESPECIALIDADES POR AREAS   DIVORCIOS / FAMILIARES / ETC.
            $table->integer('city_id')->nullable()->unsigned();
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
        Schema::dropIfExists('associates');
    }
}
