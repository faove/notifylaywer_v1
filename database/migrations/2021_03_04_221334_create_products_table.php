<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('services_id')->unsigned()->nullable(); // tipo de Category
            $table->integer('product_id')->nullable()->unsigned();
            $table->string('lexido')->nullable(); //LEXICODE
            $table->text('name_products')->nullable(); // Descripcion del Entregables
            $table->dateTime('date_start')->nullable(); //FECHAS DEL SERVICIO
            $table->dateTime('date_end')->nullable(); //FECHAS DEL SERVICIO
            $table->dateTime('date_pay')->nullable();  // FECHA PAGO
            $table->integer('quota')->nullable(); // Cuota en porcentaje
            $table->decimal('amount', 16, 2)->nullable();
            $table->string('invoice_number')->nullable(); // Numero de Factura
            $table->string('method_payment')->nullable(); // Forma de Pago
            $table->string('payment_reference')->nullable(); // Referencia de Pago
            $table->integer('deadlines')->nullable(); // Plazos en Dias 
            $table->string('status')->default(0)->index(); //1=entregado / 0=no entregado
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('services_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
