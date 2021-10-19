<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipmentaddress extends Model
{
    use HasFactory;


    protected $fillable = [
        'Table',
        'ShipmentId',
        'AddressId',
        'Name',
        'Line1',
        'Line2',
        'Line3',
        'City',
        'State',
        'Postcode',
        'Country',
        'Region',
        'Latitude',
        'Longitude',
    ];
}
