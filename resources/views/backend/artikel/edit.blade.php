@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Edit data Artikel</div>

                <div class="card-body">
                <form action="{{ route('artikel.update', $artikel->id )}}"
                    method="POST">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                    <div class="form-group">
                        <label for="">Judul</label>
                    <input class="form-control" value="{{ $artikel->judul }}"
                    type="text" name="judul">
                    </div>
                     <div class="form-group">
                        <label for="">Konten</label>
                        <textarea class="form-control ckeditor" cols="30" rows="10" name="konten">{!! $artikel->konten !!}</textarea>
                    </div>
                    <select name="kategori_id" class="form-control ">
                    @foreach($kategori as $data)
                        <option value="{{ $data->id }}" {{ ($data->id == $artikel->kategori_id) ? 'selected' : '' }}>
                        {{ $data->nama }}</option>
                            @endforeach
                    </select>
                     <div class="form-group">
                        <label for="">Tag</label>
                   <select id="select22" name="tag[]" class="form-control " multiple="multiple">
                  @foreach($tag as $data)
                    <option value="{{ $data->id }}"{{ (in_array($data->id, $selectTag)) ? 'selected' : '' }}>
                      {{ $data->nama }}</option>
                        @endforeach
                </select>
                    </div>
                     <div class="form-group">
                        <label for="">Foto</label>
                    <input class="form-control" value="{{ $artikel->foto }}"
                    type="file" name="foto">
                    <p></p>
                    <img src="{{ asset('assets/img/artikel/'.$artikel->foto) }}" alt="" width="200px" height="200px">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">
                            Simpan data
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
      $(document).ready(function(){
          $('#select22').select2();
       });
    </script>
@endsection
