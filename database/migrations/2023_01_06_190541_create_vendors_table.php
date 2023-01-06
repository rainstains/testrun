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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->uuid('vendorId');
            $table->uuid('managerId');
            $table->string('vendorName');
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
            $table->timestamps();

            $table->foreign('managerId')->references('id')->on('users');
            $table->foreign('vendorId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
};
