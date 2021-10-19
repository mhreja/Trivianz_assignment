<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentaddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipmentaddresses', function (Blueprint $table) {
            $table->id();
            $table->string('Table')->nullable();
            $table->string('ShipmentId')->nullable();
            $table->string('AddressId')->nullable();
            $table->string('Name')->nullable();
            $table->string('Line1')->nullable();
            $table->string('Line2')->nullable();
            $table->string('Line3')->nullable();
            $table->string('City')->nullable();
            $table->string('State')->nullable();
            $table->string('Postcode')->nullable();
            $table->string('Country')->nullable();
            $table->string('Region')->nullable();
            $table->string('Latitude')->nullable();
            $table->string('Longitude')->nullable();
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
        Schema::dropIfExists('shipmentaddresses');
    }
}
