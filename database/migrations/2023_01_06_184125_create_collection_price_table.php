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
        Schema::create('collection_price', function (Blueprint $table) {
            $table->id();
            $table->uuid('managerId');
            $table->unsignedBigInteger('wasteType');
            $table->float('basePrice');
            $table->boolean('isActive');

            $table->timestamps();

            $table->foreign('managerId')->references('id')->on('users');
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
        Schema::dropIfExists('collection_price');
    }
};
