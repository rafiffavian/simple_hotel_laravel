@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Bed_Type Edit</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-10">
                    
                    <form action="{{route('admin.bedtype.update', $mybedtype->id)}}" method="post">
                        @csrf
                        <!-- Text input-->
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="textinput">Tipe Bed</label>  
                            <input id="textinput" name="nama_bed" value="{{$mybedtype->nama_bed}}" type="text" placeholder="Tipe Bed" class="form-control input-md" required="">
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