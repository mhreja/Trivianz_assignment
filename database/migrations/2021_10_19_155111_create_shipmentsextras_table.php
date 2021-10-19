<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsextrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipmentsextras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shipment_id')->nullable()->constrained('shipments')->onDelete('cascade');
            $table->string('DropSlot')->nullable();
            $table->string('PackStation')->nullable();
            $table->string('ShippingLane')->nullable();
            $table->string('ReturnReason')->nullable();
            $table->string('QC')->nullable();
            $table->string('Lines')->nullable();
            $table->string('LineQty')->nullable();
            $table->string('StUQty')->nullable();
            $table->string('Volume')->nullable();
            $table->string('Weight')->nullable();
            $table->string('ActualWeight')->nullable();
            $table->string('CatchWeight')->nullable();
            $table->string('TaskCountNew')->nullable();
            $table->string('TaskCountCurrent')->nullable();
            $table->string('TaskCountActioned')->nullable();
            $table->string('TimeToPick')->nullable();
            $table->string('TimeToPack')->nullable();
            $table->string('TimeToCheck')->nullable();
            $table->string('TimeToLoad')->nullable();
            $table->string('TimeOther')->nullable();
            $table->string('TimeToDeliver')->nullable();
            $table->string('InvoiceInd')->nullable();
            $table->string('Currency')->nullable();
            $table->string('LineValue')->nullable();
            $table->string('Discount')->nullable();
            $table->string('Packing')->nullable();
            $table->string('Freight')->nullable();
            $table->string('Insurance')->nullable();
            $table->string('Charges')->nullable();
            $table->string('Allowances')->nullable();
            $table->string('Tax')->nullable();
            $table->string('InvoiceValue')->nullable();
            $table->string('ShortageCode')->nullable();
            $table->string('Ignore')->nullable();
            $table->string('Variance')->nullable();
            $table->string('CutOffInd')->nullable();
            $table->string('Supervisor')->nullable();
            $table->string('Reason')->nullable();
            $table->dateTime('DateCreated')->nullable();
            $table->string('DateSuspended')->nullable();
            $table->dateTime('DateClosed')->nullable();
            $table->dateTime('DateDueOut')->nullable();
            $table->dateTime('DateShipment')->nullable();
            $table->string('DateDelivery')->nullable();
            $table->string('DateInvoice')->nullable();
            $table->string('ASNInd')->nullable();
            $table->string('OverdueInd')->nullable();
            $table->string('Stage')->nullable();
            $table->string('MaintInd')->nullable();
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
        Schema::dropIfExists('shipmentsextras');
    }
}
