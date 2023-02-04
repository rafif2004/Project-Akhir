@extends('template.admin')
@section('title', 'Dashboard')
@section('content-title')
Profil Bacaan {{ auth()->user()->name }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user"> </i> Profil Siswa</h6>
        </div>
            <div class="card-body">
                <p class="mt-3"><b>Nama Siswa = </b>{{ $bacaan->siswa->nama }}</p>
                <p class="mt-3"><b>Kelas = </b>{{ $bacaan->kntl->kelas }}</p>
                <p class="mt-3"><b>Absen = </b>{{ $bacaan->siswa->absen }}</p>
                <p class="mt-3"><b>Poin Bacaan = </b>{{ $bacaan->siswa->poin }}</p>
                <p class="mt-3"><b>Pengarang = </b>{{ $bacaan->pengarang }}</p>
                <p class="mt-3"><b>penerbit = </b>{{ $bacaan->penerbit }}</p>
            </div>
      </div>
    </div>
    <div class="col-lg-8">
        <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-quote-left"></i> Bacaan Siswa</h6>
        </div>
        <div class="card-body text-center">
            <h3 class="mt-3">{{ $bacaan->judul_buku }}</h3>
            <p class="mt-3 text-left">{{ $bacaan->ringkasan }}</p>
        </div>
        </div>
    </div>
</div>
@endsection