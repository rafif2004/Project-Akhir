@extends('template.admin')
@section('title', 'Baca')
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
                                    <th scope="col">KELAS</th>
                                    <th scope="col">ABSEN</th>
                                    <th scope="col">POIN</th>
                                    <th scope="col">Title</th>
                                </tr>
                            </thead>
                    <tbody>
                        {{-- @if (auth()->user()->role == 1) --}}
                            
                        @foreach($siswa as $s)
                            <tr>
                                <th scope="row">{{$loop->iteration }}</th>
                                {{-- @foreach($nama_siswa as $i => $item) --}}
                                <td>{{$s->nama}}</td>
                                <td>{{$s->kelas->kelas}}</td>
                                <td>{{$s->absen}}</td>
                                <td>{{$s->poin}}</td>
                                @if ($s->poin <= 10)
                                <td>Noob</td>
                                    
                                @endif
                                @if ($s->poin >= 11)
                                {{-- <td><img class="img-fluid" width="" height="" src="../../../public/image/default.jpg" alt="default"></td> --}}
                                    <td>Pro</td>
                                @endif
                                
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
