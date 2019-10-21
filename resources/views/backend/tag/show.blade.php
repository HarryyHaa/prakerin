@extends('layouts.app')
@section('content')
    <div class="container">


            <div class="form-group">
              <label for="">Tag</label>
              <input type="text" name="nama" id="" class="form-control" disabled placeholder="" aria-describedby="helpId"value="{{$tag->nama}}">


            </div>
            <a href=" {{ route('tag.index') }}" class="btn btn-outline-primary">Kembali</a>

    </div>
@endsection
