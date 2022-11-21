@extends('template.admin')
@section('title', 'Dashboard')
@section('content-title','Selamat Datang "Nama Murid"')
@section('content')
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Buku Yang Di Baca</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4">
            <div class="col-lg-4">
                <div style="font-weight: 500; " class="mt-3"> 
                    <a href="" class="btn btn-success">TambahData</a>
                </div>
                </div>
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">JUDUL BUKU</th>
                            <th scope="col">PENGARANG</th>
                            <th scope="col">EDIT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Penceng</td>
                            <td>Buku</td>
                            <td>Samson</td>
                            <td>
                            <a href="" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
                            <a href="" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    {{-- @foreach($data as $i=> $item)
                        <tr>
                            <th scope="row">{{++ $i }}</th>
                            <td>{{$item -> nama}}</td>
                            <td>{{$item -> nisn}}</td>
                            <td>{{$item -> alamat}}</td>
                        <td>
                            <a href="{{ route('mastersiswa.show', $item -> id)}}" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
                            <a href="{{ route('mastersiswa.edit', $item -> id)}}" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('mastersiswa.hapus', $item -> id)}}" class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                        </td>
                        </tr>
                    @endforeach --}}
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
@endsection