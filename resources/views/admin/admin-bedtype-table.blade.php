@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Table Bed_Type</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin.bedtype.create')}}">
                        <button class="btn btn-xs btn-primary">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                    </a>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Tipe Bed</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($bedtype as $v)
                            <tr>
                                <td>{{$v->nama_bed}}</td>
                                <td>{{$v->created_at}}</td>
                                <td>{{$v->updated_at}}</td>
                                <td>
                                    <div class="btn btn-group">
                                        <a href="{{route('admin.bedtype.edit',$v->id)}}" class="btn btn-warning btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop  