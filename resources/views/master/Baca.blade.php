@extends('template.admin')
@section('title', 'Baca')
@section('content-title','Selamat Datang "Nama Murid"')
@section('content')
<form method="post" enctype="multipart/form-data" action="">
    @csrf
    <input type="hidden" name="id_siswa" value="">
    <div class="form-group">
        <label for="nama">NAMA</label>
        <input type="text" class="form-control" id="nama_project" name="nama_project" value="">
    </div>
    <div class="form-group">
        <label for="nama">NAMA BUKU</label>
        <input type="text" class="form-control" id="nama_project" name="nama_project" value="">
    </div>
    <div class="form-group">
        <label for="nama">PENGARANG</label>
        <input type="text" class="form-control" id="nama_project" name="nama_project" value="">
    </div>
    <div class="form-group">
        <label for="nama">TANGGAL PROJECT</label>
        <input type="date" class="form-control" id="tanggl" name="tanggl" value="">
    </div><br>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="simpan">
    </div>
</form>
@endsection