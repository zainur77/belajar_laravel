@extends('layouts.master')
@section('judul')
Kategori
@endsection
@section('nama')
Tabel Kategori
@endsection
@section('konten')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAMA KATEGORI</th>
            <th>KODE KATEGORI</th>
        </tr>
    </thead>
    <tbody>
    @foreach($kategori as $data)
    <tr>
    <td>{{$data->id}}</td>
    <td>{{$data->nama_kategori}}</td>
    <td>{{$data->kode_kategori}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
@endsection
