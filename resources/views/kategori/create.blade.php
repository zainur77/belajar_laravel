@extends('layouts.master')
@section('judul')
Kategori
@endsection
@section('nama')
Form Kategori
@endsection
@section('konten')
<div class="row col-lg-6">
<form action="{{url('kategori')}}" method="post">
    @csrf
  <div class="form-group">
    <label>Nama Kategori</label>
    <input type="text" class="form-control" name="nama_kategori">
  </div>
  <div class="form-group">
    <label>Kode Kategori</label>
    <input type="text" class="form-control" name="kode_kategori">
  </div>
  <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
</div>
@endsection
