<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipmentline extends Model
{
    use HasFactory;

    protected $fillable = [
        'ShipmentId',
        'Line',
        'Level',
        'SKUId',
        'BizSKU',
        'CustomerSKU',
        'UPC',
        'UPCDescription',
        'Category',
        'UnitOfMeasure',
        'LineOwner',
        'LineStockStatus',
        'QtyOrdered',
        'QtyRequired',
        'QtyAllocated',
        'QtyTasked',
        'QtyPicked',
        'QtyShipped',
        'QtyDelivered',
        'QtyDueOut',
        'CatchWeight',
        'Price',
        'Discount',
        'TaxRate',
        'SOLineId',
        'ReturnReason',
        'QC',
        'Shortage',
        'Ignore',
        'Variance',
        'BOInd',
        'ConsignmentId',
        'PickGroupId',
        'SiteId',
        'Warehouse',
        'BizId',
        'OwnerId',
        'StockStatus',
        'DateShipment',
        'AttachmentInd',
        'SpecialConditionInd',
        'Stage',
    ];
}
