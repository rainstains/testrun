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
        Schema::create('collection_history', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('pickupAdddresId'); //need check
            $table->uuid('collectorId'); //need check
            $table->uuid('vendorId'); //need check
            $table->uuid('managerId'); //need check
            $table->uuid('pickupLocation'); //need check
            $table->string('invoice')->unique();//need check
            $table->unsignedBigInteger('wasteType'); //need check
            $table->float('weight');
            $table->float('basePrice');
            $table->timestamps();
            $table->integer('month');

            $table->foreign('pickupAdddresId')->references('id')->on('pickup_address');
            $table->foreign('collectorId')->references('id')->on('collectors');
            $table->foreign('vendorId')->references('id')->on('users');
            $table->foreign('managerId')->references('id')->on('users');
            $table->foreign('pickupLocation')->references('id')->on('pickup_address');//
            $table->foreign('wasteType')->references('id')->on('collection_type');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collection_history');
    }
};
