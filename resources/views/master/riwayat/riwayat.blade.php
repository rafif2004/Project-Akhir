@extends('template.admin')
@section('title', 'Riwayat')
@section('content-title')
<div class="animate__animated animate__bounceInDown">
    Riwayat Satu Sekolah
</div>
@endsection
@section('content')
 @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="card-body">
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">JUDUL BUKU</th>
                                    <th scope="col">PENGARANG</th>
                                    <th scope="col">PENERBIT</th>
                                    <th scope="col">EDIT</th>
                                </tr>
                            </thead>
                    <tbody>
                        {{-- @if (auth()->user()->role == 1) --}}
                            
                        @foreach($baca as $i)
                            <tr>
                                <th scope="row">{{$loop->iteration }}</th>
                                {{-- @foreach($nama_siswa as $i => $item) --}}
                                <td>{{$i->siswa->nama}}</td>
                                <td>{{$i->judul_buku}}</td>
                                <td>{{$i->pengarang}}</td>
                                <td>{{$i->penerbit}}</td>
                                <td>
                                    <a href="{{ route('riwayat.show', $i -> id)}}" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
                                    @if (auth()->user()->role == 1)
                                    <a href="{{ route('riwayat.edit', $i -> id)}}" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                                    {{-- <a href="{{ route('riwayat.hapus', $i -> id)}}" class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></a> --}}
                                    {{-- HAPUS --}}
                                    <button type="button" class="btn btn-sm btn-danger btn-circle" data-bs-toggle="modal" data-bs-target="#oke" data-bs-whatever="@mdo">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <div class="modal fade" id="oke" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel"><b>Hapus Data</b></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                YAKIN INGIN MENGHAPUS DATA... ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                                <a href="{{ route('riwayat.hapus', $i->id)}}" type="button" class="btn btn-success">Hapus</a>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    {{-- TAMBAH POINT --}}
                                    <button type="button" class="btn btn-primary btn-circle btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Tambah Point</b></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        {{-- <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data" action="{{ route('tambahpoint.store') }}" id="form">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Jumah Point</label>
                                                <input type="number" class="form-control" id="recipient-name">
                                            </div>
                                        </div> --}}
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                            <button type="submit" class="btn btn-primary" id="btn-submit">simpan</button>
                                        </form>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        {{-- @endif --}}

                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready( function () {
    let table = new DataTable('#table', {
    // options
    
});
});
</script>
@endsection