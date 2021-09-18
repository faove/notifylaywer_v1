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
            $table->decimal('lat', 10, 8)->nullable()->comment('Latitud');
            $table->decimal('long', 11, 8)->nullable()->comment('Longitud');
            $table->string('telephone_1', 25)->nullable(); //judicial_entities phone
            $table->string('telephone_2', 25)->nullable();
            $table->string('email')->nullable();
            $table->text('observations')->nullable(); //Datos de ubicacion referencias del sitio
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
