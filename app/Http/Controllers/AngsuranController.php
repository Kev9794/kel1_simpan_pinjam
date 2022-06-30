<?php

namespace App\Http\Controllers;

use App\Models\Angsuran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AngsuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $angsuran = Angsuran::with('users')->get();
        return view('admin.angsuran', ['angsuran' => $angsuran]);
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
        $angsuran = Angsuran::where('id_angsuran', $id)->first();
        return view('admin.show-angsuran', ['angsuran' => $angsuran]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $angsuran = Angsuran::where('id_angsuran', $id)->first();
        return view('admin.show-angsuran', ['angsuran' => $angsuran]);
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
            'jumlah_sisa' => 'required',
            'tgl_angsur' => 'required',
            'sisa_tenggat_waktu' => 'required',
            'user_id' => 'required',
        ]);
        
        Angsuran::where('id_angsuran',$id)->update($validatedData);
        
        return redirect('/cicilan')->with('success','Angsuran berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Angsuran::destroy('id_angsuran',$id);
        return redirect('/cicilan')->with('success','Angsuran berhasil dihapus');
    }
    public function cetak()
    {
        $angsuran = Angsuran::with('users')->get();
        $pdf = PDF::loadview('admin.cetak-angsuran', ['angsuran' => $angsuran]);
        return $pdf->stream();
    }
}
