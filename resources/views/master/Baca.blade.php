@extends('template.admin')
@section('title', 'Baca')
@section('content-title')
<h2>Silakan Input Bacaan
    {{ auth()->user()->name }}
</h2><br>
@endsection
@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $item)
        <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post" enctype="multipart/form-data" action="{{ route('baca.store') }}" >
    @csrf
    <input type="hidden" name="id_siswa" value="">
    <div class="form-group">
        <label for="judul_buku">JUDUL BUKU</label>
        <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="">
    </div>
    <div class="form-group">
        <label for="pengarang">PENGARANG</label>
        <input type="text" class="form-control" id="pengarang" name="pengarang" value="">
    </div>
    <div class="form-group">
        <label for="penerbit">PENERBIT</label>
        <input type="text" class="form-control" id="penerbit" name="penerbit" value="">
    </div>
    <div class="form-group">
        <label for="ringkasan">RINGKASAN</label>
        <textarea type="text" class="form-control" id="ringkasan" name="ringkasan" value=""></textarea>
    </div>
    <div class="form-group">
        <label for="tanggal_baca">TANGGAL BACA</label>
        <input type="date" class="form-control" id="tanggal_baca" name="tanggal_baca" value="">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="simpan">
    </div>
</form>
@endsection