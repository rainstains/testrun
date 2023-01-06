<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collectors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('code'); //need check
            $table->uuid('userId');
            $table->uuid('managerId'); //need check
            $table->string('name'); //need check
            $table->integer('userPhone'); //need check
            $table->string('address'); //need check

            $table->timestamps();

            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('managerId')->references('id')->on('users');
            $table->foreign('userPhone')->references('phone')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collectors');
    }
};
