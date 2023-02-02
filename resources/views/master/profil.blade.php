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
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user"> </i> Profil</h6>
        </div>
            @foreach($siswa as $ok)
            <div class="card-body">
                <p class="mt-3">Nama Siswa = {{ $ok->nama }}</p>
                <p class="mt-3">Kelas = {{ $ok->kelas->kelas }}</p>
                <p class="mt-3">Absen = {{ $ok->absen }}</p>
                <p class="mt-3">Poin Bacaan = {{ $ok->poin }}</p>
            </div>
            @endforeach
      </div>
    </div>  
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
                    <td class="mt-3">Penngarang</td>
                    <td class="mt-3">Create</td>
                    <td class="mt-3">Action</td>
                </tr>
                @foreach($bacaan as $oke)
                <tr>
                        <th scope="row">{{$loop->iteration }}</th>
                        <td class="mt-3">{{ $oke->judul_buku }}</td>
                        <td class="mt-3">{{ $oke->pengarang }}</td>
                        <td class="mt-3">{{ $oke->tanggal_baca }}</td>
                    <td>
                    <form action="/profil/{{$oke->id}}" method="post">
					    @csrf  
                        @method('delete')
            	           <button class="btn btn-sm btn-danger btn-circle" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
             
        </div>
        </div>
    </div>
</div>
@endsection