<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipmentlines', function (Blueprint $table) {
            $table->id();
            $table->string('ShipmentId')->nullable();
            $table->string('Line')->nullable();
            $table->string('Level')->nullable();
            $table->string('SKUId')->nullable();
            $table->string('BizSKU')->nullable();
            $table->string('CustomerSKU')->nullable();
            $table->string('UPC')->nullable();
            $table->string('UPCDescription')->nullable();
            $table->string('Category')->nullable();
            $table->string('UnitOfMeasure')->nullable();
            $table->string('LineOwner')->nullable();
            $table->string('LineStockStatus')->nullable();
            $table->string('QtyOrdered')->nullable();
            $table->string('QtyRequired')->nullable();
            $table->string('QtyAllocated')->nullable();
            $table->string('QtyTasked')->nullable();
            $table->string('QtyPicked')->nullable();
            $table->string('QtyShipped')->nullable();
            $table->string('QtyDelivered')->nullable();
            $table->string('QtyDueOut')->nullable();
            $table->string('CatchWeight')->nullable();
            $table->string('Price')->nullable();
            $table->string('Discount')->nullable();
            $table->string('TaxRate')->nullable();
            $table->string('SOLineId')->nullable();
            $table->string('ReturnReason')->nullable();
            $table->string('QC')->nullable();
            $table->string('Shortage')->nullable();
            $table->string('Ignore')->nullable();
            $table->string('Variance')->nullable();
            $table->string('BOInd')->nullable();
            $table->string('ConsignmentId')->nullable();
            $table->string('PickGroupId')->nullable();
            $table->string('SiteId')->nullable();
            $table->string('Warehouse')->nullable();
            $table->string('BizId')->nullable();
            $table->string('OwnerId')->nullable();
            $table->string('StockStatus')->nullable();
            $table->dateTime('DateShipment')->nullable();
            $table->string('AttachmentInd')->nullable();
            $table->string('SpecialConditionInd')->nullable();
            $table->string('Stage')->nullable();
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
        Schema::dropIfExists('shipmentlines');
    }
}
