<?php

namespace App\Http\Controllers;

use App\Models\Simpanan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $simpanan = Simpanan::with('users')->get();
        return view('admin.simpanan', ['simpanan' => $simpanan]);
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
        $simpanan = Simpanan::where('id_simpanan', $id)->first();
        return view('admin.show-simpanan', ['simpanan' => $simpanan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $simpanan = Simpanan::where('id_simpanan', $id)->first();
        return view('admin.edit-simpanan', ['simpanan' => $simpanan]);
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
            'tgl_simpan' => 'required',
            'saldo' => 'required',
            'user_id' => 'required',
        ]);
        
        Simpanan::where('id_simpanan',$id)->update($validatedData);
        
        return redirect('/deposit')->with('success','Simpanan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Simpanan::destroy('id_simpanan',$id);
        return redirect('/deposit')->with('success','Simpanan berhasil dihapus');
    }
    public function cetak()
    {
        $simpanan = Simpanan::with('users')->get();
        $pdf = PDF::loadview('admin.cetak-simpanan', ['simpanan' => $simpanan]);
        return $pdf->stream();
    }
}
