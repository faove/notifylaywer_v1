<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJudicialEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judicial_entities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(); //Nombre de judicial_entities
            $table->string('address')->nullable(); //judicial_entities
            $table->string('phone')->nullable(); //judicial_entities phone
            $table->text('observations')->nullable(); //Datos de ubicacion referencias del sitio
            $table->json('georeference')->nullable(); //json [{lat:12.34353,long:-64.8976}]
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
        Schema::dropIfExists('judicial_entities');
    }
}
