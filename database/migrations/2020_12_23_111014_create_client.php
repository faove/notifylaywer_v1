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
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('dni');
            $table->string('email');
            $table->string('passport');
            $table->string('nationality');
            $table->string('country');
            $table->string('date_birth');
            $table->string('age');
            $table->string('social_networks');
            $table->string('telegram');
            $table->string('facebook');
            $table->string('phone_landline');
            $table->string('mobile');
            $table->string('home_address');
            $table->string('dates_keys');
            $table->string('registry');
    
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
        Schema::dropIfExists('client');
    }
}
