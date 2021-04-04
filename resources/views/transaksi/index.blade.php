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
            <th>NAMA PEGAWAI</th>
            <th>BARANG TRANSAKSI</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($transaksi as $data)
        <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->pegawai_id}}</td>
        <td>{{$data->barangs_id}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
@endsection
