<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number'); //Numero de Factura 
            $table->integer('client_id')->unsigned()->nullable(); // id del Client
            $table->date('date')->nullable(); //Fecha de Facturacion
            $table->date('date_reception')->nullable(); //Fecha de recepcion de la factura
            $table->decimal('gross_amount', 16, 2)->nullable(); //Monto Bruto
            $table->decimal('discount', 16, 2)->nullable(); //Descuento
            $table->decimal('taxs', 16, 2)->nullable(); //IVA
            $table->decimal('net_amount', 16, 2)->nullable(); //Monto a Pagar
            $table->string('authorization', 20)->nullable(); //Quien autoriza
            $table->string('bar_code', 20)->nullable(); //Codigo de Barra
            $table->jsonb('data')->nullable(); // Array json que se puede usar en el futuro
            $table->timestamps();
            $table->softDeletes(); 

            $table->unique(array('number', 'client_id', 'net_amount', 'date'), "unique_invoice");
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
        Schema::dropIfExists('invoices');
    }
}
