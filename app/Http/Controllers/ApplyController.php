<?php

namespace App\Http\Controllers;

use App\Models\Angsuran;
use App\Models\Peminjaman;
use App\Models\Pengambilan;
use App\Models\Simpanan;
use Illuminate\Http\Request;


class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.apply', 
        [
            "title" => "apply",
            "menu" => "peminjaman",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.apply', 
        [
            "title" => "apply"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jumlah' => 'required',
            'tgl_pinjam' => 'required',
            'tenggat_waktu' => 'required',
            'user_id' => 'required',
        ]);

        Peminjaman::create($validatedData);
        
        return redirect('apply')->with('success','Peminjaman berhasil diajukan');
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

    public function penarikan(){
        return view('user.penarikan', 
        [
            "title" => "apply",
            "menu" => "penarikan"
        ]);
    }

    public function tarik(Request $request)
    {
        $validatedData = $request->validate([
            'jumlah' => 'required',
            'tgl_ambil' => 'required',
            'saldo' => 'required',
            'user_id' => 'required',
        ]);

        Pengambilan::create($validatedData);
        
        return redirect('apply')->with('success','Penarikan berhasil diajukan');
    }

    public function simpanan(){
        return view('user.simpanan', 
        [
            "title" => "apply",
            "menu" => "simpanan"
        ]);
    }

    public function simpan(Request $request)
    { 
        $request->validate([
            'jumlah' => 'required',
            'tgl_simpan' => 'required',
            'user_id' => 'required',
        ]);

        $simpanan = new Simpanan;
        $simpanan->jumlah = $request->get('jumlah');
        $simpanan->tgl_simpan = $request->get('tgl_simpan');
        $simpanan->saldo = $request->get('jumlah');
        $simpanan->user_id = $request->get('user_id');
        $simpanan->save();
        
        return redirect('simpanan')->with('success','Simpanan berhasil diajukan');
    }

    public function angsuran(){
        return view('user.angsuran', 
        [
            "title" => "apply",
            "menu" => "angsuran"
        ]);
    }

    public function angsur(Request $request)
    {
        $request->validate([
            'jumlah' => 'required',
            'tgl_angsur' => 'required',
            'sisa_tenggat_waktu' => 'required',
            'user_id' => 'required',
        ]);

        $angsuran = new Angsuran;
        $angsuran->jumlah = $request->get('jumlah');
        $angsuran->tgl_angsur = $request->get('tgl_angsur');
        $angsuran->jumlah_sisa = $request->get('jumlah');
        $angsuran->user_id = $request->get('user_id');
        $angsuran->save();
        
        return redirect('angsuran')->with('success','Angsuran berhasil diajukan');
    }
}
