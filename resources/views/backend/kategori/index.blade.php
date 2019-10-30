@extends('layouts.app')

@section('content')
{{-- @include('layouts.flash') --}}

<div class="container">
    <h4>Data kategori</h4>
    <a href="{{ route('kategori.create') }}" class="btn btn-outline-primary">Tambah Data</a>
    <p></p>
    <table class="table table-hover table-bordered dataTable">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        {{-- <tbody>
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
                        <a href="{{ route('kategori.show', ['id'=>$data->id]) }}" class="btn btn-outline-success">Show</a>
                        <button type="submit" class="btn btn-outline-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody> --}}
        <tbody class="data-kategori">
        </tbody>
    </table>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
@endsection

@push('js')
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function (){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // Data Kategori
            var table = $('.dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('kategori.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'nama', name: 'nama'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            $('.data-kategori').on('click', '#hapus-data', function(e) {
                e.preventDefault()

                $.ajax({
                    url: '/admin/kategori/'+ $(this).data('id'),
                    method: 'DELETE',
                    success: (res) => {
                        location.reload()
                    },
                    error: (err) => {
                        // console.log(err);
                        location.reload()
                    }
                })
            })

        })
    </script>
@endpush
