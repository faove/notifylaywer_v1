<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_products', function (Blueprint $table) {
            $table->id();
            $table->integer('areas_id')->unsigned()->nullable(); // tipo de Category
            $table->string('lexido')->nullable(); //LEXICODE
            $table->text('name')->nullable(); //Descripcion del Entregables
            $table->integer('deadlines')->nullable(); // Plazos en Dias 
            $table->integer('status')->default(0)->index(); //1=entregado / 0=no entregado
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
        Schema::dropIfExists('type_products');
    }
}
