<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // $table->increments('id');
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->string('password');
            // $table->datetime('last_login')->nullable();
            // $table->datetime('expiration_date')->nullable();
            // $table->string('image')->nullable();
            // $table->string('api_token', 100)->nullable();
            // $table->integer('current_branch_office_id')->unsigned()->nullable();
            // $table->integer('default_branch_office_id')->unsigned()->nullable();
            // $table->rememberToken();
            // $table->timestamps();
            
            // $table->foreign('current_branch_office_id')->references('id')->on('branch_offices');
            // $table->foreign('default_branch_office_id')->references('id')->on('branch_offices');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
