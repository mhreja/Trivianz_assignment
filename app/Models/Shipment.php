<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'ShipmentId',
        'BizId',
        'BizSalesOrder',
        'Status',
        'OrderType',
        'OrderClass',
        'CustomerId',
        'BizCustomerId',
        'CustomerGroup',
        'CustomerName',
        'ShippingAddressId',
        'InvoiceAddressId',
        'Site',
        'Warehouse',
        'OwnerId',
        'StockStatus',
        'SalesOrder',
        'Prime',
        'PriorityAllocation',
        'PriorityDespatch',
        'CustomerOrder',
        'CustomerRef',
        'ConsignmentId',
        'PickGroupId',
        'ASNNumber',
        'DNoteNumber',
        'InvoiceNumber',
        'ManifestNumber',
        'BOL',
        'MasterBOL',
        'POD',
        'ShippingMethod',
        'Region',
        'DC',
        'Store',
        'CarrierId',
        'CarrierScac',
        'CarrierTrackingNumber',
        'CarrierTrackingNumberURL',
        'ReturnTrackingNumber',
        'ReturnTrackingNumberURL',
        'Route',
        'LoadId',
        'LoadSequence',
    ];

    public function shipmentsextra(){
    	return $this->hasOne(Shipmentsextra::class, 'shipment_id', 'id');
    }
}
