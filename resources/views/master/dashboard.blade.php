@extends('template.admin')
@section('title', 'Dashboard')
@section('content-title')
Selamat Datang {{ auth()->user()->name }}
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
    <div class="col-xl-3 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Buku Yang Di Baca</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Buku Yang Di Pinjam</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
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
                        @foreach($baca as $i=> $item)
                            <tr>
                                <th scope="row">{{++ $i }}</th>
                                <td>{{$item -> penerbit}}</td>
                                <td>{{$item -> judul_buku}}</td>
                                <td>{{$item -> pengarang}}</td>
                                <td>
                                    <a href="{{ route('dashboard.show', $item -> id)}}" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
                                    <a href="{{ route('dashboard.edit', $item -> id)}}" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                                    <form action="/dashboard/destroy/{{$item->id}}" method="post">
										@csrf  
                                	    <button class="btn btn-sm btn-danger btn-circle" type="submit"><i class="fas fa-trash"></i></button>
									</form> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection