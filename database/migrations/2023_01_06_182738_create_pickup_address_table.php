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
        Schema::create('pickup_address', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('userId');
            //need check
            $table->integer('referenceId');
            $table->integer('provinceId');
            $table->integer('districtId');
            $table->integer('subdistrictId');
            $table->integer('urbanId');
            $table->string('provinceName');
            $table->string('districtName');
            $table->string('districtType');
            $table->string('subdistrictName');
            $table->string('urbanName');
            $table->string('addressName');
            $table->string('address');
            $table->string('postalCode');
            //need check

            $table->timestamps();

            $table->foreign('userId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pickup_address');
    }
};
