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
            $table->increments('id'); // category_id
            $table->integer('category_id')->unsigned()->nullable(); //1= Consultoría / 2 = Asesoría
            $table->integer('areas_id')->unsigned()->nullable(); //Area del Servicio Laboral / Mercantil / etc.
            $table->integer('client_id')->nullable()->unsigned();
            $table->integer('associate_id')->unsigned()->nullable();
            $table->text('name_service')->nullable(); // DESCRIPTION THE SERVICIO.
            $table->decimal('gross_amount', 16, 2)->nullable();
            $table->decimal('rate_variable', 16, 2)->nullable(); //TARIFA ACORDADA POR ACTO ASISTIDO / ASESORADO.
            $table->decimal('rate_fixed', 16, 2)->nullable(); //TARIFA FIJA.
            // $table->decimal('rate_process', 16, 2)->nullable(); //TARIFA / COSTO POR ASISTENCIA / ASESORIA POR ACTOS
            $table->string('phone_service')->nullable(); // NRO. TELEFONO POR DONDE SE PRESTO SERVICIO.
            $table->string('chat_service')->nullable(); // CHAT POR DONDE SE PRESTO SERVICIO.
            $table->string('chat_service_name')->nullable(); // NOMBRE CHAT POR DONDE SE PRESTO SERVICIO.
            $table->string('fee_service')->nullable(); //CUOTA SERVICIO
            $table->dateTime('date_service')->nullable(); //FECHAS DEL SERVICIO
            $table->dateTime('date_aplication')->nullable();  // FECHA DE SOLICITUD
            $table->dateTime('date_performance')->nullable(); // FECHA DE PRESTACION
            $table->timestamps();
   
            //Servicios se asocia con Asociados N -> 1
            $table->foreign('associate_id')->references('id')->on('associates');
            //Servicios se asocia con Products N -> 1
            // $table->foreign('product_id')->references('id')->on('products');
            //Servicios se asocia con Clientes N -> 1
            //$table->foreign('client_id')->references('id')->on('client');
            //Tipos de Servicios hace match con table type_services
            //$table->foreign('type_services_id')->references('id')->on('type_services');
            //Tipos de Servicios hace match con table type_services
            //$table->foreign('mode_services_id')->references('id')->on('mode_services');
            //Tipos de Servicios hace match con table type_services
            //$table->foreign('areas_id')->references('id')->on('areas');
            
            // $table->integer('type_services_id')->unsigned()->nullable(); //1= Consultoría / 2 = Asesoría
            // $table->integer('mode_services_id')->unsigned()->nullable(); //Telefónica / Teleconferencia / Presencial / Domiciliaria / Asistencia Legal POR ACTOS
           

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
