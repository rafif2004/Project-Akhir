@extends('template.admin')
@section('title', 'Dashboard')
@section('content-title')
<div class="animate__animated animate__bounceInDown">
    Selamat Datang {{ auth()->user()->name }}
</div>
@endsection
@section('content')
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    @if ($message = Session::get('danger'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
<div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="card-body">
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">KELAS</th>
                                    <th scope="col">JUDUL BUKU</th>
                                    <th scope="col">EDIT</th>
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
                                <td>{{$i->kntl->kelas}}</td>
                                <td>{{$i->judul_buku}}</td>
                                <td>{{$i->pengarang}}</td>
                                <td>
                                    <a href="{{ route('riwayatguru.show', $i -> id)}}" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
                                    <a href="{{ route('riwayatguru.edit', $i -> id)}}" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                                    @if (auth()->user()->role == 1)
                                    <a href="{{ route('riwayatguru.hapus', $i -> id)}}" class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                                    @endif
                                    {{-- <form action="/dashboard/destroy/{{$item->id}}" method="post">
										@csrf  
                                        @method('delete')
                                	    <button class="btn btn-sm btn-danger btn-circle" type="submit"><i class="fas fa-trash"></i></button>
									</form>  --}}
                                </td>
                            </tr>
                        @endforeach
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
} );
</script>
@endsection