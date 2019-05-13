@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Rooms Create</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-10">
                    
                    <form action="{{route('admin.katrooms.store')}}" method="post">
                        @csrf
                        <!-- Text input-->
                        <div class="form-group">
                            <label for="textinput">Gambar</label>  
                            <input id="textinput" name="file" value="{{old('file')}}" type="file" placeholder="Upload Gambar" class="form-control input-md" required="">
                            <label for="textinput">Nama Kategori</label>  
                            <input id="textinput" name="nama_kategori" value="{{old('nama_kategori')}}" type="text" placeholder="Nama Kategori" class="form-control input-md" required="">
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