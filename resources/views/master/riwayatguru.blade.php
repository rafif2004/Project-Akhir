@extends('template.admin')
@section('title', 'Riwayat')
@section('content-title')
<h2>riwayat guru</h2>{{ auth()->user()->name }}
@endsection
@section('content')
<div class="row">
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
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection