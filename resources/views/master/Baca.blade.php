@extends('template.admin')
@section('title', 'Baca')
@section('content-title','Selamat Datang "Nama Murid"')
@section('content')
<form method="post" enctype="multipart/form-data" action="">
    @csrf
    <input type="hidden" name="id_siswa" value="">
    <div class="form-group">
        <label for="nama">JUDUL BUKU</label>
        <input type="text" class="form-control" id="nama_project" name="nama_project" value="">
    </div>
    <div class="form-group">
        <label for="nama">PENGARANG</label>
        <input type="text" class="form-control" id="nama_project" name="nama_project" value="">
    </div>
    <div class="form-group">
        <label for="nama">PENERBIT</label>
        <input type="text" class="form-control" id="nama_project" name="nama_project" value="">
    </div>
    <div class="form-group">
        <label for="nama">RINGKASAN</label>
        <textarea type="text" class="form-control" id="nama_project" name="nama_project" value=""></textarea>
    </div>
    <div class="form-group">
        <label for="nama">TANGGAL BACA</label>
        <input type="date" class="form-control" id="tanggl" name="tanggl" value="">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="simpan">
    </div>
</form>
@endsection