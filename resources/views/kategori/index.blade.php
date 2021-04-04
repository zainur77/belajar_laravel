@extends('layouts.master')
@section('judul')
Kategori
@endsection
@section('nama')
Tabel Kategori
@endsection
@section('konten')
<a href="{{url('kategori/create')}}" class="btn btn-primary col-lg-2 mb-2">Data Baru</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAMA KATEGORI</th>
            <th>KODE KATEGORI</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
    @foreach($kategori as $data)
    <tr>
    <td>{{$data->id}}</td>
    <td>{{$data->nama_kategori}}</td>
    <td>{{$data->kode_kategori}}</td>
    <td>
    <!-- lihat -->
    <a href="{{url('kategori/'.$data->id)}}" class="btn btn-secondary">lihat</a>
    <!-- hapus -->
    <form action="{{url('kategori/'.$data->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">hapus</button>
    </form>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
@endsection
