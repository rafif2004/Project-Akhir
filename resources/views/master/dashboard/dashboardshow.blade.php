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
                <h4 class="mt-3">Nama Siswa = {{ auth()->user()->name }}</h4>
                <h4 class="mt-3">Kelas = </h4>
                <h4 class="mt-3">Absen = </h4>
                <h4 class="mt-3">Poin Bacaan = </h4>
            </div>
      </div>
    </div>
    <div class="col-lg-8">
        <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-quote-left"></i> Bacaan Siswa</h6>
        </div>
        <div class="card-body text-center">
            <h4 class="mt-3">{{ $bacaan->judul_buku }}</h4>
            {{-- <h5 class="mt-3"><i class="fas fa-id-card"> {{ $bacaan->pengarang }}</i></h5>
            <h5 class="mt-3"><i class="fas fa-venus-mars"> {{ $bacaan->penerbit }}</i></h5> --}}
            <h5 class="mt-3 text-left">{{ $bacaan->ringkasan }}</h5>
        </div>
        </div>
    </div>
</div>
@endsection