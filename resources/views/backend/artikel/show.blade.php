@extends('layouts.app')
@section('content')
    <div class="container">


            <div class="form-group">
              <label for="">Artikel</label>
              <input type="text" id="" class="form-control" disabled placeholder="" aria-describedby="helpId"value="{{$artikel->kategori->nama}}">

              <label for="">Foto</label>
              <img  src="{{ asset('assets/img/artikel/')}}" width="100%" id="" class="form-control" disabled placeholder="" aria-describedby="helpId"value="{{$artikel->foto}}">

              <label for="">Konten</label>
              <input type="text" id="" class="form-control" disabled placeholder="" aria-describedby="helpId"value="{{$artikel->konten}}">

              <label for="">Kategori</label>
              <input type="text" id="" class="form-control" disabled placeholder="" aria-describedby="helpId"value="{{$artikel->slug}}">

              {{-- <label for="">Tag</label>
              <input type="text" id="" class="form-control" disabled placeholder="" aria-describedby="helpId"value="{{$artikel->tag}}"> --}}

            </div>
            <a href=" {{ route('artikel.index') }}" class="btn btn-outline-danger">Kembali</a>

    </div>
@endsection
