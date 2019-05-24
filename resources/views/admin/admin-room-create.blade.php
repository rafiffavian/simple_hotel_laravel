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
                            <label for="textinput">Kategori</label>  
                            <select name="id_menu" id="" class="form-control">
                                <option value="">==PILIH KATEGORI==</option>
                                <option value="">dasdsad</option>
                            </select><br>
                            <label for="textinput">Kategori Room</label>  
                            <select name="id_menu" id="" class="form-control">
                                <option value="">==PILIH KATEGORI ROOM==</option>
                            @foreach(App\Kategori_room::all() as $item)    
                                <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                            @endforeach    
                            </select><br>
                            <label for="textinput">Bed Type</label>  
                            <select name="id_menu" id="" class="form-control">
                                <option value="">==PILIH BED TYPE==</option>
                            @foreach(App\Bed_type::all() as $item)
                                <option value="{{$item->id}}">{{$item->nama_bed}}</option>
                            @endforeach    
                            </select><br>
                            <label for="textinput">Max.People</label>  
                            <input id="textinput" name="nama_kategori" value="{{old('nama_kategori')}}" type="text" placeholder="Harga" class="form-control input-md" required="">
                            <label for="textinput">Harga</label>  
                            <input id="textinput" name="nama_kategori" value="{{old('nama_kategori')}}" type="text" placeholder="Harga" class="form-control input-md" required="">
                            <label for="textinput">Fasilitas</label>  
                            <input id="textinput" name="nama_kategori" value="{{old('nama_kategori')}}" type="text" placeholder="Fasilitas" class="form-control input-md" required="">
                            <label for="textinput">Size</label>  
                            <input id="textinput" name="nama_kategori" value="{{old('nama_kategori')}}" type="text" placeholder="Size" class="form-control input-md" required="">
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