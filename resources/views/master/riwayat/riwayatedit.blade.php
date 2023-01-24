@extends('template.admin')
@section('title', 'Riwayat')
@section('content-title')
Edit Bacaan {{ auth()->user()->name }}
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
    <form method="post" enctype="multipart/form-data" action="{{ route('riwayat.edit' , $bacaan->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">JUDUL BUKU</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="{{ $bacaan->judul_buku }}">
            </div>
            <div class="form-group">
                <label for="nama">PENGARANG</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $bacaan->pengarang }}">
            </div>
            <div class="form-group">
                <label for="nama">PENERBIT</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $bacaan->penerbit }}">
            </div>
            <div class="form-group">
                <label for="nama">RINGKASAN</label>
                {{-- <input type="text" class="form-control" id="ringkasan" name="ringkasan" value=""> --}}
                <textarea class="form-control" name="ringkasan" id="ringkasan" cols="30" rows="10">{{ $bacaan->ringkasan }}</textarea>
            </div>
            <div class="form-group">
                <label for="tanggal_baca">TANGGAL BACA</label>
                <input type="date" class="form-control" id="tanggal_baca" name="tanggal_baca" value="{{ $bacaan->tanggal_baca }}">
            </div><br>
            <div class="form-group">
            <a href="{{ route('riwayat.index') }}" class="btn btn-danger">Kembali</a>
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>
        </form>
    </div>
</div>
@endsection
