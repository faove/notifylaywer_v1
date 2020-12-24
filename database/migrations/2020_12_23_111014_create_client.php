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
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('dni')->nullable();
            $table->string('gender', 1)->nullable();
            $table->date('birth_date')->nullable();
            $table->date('death_date')->nullable();
            $table->boolean('confirm_dead')->default(0);
            $table->string('email')->nullable();
            $table->string('passport')->nullable();
            $table->string('nationality')->nullable();
            $table->string('country')->nullable();
            $table->string('date_birth')->nullable();
            $table->string('age')->nullable();
            $table->string('social_networks')->nullable();
            $table->string('telegram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('phone_landline')->nullable();
            $table->string('phone_number',45)->nullable();
            $table->string('address');
            $table->string('dates_keys');
            $table->string('registry');
            
    
            $table->timestamps();


            // $table->increments('id');
            // $table->string('first_name', 50)->nullable();
            // $table->string('second_name', 50)->nullable();
            // $table->string('surname', 50)->nullable();
            // $table->string('second_surname', 50)->nullable();
            // $table->integer('type_identification_id')->nullable()->unsigned();
            // $table->string('identification', 50)->index()->nullable();
            // $table->date('birth_date')->nullable();
            // $table->date('death_date')->nullable();
            // $table->boolean('confirm_dead')->default(0);
            // $table->string('address')->nullable();
            // $table->string('gender', 1)->nullable();
            // $table->integer('city_id')->nullable()->unsigned();
            // $table->string('cellphone', 45)->nullable();
            // $table->string('email')->nullable();
            // $table->boolean('is_dummy')->default(0)->index();
            // $table->timestamps();
            
            // $table->foreign('type_identification_id')->references('id')->on('properties');
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
