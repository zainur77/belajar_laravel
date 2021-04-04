@extends('layouts.master')
@section('judul')
Pegawai
@endsection
@section('nama')
Tabel Pegawai
@endsection
@section('konten')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAMA PEGAWAI</th>
            <th>ALAMAT PEGAWAI</th>
            <th>NO HANDPHONE</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pegawai as $data)
    <tr>
    <td>{{$data->id}}</td>
    <td>{{$data->nama_pegawai}}</td>
    <td>{{$data->alamat_pegawai}}</td>
    <td>{{$data->no_hp}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
@endsection
