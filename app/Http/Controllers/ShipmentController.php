<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\Shipmentsextra;
use App\Models\Shipmentline;
use App\Models\Shipmentaddress;

class ShipmentController extends Controller
{
    
    public function index()
    {
        $shipments = Shipment::latest()->get();
        return view('home', ['shipments'=>$shipments]);
    }

    public function import(){
        return view('import');
    }

    public function importStore(Request $req){
        try {
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://rsrge1testapi.snapfulfil.net/api/shipments/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "{\n\t\"username\": \"SPSAPI\",\n\t\"password\": \"sps2021?\"\n}",
            CURLOPT_HTTPHEADER => array(
                "authorization: Basic U1BTQVBJOnNwczIwMjE/",
                "cache-control: no-cache",
            ),
            ));            

            $response = curl_exec($curl);
            $resp = json_decode($response);

            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
                die;
            }

            foreach($resp as $item){
                // Insert Shipment Details
                $itemArr = json_decode(json_encode($item), true);
                $shipment = Shipment::create($itemArr);

                $itemArr['shipment_id'] = $shipment->id;
                Shipmentsextra::create($itemArr);

                // Insert Shipment Lines
                foreach($item->ShipmentLines as $line){
                    $lineArr = json_decode(json_encode($line), true);
                    Shipmentline::create($lineArr);
                }

                // Insert Ship Address
                foreach($item->ShipAddress as $address){
                    $addressArr = json_decode(json_encode($address), true);
                    Shipmentaddress::create($addressArr);
                }
            }
            return redirect()->back()->with('success', 'Shipments data imported successfully.');        
        } catch (\Exception $e) {
            return redirect()->back()->with('danger', $e->getMessage());
        }
    }

    function getLines(Request $req){
        $lines = Shipmentline::where('ShipmentId', $req->id)->get();
        return json_encode($lines);
    }

    function getAddress(Request $req){
        $address = Shipmentaddress::where('ShipmentId', $req->id)->first();
        return json_encode($address);
    }
}
