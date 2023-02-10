<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\siswa;
use App\Models\User;
use Illuminate\Http\Request;

class register_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = kelas::all();
        return view('Login.register', compact('kelas'));
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
            'required'=>':attribute HARUS DI ISI',
            'unique'=>':attribute SUDAH DIGUNAKAN',
        ];

        $this->validate($request, [
            'name' => 'required',
            'Email' => 'required|unique:users',
            'Kelas' => 'required',
            'absen' => 'required',
            'password' => 'required',
        ], $message);

        $user = User::create(request(['name', 'email', 'password']));
        siswa::create([
            'nama' => $user->name,
            'absen' => $request->absen,
            'id_user' => $user->id,
            'id_kelas' => $request->kelas
        ]);

        return redirect()->to('/')->with(['register_succes' => $user->email]);
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
