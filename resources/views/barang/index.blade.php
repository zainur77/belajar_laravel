@extends('layouts.master')
@section('judul')
Barang
@endsection
@section('nama')
Tabel Barang
@endsection
@section('konten')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAMA BARANG</th>
            <th>KATEGORI BARANG</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($barang as $data)
    <tr>
    <td>{{$data->id}}</td>
    <td>{{$data->nama_barang}}</td>
    <td>{{$data->nama_kategori}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
@endsection
