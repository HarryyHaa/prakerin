@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah data kategori</div>

                <div class="card-body">
                <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                <div class="form-group">
                    <label for="">Judul</label>
                    <input class="form-control" type="text" name="judul">
                </div>

                <div class="input-group">
                    <textarea name="konten" id="" class="form-control ckeditor" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
              <label for="">Nama Kota</label>
                <select name="kategori_id" class="form-control">
                  @foreach($kategori as $data)
                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="">Tag</label>
                <select id="select2" name="tag[]" class="form-control tag" multiple="multiple">
                  @foreach($tag as $data)
                    <option value="{{ $data->id }}">
                      {{ $data->nama }}</option>
                        @endforeach
                </select>
            </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input class="form-control" type="file" name="foto" id="foto">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-outline-primary">Simpan Data</button>
                <a href="{{ route('artikel.index') }}" class="btn btn-outline-danger">Kembali</a>
                </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script>
      $(document).ready(function(){
          $('#select2').select2();
       });
    </script>
</div>
@endsection

