<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SimpanPinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$anggota = DB::table('anggota')->get();
        return view('user.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_anggota'=>'required',
            'nama'      =>'required',
            'email'     =>'required',
            'password'  =>'required',
            'no_telp'   =>'required',
            'alamat'    =>'required',
        ]);
        Anggota::create($request->all());

        return redirect()->route('auth.register')
        ->with('success','Anggota Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.detail',compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = DB::table('anggota')->where('id',$id)->first();;
        return view('anggota.edit');
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
        $request->validate([
            'id_anggota'=>'required',
            'nama'      =>'required',
            'email'     =>'required',
            'password'  =>'required',
            'no_telp'   =>'required',
            'alamat'    =>'required',

        ]);
        Anggota::find($id)->update($request->all());

        return redirect()->route('anggota.index')
        ->with('success','Anggota Berhasil Diupdate');
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
