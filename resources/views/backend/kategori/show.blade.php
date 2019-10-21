@extends('layouts.app')
@section('content')
    <div class="container">


            <div class="form-group">
              <label for="">Kategori</label>
              <input type="text" name="nama" id="" class="form-control" disabled placeholder="" aria-describedby="helpId"value="{{$kategori->nama}}">


            </div>
            <a href=" {{ route('kategori.index') }}" class="btn btn-outline-primary">Kembali</a>

    </div>
@endsection
