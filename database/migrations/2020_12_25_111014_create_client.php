<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id');  // Clientes  Index 
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('dni')->nullable()->unsigned(); //DNI
            $table->integer('passport')->nullable(); //PASAPORTE
            $table->string('nationality')->nullable();//NACIONALIDAD
            $table->integer('age')->nullable(); //EDAD
            $table->string('gender', 1)->nullable(); //GENERO
            $table->string('address')->nullable(); //DIRECION DOMICILIO
            $table->string('country')->nullable(); //PAIS
            $table->date('date_birth')->nullable(); //FECHA DE NACIMIEMNTO
            $table->date('date_death')->nullable();
            $table->boolean('confirm_dead')->default(0);
            $table->string('email')->nullable(); 
            $table->string('social_networks')->nullable();
            $table->string('telegram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('telephone')->nullable(); //TELEFONO FIJO
            $table->string('phone_number',45)->nullable();
            $table->integer('city_id')->nullable()->unsigned();
            $table->json('dates_keys')->nullable(); //JSON que muestra las fechas claves 
            $table->string('registry')->nullable(); //REGISTRO
            $table->timestamps();

            // client with service 1 -> N
            //$table->foreign('dni')->references('client_id')->on('services')->onDelete('cascade');
            // $table->foreign('city_id')->references('id')->on('cities');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
