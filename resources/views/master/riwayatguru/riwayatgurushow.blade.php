@extends('template.admin')
@section('title', 'Riwayat Guru')
@section('content-title')
Show Bacaan {{ auth()->user()->name }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user"> </i> Tentang Siswa</h6>
        </div>
            <div class="card-body text-center">
                <h4 class="mt-3">{{ $bacaan->judul_buku }}</h4>
                <h5 class="mt-3"><i class="fas fa-id-card"> {{ $bacaan->pengarang }}</i></h5>
                <h5 class="mt-3"><i class="fas fa-venus-mars"> {{ $bacaan->penerbit }}</i></h5>
                <h5 class="mt-3"><i class="fas fa-map"> {{ $bacaan->ringkasan }}</i></h5>
            </div>
      </div>
        <div class="card shadow mb-4">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-plus"> Kontak Siswa</i></h6>
            </div>
            <div class="card-body text-center">
                {{-- @foreach($kontak as $kontak)
                    <li>{{ $kontak->jenis_kontak}} : {{ $kontak->pivot->deskripsi}}</li>
                @endforeach --}}
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-quote-left"></i> About Siswa</h6>
        </div>
            <div class="card-body">
                <blockquote class="blockquote text-center">
                    {{-- <p class="mb-0">{{ $siswa->about}}</p>
                    <footer class="blockquote-footer">Ditulis Oleh <cite title="source title">{{ $siswa->nama}}</cite></footer> --}}
                </blockquote>
            </div>
        </div>
    </div>
</div>
@endsection