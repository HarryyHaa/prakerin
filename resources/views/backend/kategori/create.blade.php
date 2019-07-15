@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('kategori.store') }}" method="post">
            {{csrf_field()}}
            <div class="form-group">
              <label for="">Nama </label>
              <input type="text" name="nama" id="" class="form-control" placeholder="" aria-describedby="helpId">

            </div>
            <button type="submit" class="btn btn-outline-primary">Simpan</button>
        </form>
    </div>
@endsection
