<?php

namespace App\Http\Controllers;

use App\Models\Pengambilan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PengambilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengambilan = Pengambilan::with('users')->get();
        return view('admin.pengambilan', ['pengambilan' => $pengambilan]);
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
        $pengambilan = Pengambilan::where('id_pengambilan', $id)->first();
        return view('admin.show-pengambilan', ['pengambilan' => $pengambilan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengambilan = Pengambilan::where('id_pengambilan', $id)->first();
        return view('admin.show-pengambilan', ['pengambilan' => $pengambilan]);
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
        $validatedData = $request->validate([
            'jumlah' => 'required',
            'tgl_ambil' => 'required',
            'saldo' => 'required',
            'user_id' => 'required',
        ]);
        
        Pengambilan::where('id_pengambilan',$id)->update($validatedData);
        
        return redirect('/pengambilan')->with('success','Penarikan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengambilan::destroy('id_pengambilan',$id);
        return redirect('/pengambilan')->with('success','Penarikan berhasil dihapus');
    }
    public function cetak()
    {
        $pengambilan = Pengambilan::with('users')->get();
        $pdf = PDF::loadview('admin.cetak-pengambilan', ['pengambilan' => $pengambilan]);
        return $pdf->stream();
    }
}
