<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id'); // 
            $table->string('type_service')->nullable(); //1= Consultoría / 2 = Asesoría
            $table->string('mode_service')->nullable(); //Telefónica / Teleconferencia / Presencial / Domiciliaria / Asistencia Legal POR ACTOS
            $table->string('area_service')->nullable(); // Laboral / Mercantil / etc.
            $table->integer('associate_id')->nullable()->unsigned();
            $table->integer('client_id')->nullable()->unsigned();
            $table->integer('rate_variable')->nullable(); //TARIFA ACORDADA POR ACTO ASISTIDO / ASESORADO.
            $table->integer('rate_fixed')->nullable(); //TARIFA FIJA.
            $table->integer('rate_process')->nullable(); //TARIFA / COSTO POR ASISTENCIA / ASESORIA POR ACTOS
            $table->string('phone_service')->nullable(); // NRO. TELEFONO POR DONDE SE PRESTO SERVICIO.
            $table->string('chat_service')->nullable(); // CHAT POR DONDE SE PRESTO SERVICIO.
            $table->string('chat_service_name')->nullable(); // NOMBRE CHAT POR DONDE SE PRESTO SERVICIO.
            $table->string('fee_service')->nullable(); //CUOTA SERVICIO
            $table->date('date_service')->nullable(); //FECHAS DEL SERVICIO
            $table->date('date_aplication')->nullable();  // FECHA DE SOLICITUD
            $table->date('date_pay')->nullable();  // FECHA PAGO
            $table->date('date_performance')->nullable(); // FECHA DE PRESTACION
            $table->timestamps();
   
            //Servicios se asocia con Asociados N -> 1
            $table->foreign('associate_id')->references('id')->on('associate');
            //Servicios se asocia con Clientes N -> 1
            $table->foreign('client_id')->references('id')->on('client');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
