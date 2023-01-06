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
        Schema::create('balance', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('userId');
            $table->integer('userPhone');
            $table->float('amount');
            $table->timestamps();

            $table->foreign('userId')->references('id')->on('users');
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
        Schema::dropIfExists('balance');
    }
};
