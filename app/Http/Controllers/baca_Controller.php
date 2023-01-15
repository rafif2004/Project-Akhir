<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\bacaan;
use App\Models\siswa;

class baca_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master.baca');
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $baca=bacaan::find($id);
        return view('master.baca', compact('baca'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
            'required'=>':attribute harus di isi yaa...',
            'min'=>':attribute minimal :min karakter ya...',
            'max'=>':attribute maksimal :max karakter ya...',
            'numeric'=>':attribut harus di isi angka'
        ];

        //validasi data
        $this->validate($request,[
            'judul_buku'=>'required',
            'pengarang'=>'required',
            'penerbit'=>'required',
            'ringkasan'=>'required',
            'tanggal_baca'=>'required'
        ], $message); 
        // dd($request->all());
        //insert data
        $siswa = siswa::where('id_user', auth()->user()->id)->first();
        bacaan::create([
            'id_siswa' => $siswa->id,
            'nama_siswa' => auth()->user()->id,
            'judul_buku'=> $request -> judul_buku,
            'pengarang'=> $request -> pengarang,
            'penerbit'=> $request -> penerbit,
            'ringkasan'=> $request -> ringkasan,
            'tanggal_baca'=> $request -> tanggal_baca
        ]);

        Session::flash('success', "Data Berhasil Di Tambahkan Silakan Check Di Riwayat");
        return redirect('/baca');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
