<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\bacaan;
use App\Models\siswa;
use Illuminate\Http\Request;

class riwayat_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlah = bacaan::all()->count();
        $nama_siswa=siswa::all();
        $siswa = siswa::where('id_user', auth()->user()->id)->first();
        // dd(auth()->user()->id);
        $baca = bacaan::all(); 
        // $baca = bacaan::all(); {semua siswa}
        // $baca = bacaan::Where('id_siswa', $siswa->id)->get(); {siswa tertentu / 1 siswa}
        return view('master.riwayat.riwayat', compact('jumlah', 'nama_siswa', 'baca'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('master.riwayat.riwayat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bacaan=bacaan::find($id);
        //eror gjls
        // $siswa=$bacaan->siswa()->get();
        // $user=$bacaan->user()->get();
        return view('master.riwayat.riwayatshow', compact('bacaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bacaan=bacaan::find($id);
        return view ('Master.riwayat.riwayatedit', compact('bacaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message=[
            'required'=>':attribute harus di isi yaa...',
            'min'=>':attribute minimal :min karakter ya...',
            'max'=>':attribute maksimal :max karakter ya...',
            'numeric'=>':attribut harus di isi angka ya...'
        ];

        //validasi data
        $this->validate($request,[
            'judul_buku'=>'required',
            'pengarang'=>'required',
            'penerbit'=>'required',
            'ringkasan'=>'required',
            'tanggal_baca'=>'required'
        ], $message); 

        //insert data
        $bacaan=bacaan::find($id);
        $bacaan->judul_buku = $request ->judul_buku;
        $bacaan->pengarang = $request ->pengarang;
        $bacaan->penerbit = $request ->penerbit;
        $bacaan->ringkasan = $request ->ringkasan;
        $bacaan->tanggal_baca = $request ->tanggal_baca;
        $bacaan->save();

        Session::flash('success', "Data Berhasil Di Edit");
        return redirect('/riwayat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        $bacaan=bacaan::find($id);
        $bacaan->delete();
        Session::flash('danger', "Data Berhasil Di Hapus");
        return redirect('/riwayat');
    }
}
