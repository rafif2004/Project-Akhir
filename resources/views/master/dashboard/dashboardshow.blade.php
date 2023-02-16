@extends('template.admin')
@section('title', 'Dashboard')
@section('content-title')
Dashboard Bacaan {{ auth()->user()->name }}
@endsection
@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
<div class="row">
    <div class="col-lg-4">
        <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user"> </i> Profil</h6>
        </div>
            
            <div class="card-body">
                <p class="mt-3">Nama Siswa = {{ $siswas->nama }}</p>
                <p class="mt-3">Kelas = {{ $siswas->kelas->kelas }}</p>
                <p class="mt-3">Absen = {{ $siswas->absen }}</p>
                <p class="mt-3">Poin Bacaan = {{ $siswas->poin }}</p>
            </div>
        
      </div>
    </div>  
               {{-- @if (auth()->user()->role == 2) --}}
    <div class="col-lg-8">
        <div class="card shadow mb-4">
        <div class="card-header">
            
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-book"></i> Buku Yang Pernah Di Baca</h6>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <td class="mt-3">No</td>
                    <td class="mt-3">Judul Buku</td>
                    <td class="mt-3">Pengarang</td>
                    <td class="mt-3">Tanggal buat</td>
                    <td class="mt-3">Action</td>
                </tr>
                @foreach($bacaan as $baca)
                <tr>
                        <th scope="row">{{$loop->iteration }}</th>
                        <td class="mt-3">{{ $baca->judul_buku }}</td>
                        <td class="mt-3">{{ $baca->pengarang }}</td>
                        <td class="mt-3">{{ $baca->tanggal_baca }}</td>
                    <td>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        </div>
    </div>
    {{-- @endif --}}
</div>
@endsection