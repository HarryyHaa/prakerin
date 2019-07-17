@extends('layouts.app')

@section('content')
{{-- @include('layouts.flash') --}}

<div class="container">
    <h4>Data kategori</h4>
    <a href="{{ route('kategori.create') }}" class="btn btn-outline-primary">Tambah Data</a>
    <p></p>
    <table class="table">
        <thead>
            <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                  
            </tr>
        </thead>
        <tbody>
            @php $no =0; @endphp

            @foreach ($kategori as $data)
                @php
                    $no++
                @endphp

            <tr>
            <td scope="row">{{$no}}</td>
                <td>{{$data->nama}}</td>
                <td>
                    <form action="{{ route('kategori.destroy', ['id'=>$data->id]) }}" method="post">
                        @csrf
                        @method('delete')

                        <a href="{{ route('kategori.edit', ['id'=>$data->id]) }}" class="btn btn-outline-info">Edit</a>
                        <button type="submit" class="btn btn-outline-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
