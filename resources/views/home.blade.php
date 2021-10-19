@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Shipments</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    {{-- <td>Lines</td>
                                    <td>Address</td> --}}
                                    <td>ShipmentId</td>
                                    <td>BizId</td>
                                    <td>BizSalesOrder</td>
                                    <td>Status</td>
                                    <td>OrderType</td>
                                    <td>OrderClass</td>
                                    <td>CustomerId</td>
                                    <td>BizCustomerId</td>
                                    <td>CustomerGroup</td>
                                    <td>CustomerName</td>
                                    <td>ShippingAddressId</td>
                                    <td>InvoiceAddressId</td>
                                    <td>Site</td>
                                    <td>Warehouse</td>
                                    <td>OwnerId</td>
                                    <td>StockStatus</td>
                                    <td>SalesOrder</td>
                                    <td>Prime</td>
                                    <td>PriorityAllocation</td>
                                    <td>PriorityDespatch</td>
                                    <td>CustomerOrder</td>
                                    <td>CustomerRef</td>
                                    <td>ConsignmentId</td>
                                    <td>PickGroupId</td>
                                    <td>ASNNumber</td>
                                    <td>DNoteNumber</td>
                                    <td>InvoiceNumber</td>
                                    <td>ManifestNumber</td>
                                    <td>BOL</td>
                                    <td>MasterBOL</td>
                                    <td>POD</td>
                                    <td>ShippingMethod</td>
                                    <td>Region</td>
                                    <td>DC</td>
                                    <td>Store</td>
                                    <td>CarrierId</td>
                                    <td>CarrierScac</td>
                                    <td>CarrierTrackingNumber</td>
                                    <td>CarrierTrackingNumberURL</td>
                                    <td>ReturnTrackingNumber</td>
                                    <td>ReturnTrackingNumberURL</td>
                                    <td>Route</td>
                                    <td>LoadId</td>
                                    <td>LoadSequence</td>
                                    <td>DropSlot</td>
                                    <td>PackStation</td>
                                    <td>ShippingLane</td>
                                    <td>ReturnReason</td>
                                    <td>QC</td>
                                    <td>Lines</td>
                                    <td>LineQty</td>
                                    <td>StUQty</td>
                                    <td>Volume</td>
                                    <td>Weight</td>
                                    <td>ActualWeight</td>
                                    <td>CatchWeight</td>
                                    <td>TaskCountNew</td>
                                    <td>TaskCountCurrent</td>
                                    <td>TaskCountActioned</td>
                                    <td>TimeToPick</td>
                                    <td>TimeToPack</td>
                                    <td>TimeToCheck</td>
                                    <td>TimeToLoad</td>
                                    <td>TimeOther</td>
                                    <td>TimeToDeliver</td>
                                    <td>InvoiceInd</td>
                                    <td>Currency</td>
                                    <td>LineValue</td>
                                    <td>Discount</td>
                                    <td>Packing</td>
                                    <td>Freight</td>
                                    <td>Insurance</td>
                                    <td>Charges</td>
                                    <td>Allowances</td>
                                    <td>Tax</td>
                                    <td>InvoiceValue</td>
                                    <td>ShortageCode</td>
                                    <td>Ignore</td>
                                    <td>Variance</td>
                                    <td>CutOffInd</td>
                                    <td>Supervisor</td>
                                    <td>Reason</td>
                                    <td>DateCreated</td>
                                    <td>DateSuspended</td>
                                    <td>DateClosed</td>
                                    <td>DateDueOut</td>
                                    <td>DateShipment</td>
                                    <td>DateDelivery</td>
                                    <td>DateInvoice</td>
                                    <td>ASNInd</td>
                                    <td>OverdueInd</td>
                                    <td>Stage</td>
                                    <td>MaintInd</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($shipments as $item)
                                <tr>
                                    {{-- <td class="text-center">
                                        <a href="javascript:void(0)" onclick="getLineBody('{{$item->ShipmentId}}')" class="btn btn-primary" data-toggle="modal" data-target="#lineModalCenter">
                                            <i class="fa fa-eye text-white"></i>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" onclick="getAddressBody('{{$item->ShipmentId}}')" class="btn btn-info" data-toggle="modal" data-target="#addressModalCenter">
                                            <i class="fa fa-eye text-white"></i>
                                        </a>
                                    </td> --}}
                                    <td>{{$item->ShipmentId}}</td>
                                    <td>{{$item->BizId}}</td>
                                    <td>{{$item->BizSalesOrder}}</td>
                                    <td>{{$item->Status}}</td>
                                    <td>{{$item->OrderType}}</td>
                                    <td>{{$item->OrderClass}}</td>
                                    <td>{{$item->CustomerId}}</td>
                                    <td>{{$item->BizCustomerId}}</td>
                                    <td>{{$item->CustomerGroup}}</td>
                                    <td>{{$item->CustomerName}}</td>
                                    <td>{{$item->ShippingAddressId}}</td>
                                    <td>{{$item->InvoiceAddressId}}</td>
                                    <td>{{$item->Site}}</td>
                                    <td>{{$item->Warehouse}}</td>
                                    <td>{{$item->OwnerId}}</td>
                                    <td>{{$item->StockStatus}}</td>
                                    <td>{{$item->SalesOrder}}</td>
                                    <td>{{$item->Prime}}</td>
                                    <td>{{$item->PriorityAllocation}}</td>
                                    <td>{{$item->PriorityDespatch}}</td>
                                    <td>{{$item->CustomerOrder}}</td>
                                    <td>{{$item->CustomerRef}}</td>
                                    <td>{{$item->ConsignmentId}}</td>
                                    <td>{{$item->PickGroupId}}</td>
                                    <td>{{$item->ASNNumber}}</td>
                                    <td>{{$item->DNoteNumber}}</td>
                                    <td>{{$item->InvoiceNumber}}</td>
                                    <td>{{$item->ManifestNumber}}</td>
                                    <td>{{$item->BOL}}</td>
                                    <td>{{$item->MasterBOL}}</td>
                                    <td>{{$item->POD}}</td>
                                    <td>{{$item->ShippingMethod}}</td>
                                    <td>{{$item->Region}}</td>
                                    <td>{{$item->DC}}</td>
                                    <td>{{$item->Store}}</td>
                                    <td>{{$item->CarrierId}}</td>
                                    <td>{{$item->CarrierScac}}</td>
                                    <td>{{$item->CarrierTrackingNumber}}</td>
                                    <td>{{$item->CarrierTrackingNumberURL}}</td>
                                    <td>{{$item->ReturnTrackingNumber}}</td>
                                    <td>{{$item->ReturnTrackingNumberURL}}</td>
                                    <td>{{$item->Route}}</td>
                                    <td>{{$item->LoadId}}</td>
                                    <td>{{$item->LoadSequence}}</td>
                                    <td>{{$item->shipmentsextra->DropSlot}}</td>
                                    <td>{{$item->shipmentsextra->PackStation}}</td>
                                    <td>{{$item->shipmentsextra->ShippingLane}}</td>
                                    <td>{{$item->shipmentsextra->ReturnReason}}</td>
                                    <td>{{$item->shipmentsextra->QC}}</td>
                                    <td>{{$item->shipmentsextra->Lines}}</td>
                                    <td>{{$item->shipmentsextra->LineQty}}</td>
                                    <td>{{$item->shipmentsextra->StUQty}}</td>
                                    <td>{{$item->shipmentsextra->Volume}}</td>
                                    <td>{{$item->shipmentsextra->Weight}}</td>
                                    <td>{{$item->shipmentsextra->ActualWeight}}</td>
                                    <td>{{$item->shipmentsextra->CatchWeight}}</td>
                                    <td>{{$item->shipmentsextra->TaskCountNew}}</td>
                                    <td>{{$item->shipmentsextra->TaskCountCurrent}}</td>
                                    <td>{{$item->shipmentsextra->TaskCountActioned}}</td>
                                    <td>{{$item->shipmentsextra->TimeToPick}}</td>
                                    <td>{{$item->shipmentsextra->TimeToPack}}</td>
                                    <td>{{$item->shipmentsextra->TimeToCheck}}</td>
                                    <td>{{$item->shipmentsextra->TimeToLoad}}</td>
                                    <td>{{$item->shipmentsextra->TimeOther}}</td>
                                    <td>{{$item->shipmentsextra->TimeToDeliver}}</td>
                                    <td>{{$item->shipmentsextra->InvoiceInd}}</td>
                                    <td>{{$item->shipmentsextra->Currency}}</td>
                                    <td>{{$item->shipmentsextra->LineValue}}</td>
                                    <td>{{$item->shipmentsextra->Discount}}</td>
                                    <td>{{$item->shipmentsextra->Packing}}</td>
                                    <td>{{$item->shipmentsextra->Freight}}</td>
                                    <td>{{$item->shipmentsextra->Insurance}}</td>
                                    <td>{{$item->shipmentsextra->Charges}}</td>
                                    <td>{{$item->shipmentsextra->Allowances}}</td>
                                    <td>{{$item->shipmentsextra->Tax}}</td>
                                    <td>{{$item->shipmentsextra->InvoiceValue}}</td>
                                    <td>{{$item->shipmentsextra->ShortageCode}}</td>
                                    <td>{{$item->shipmentsextra->Ignore}}</td>
                                    <td>{{$item->shipmentsextra->Variance}}</td>
                                    <td>{{$item->shipmentsextra->CutOffInd}}</td>
                                    <td>{{$item->shipmentsextra->Supervisor}}</td>
                                    <td>{{$item->shipmentsextra->Reason}}</td>
                                    <td>{{$item->shipmentsextra->DateCreated}}</td>
                                    <td>{{$item->shipmentsextra->DateSuspended}}</td>
                                    <td>{{$item->shipmentsextra->DateClosed}}</td>
                                    <td>{{$item->shipmentsextra->DateDueOut}}</td>
                                    <td>{{$item->shipmentsextra->DateShipment}}</td>
                                    <td>{{$item->shipmentsextra->DateDelivery}}</td>
                                    <td>{{$item->shipmentsextra->DateInvoice}}</td>
                                    <td>{{$item->shipmentsextra->ASNInd}}</td>
                                    <td>{{$item->shipmentsextra->OverdueInd}}</td>
                                    <td>{{$item->shipmentsextra->Stage}}</td>
                                    <td>{{$item->shipmentsextra->MaintInd}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Line Modal -->
    <div class="modal fade" id="lineModalCenter" tabindex="-1" role="dialog" aria-labelledby="lineModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Shipment Lines</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body" id="line-body">
                body
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
  </div>

    <!-- Address Modal -->
    <div class="modal fade" id="addressModalCenter" tabindex="-1" role="dialog" aria-labelledby="addressModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Address</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body" id="address-body">
                body
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
@stop


@section('js')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>


    {{-- <script>
        function getLineBody(id){
            $.ajax({
              type: "GET",
              url: '/get/lines/'+id,
              success: function (data) {
                var resp = JSON.parse(data);
                resp.map((item, i)=>{
                    //
                });
              }
            });
        }


        function getAddressBody(id){
            $.ajax({
              type: "GET",
              url: '/get/address/'+id,
              success: function (data) {
                var resp = JSON.parse(data);
                resp.map((item, i)=>{
                    //
                });
              }
            });
        }
    </script> --}}
@endsection
