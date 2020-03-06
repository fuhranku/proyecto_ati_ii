<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDwellingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dwelling', function (Blueprint $table) {
            //
            $table->bigIncrements('id_dwelling');
            $table->integer('continentID');
            $table->integer('countryID');
            $table->integer('cityID');
            $table->integer('zoneID');
            $table->integer('dwellingState');
            $table->integer('propertyType');
            $table->integer('rooms');
            $table->integer('bathrooms');
            $table->integer('parking');
            $table->string("extraDetails");
            $table->string("serviceTransportDetails");
            $table->string("exactLocation");
            $table->integer('price');

            //Contact Data
            $table->string("contactName");
            $table->string("contactLastName");
            $table->string("contactEmail");
            $table->string("contactMobileNumber");
            $table->string("contactLandlineNumber");
            $table->string("contactLandlineNumberEXT");
            $table->string("contactDays");

            $table->dateTime('contactHourFrom');
            $table->dateTime('contactHourTo');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dwelling');
    }
}
