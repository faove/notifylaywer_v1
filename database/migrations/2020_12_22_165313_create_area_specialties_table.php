<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaSpecialtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas_specialties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('areas_id')->nullable();
            $table->string('name', 255)->nullable();
            $table->boolean('is_active')->default(1)->index();
            $table->timestamps();

            //$table->unique(array('category', 'code'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas_specialties');
    }
}
