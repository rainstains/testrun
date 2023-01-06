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
        Schema::create('balance_history', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('collectionId');
            $table->string('invoice');
            $table->float('debet');
            $table->float('kredit');
            $table->float('balance');
            $table->dateTime('created_at');
            $table->integer('month');

            $table->foreign('collectionId')->references('id')->on('collection_history');
            $table->foreign('invoice')->references('invoice')->on('collection_history');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balance_history');
    }
};
