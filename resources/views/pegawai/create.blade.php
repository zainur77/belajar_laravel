@extends('layouts.master')
@section('judul')
Kategori
@endsection
@section('nama')
Form Pegawai
@endsection
@section('konten')
<div class="row col-lg-6">
<form action="{{url('pegawai')}}" method="post">
    @csrf
  <div class="form-group">
    <label>Nama Pegawai</label>
    <input type="text" class="form-control" name="nama_pegawai">
  </div>
  <div class="form-group">
    <label>Alamat Pegawai</label>
    <input type="text" class="form-control" name="alamat_pegawai">
  </div>
  <div class="form-group">
    <label>No Handphone</label>
    <input type="text" class="form-control" name="no_hp">
  </div>
  <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
</div>
@endsection
