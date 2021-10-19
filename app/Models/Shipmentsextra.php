<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipmentsextra extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipment_id',
        'DropSlot',
        'PackStation',
        'ShippingLane',
        'ReturnReason',
        'QC',
        'Lines',
        'LineQty',
        'StUQty',
        'Volume',
        'Weight',
        'ActualWeight',
        'CatchWeight',
        'TaskCountNew',
        'TaskCountCurrent',
        'TaskCountActioned',
        'TimeToPick',
        'TimeToPack',
        'TimeToCheck',
        'TimeToLoad',
        'TimeOther',
        'TimeToDeliver',
        'InvoiceInd',
        'Currency',
        'LineValue',
        'Discount',
        'Packing',
        'Freight',
        'Insurance',
        'Charges',
        'Allowances',
        'Tax',
        'InvoiceValue',
        'ShortageCode',
        'Ignore',
        'Variance',
        'CutOffInd',
        'Supervisor',
        'Reason',
        'DateCreated',
        'DateSuspended',
        'DateClosed',
        'DateDueOut',
        'DateShipment',
        'DateDelivery',
        'DateInvoice',
        'ASNInd',
        'OverdueInd',
        'Stage',
        'MaintInd',
    ];

    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }
}
