<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\bacaan;
use App\Models\kelas;
use App\Models\siswa;
use App\Models\wali_kelas;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class dashboard_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role == 1){
            $siswa = wali_kelas::where('id_user', auth()->user()->id)->first();
        } else if (auth()->user()->role == 2){
            $siswa = siswa::where('id_user', auth()->user()->id)->first();
        }
        

        $baca = bacaan::where('id_kelas', '=', $siswa->id_kelas)->get();
        $nama = siswa::where('id_kelas', '=', $siswa->id_kelas)->get();
        $baca_siswa = bacaan::where('id_siswa', $siswa->id)->get()->count();
        // $baca = bacaan::Where('id_siswa', $siswa->id)->get(); {siswa tertentu / 1 siswa}
        return view('Master.dashboard.dashboard' , compact('siswa', 'baca', 'nama', 'baca_siswa'));
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $siswas = siswa::find($id);
        $bacaan = bacaan::where('id_siswa', $siswas->id)->get();
        // return $siswa;
        return view('Master.dashboard.dashboardshow', compact('siswas', 'bacaan'));
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
        return view ('Master.dashboard.dashboardedit', compact('bacaan'));
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
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//HARUS PAKE FORM
    {
        // $bacaan=bacaan::find($id);
        // $bacaan->delete();
        // Session::flash('danger', "Data Berhasil Di Hapus");
        // return redirect('/dashboard');
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
        return redirect('/dashboard');
    }
}
