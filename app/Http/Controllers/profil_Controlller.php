<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\bacaan;
use App\Models\kelas;
use App\Models\siswa;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profil_Controlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = siswa::where('id_user', Auth()->user()->id)->get();
        $bacaan = bacaan::where('nama_siswa', Auth()->user()->id)->get();
        // return $siswa;
        return view('master.profil', compact('siswa', 'bacaan'));
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
        // siswa::find($id);->dd()
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bacaan = bacaan::find($id);
        return view('master.profiledit', compact('bacaan'));
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
        //validasi data
        $this->validate($request, [
            'judul_buku' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'ringkasan' => 'required',
            'tanggal_baca' => 'required'
        ],);

        //insert data
        $bacaan = bacaan::find($id);
        $bacaan->judul_buku = $request->judul_buku;
        $bacaan->pengarang = $request->pengarang;
        $bacaan->penerbit = $request->penerbit;
        $bacaan->ringkasan = $request->ringkasan;
        $bacaan->tanggal_baca = $request->tanggal_baca;
        $bacaan->save();

        Session::flash('success', "Data Berhasil Di Edit");
        return redirect('/profil');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bacaan = bacaan::find($id);
        $bacaan->delete();
        Session::flash('danger', "Data Berhasil Di Hapus");
        return redirect('/profil');
    }
}
