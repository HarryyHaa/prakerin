@extends('layouts.app')
@section('content')

    <div class="container">
        <h4>Kategori</h4>
        <a href="{{ route('kategori.create') }}" class="btn btn-outline-primary" data-toggle="modal" data-target="#create">Tambah Data</a>
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

                            <a href="{{ route('kategori.edit', ['id'=>$data->id]) }}" class="btn btn-outline-light">Edit</a>
                            <a href="{{ route('kategori.show', ['id'=>$data->id]) }}" class="btn btn-outline-success">Show</a>
                            <button type="submit" class="btn btn-outline-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
