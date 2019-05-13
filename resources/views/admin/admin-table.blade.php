@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Table Rooms</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <button class="btn btn-primary btn-xs">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                    </a>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Room Category</th>
                                <th>bed_type</th>
                                <th>Harga</th>
                                <th>Max.People</th>
                                <th>Facility</th>
                                <th>Size</th>
                            </tr>
                        </thead>
                    </table>    
                </div>
            </div>
        </div>
    </div>
@stop  