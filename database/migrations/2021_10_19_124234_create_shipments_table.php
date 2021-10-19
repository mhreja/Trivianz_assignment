<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('ShipmentId')->nullable();
            $table->string('BizId')->nullable();
            $table->string('BizSalesOrder')->nullable();
            $table->string('Status')->nullable();
            $table->string('OrderType')->nullable();
            $table->string('OrderClass')->nullable();
            $table->string('CustomerId')->nullable();
            $table->string('BizCustomerId')->nullable();
            $table->string('CustomerGroup')->nullable();
            $table->string('CustomerName')->nullable();
            $table->string('ShippingAddressId')->nullable();
            $table->string('InvoiceAddressId')->nullable();
            $table->string('Site')->nullable();
            $table->string('Warehouse')->nullable();
            $table->string('OwnerId')->nullable();
            $table->string('StockStatus')->nullable();
            $table->string('SalesOrder')->nullable();
            $table->string('Prime')->nullable();
            $table->string('PriorityAllocation')->nullable();
            $table->string('PriorityDespatch')->nullable();
            $table->string('CustomerOrder')->nullable();
            $table->string('CustomerRef')->nullable();
            $table->string('ConsignmentId')->nullable();
            $table->string('PickGroupId')->nullable();
            $table->string('ASNNumber')->nullable();
            $table->string('DNoteNumber')->nullable();
            $table->string('InvoiceNumber')->nullable();
            $table->string('ManifestNumber')->nullable();
            $table->string('BOL')->nullable();
            $table->string('MasterBOL')->nullable();
            $table->string('POD')->nullable();
            $table->string('ShippingMethod')->nullable();
            $table->string('Region')->nullable();
            $table->string('DC')->nullable();
            $table->string('Store')->nullable();
            $table->string('CarrierId')->nullable();
            $table->string('CarrierScac')->nullable();
            $table->string('CarrierTrackingNumber')->nullable();
            $table->string('CarrierTrackingNumberURL')->nullable();
            $table->string('ReturnTrackingNumber')->nullable();
            $table->string('ReturnTrackingNumberURL')->nullable();
            $table->string('Route')->nullable();
            $table->string('LoadId')->nullable();
            $table->string('LoadSequence')->nullable();
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
        Schema::dropIfExists('shipments');
    }
}
