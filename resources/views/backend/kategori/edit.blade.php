@extends('layouts.app')

@section('content')
<title>Create Kategori</title>
    <div class="container">
        <form action="{{ route('kategori.update', $kategori->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">
            @csrf
            <div class="form-group">
              <label for="">Nama kategori</label>
              <input type="text" name="nama" id="" class="form-control" value="{{ $kategori->nama }}">
            </div>
            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
            <button type="submit" class="btn btn-outline-primary">Simpan</button>
            <a name="" id=""class="btn btn-outline-danger" href="{{route('kategori.index')}}" role="button">Kembali</a>


        </form>
    </div>
@endsection
