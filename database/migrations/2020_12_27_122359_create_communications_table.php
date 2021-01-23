<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_communications_id')->unsigned()->nullable(); // tipo de Comunicacion 1 = NOTIFICACION / 3= EMPLAZAMIENTO    /  5 = CITACOPN / 7 = REQUERIMIENTO.
            $table->integer('associate_id')->unsigned()->nullable(); // id del Asociado -> RESPONSABLE
            $table->integer('cases_id')->unsigned()->nullable(); // id del Caso REFERENCIA A LA ID. COLECCIÓN CASOS DEL DESPACHO BAJO GESTION 
            $table->integer('judicial_entities_id')->unsigned()->nullable(); // ENTIDAD JUDICIAL = PARTIDO + TRIBUNAL  DONDE SE CELEBRA EL JUICIO
            $table->boolean('status')->default(0)->index(); //TRUE=CERRADA / FALSE=ABIERTA default close
            $table->string('proceedings')->nullable(); //NRO/CODIGO EXPEDIENTE  emitido POR EL TRIBUNAL  A LA DEMANDA ADMITIDA.
            $table->string('demantant')->nullable(); //DEMANDANTE, COLECCIÓN DE  PERSONAS NATURALES / JURIDICA QUE INTERVIENEN EN UN PROCESO JUDICIAL CON UN ROL DETERMINADO, ENTRE ESTOS: DEMANDANTE, DEMANDADO, TESTIGO, PERITO, ETC.
            $table->string('defendant')->nullable(); //DEMANDADO
            $table->string('process_lexic')->nullable(); //PROCESS LEXIC
            $table->date('date_registry')->nullable(); //DATE TIME DEL MOMENTO DE REGISTRARLO / CARGARLO  EN SISTEMA.
            $table->date('date_received')->nullable(); //DATE TIME DE RECEPCION DE LA COMUNICACIÓN.
            $table->date('date_end')->nullable();  //FECHA TERMINO DEL PLAZO DE EMPLAZAMIENTO DADO  = FECHA RECEPCION+ 1 + DIAS HABILES COMPUTADOS POR CALENDARIO DE DIAS FERIADOS.
            $table->integer('day_end')->default(0); //ENTERO PARAINDICAR  DIAS HABILES DADOS EN EL PLAZO: 3 / 5 / 10 / 20 / 0 (DEFAULT VALUE).
            $table->time('hours_performance')->nullable();  //HORA HABIL HORARIO DADO POR TRIBUNAL.
            $table->integer('reason_id')->nullable()->unsigned();  // Motivo, Objeto de la comunicacion
            $table->text('notes')->nullable(); //ACCESO  A LA LISTA DE POST / NOTAS INTERNAS ASOCIADAS AL  CASO Y QUE SON DE USO INTERNO AL DESPACHO.
            $table->timestamps();

            //Servicios se asocia con Asociados N -> 1
            // $table->foreign('associate_id')->references('id')->on('associates');
            // $table->foreign('cases_id')->references('id')->on('cases');
            // $table->foreign('reason_id')->references('id')->on('reason');
            // $table->foreign('judicial_entities_id')->references('id')->on('judicial_entities');
            // $table->foreign('type_communications_id')->references('id')->on('type_communications');
        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('communications');
    }
}
