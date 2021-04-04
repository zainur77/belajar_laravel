@extends('layouts.master')
@section('judul')
Pegawai
@endsection
@section('nama')
Tabel Pegawai
@endsection
@section('konten')
<a href="{{url('pegawai/create')}}" class="btn btn-primary col-lg-2 mb-2">Data Baru</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAMA PEGAWAI</th>
            <th>ALAMAT PEGAWAI</th>
            <th>NO HANDPHONE</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pegawai as $data)
    <tr>
    <td>{{$data->id}}</td>
    <td>{{$data->nama_pegawai}}</td>
    <td>{{$data->alamat_pegawai}}</td>
    <td>{{$data->no_hp}}</td>
    <td><a href="{{url('kategori/'.$data->id)}}" class="btn btn-secondary">lihat</a></td>
    </tr>
    @endforeach
    </tbody>
    </table>
@endsection
