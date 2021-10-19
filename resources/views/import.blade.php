@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Data Import</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card py-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="font-italic">
                                <i class="fa fa-info-circle text-info"></i> Import
                            </h5>
                            <a href="{{route('import.store')}}" class="btn btn-block btn-success">Import Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

