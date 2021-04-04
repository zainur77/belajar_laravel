@extends('layouts.master')
@section('judul')
Transaksi
@endsection
@section('nama')
Tabel Transaksi
@endsection
@section('konten')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>TANGGAL TRANSAKSI</th>
            <th>NAMA PEGAWAI</th>
            <th>BARANG TRANSAKSI</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($transaksi as $data)
        <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->tgl_transaksi}}</td>
        <td>{{$data->nama_pegawai}}</td>
        <td>{{$data->nama_barang}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
@endsection
