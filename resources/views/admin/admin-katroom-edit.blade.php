@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Rooms Category Edit</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-10">
                    
                    <form action="{{route('admin.katrooms.update',$mykatroom->id)}}" method="post">
                        @csrf
                        <input type="hidden" value="put" name="_method">
                        <!-- Text input-->
                        <div class="form-group">
                            <label for="textinput">Nama Kategori</label>  
                            <input id="textinput" name="nama_kategori" value="{{$mykatroom->nama_kategori}}" type="text" placeholder="Nama Kategori" class="form-control input-md" required="">
                        </div>

                        <!-- Button -->
                        
        
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        

                        
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop  