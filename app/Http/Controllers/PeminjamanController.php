<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Peminjaman;
use Barryvdh\DomPDF\Facade\Pdf;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::with('users')->get();
        return view('admin.peminjaman', ['peminjaman' => $peminjaman]);
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
        $peminjaman = Peminjaman::where('id_peminjaman', $id)->first();
        return view('admin.show-peminjaman', ['peminjaman' => $peminjaman]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjaman = Peminjaman::where('id_peminjaman', $id)->first();
        return view('admin.edit-peminjaman', ['peminjaman' => $peminjaman]);
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
            'tgl_pinjam' => 'required',
            'tenggat_waktu' => 'required',
            'user_id' => 'required',
        ]);
        
        Peminjaman::where('id_peminjaman',$id)->update($validatedData);
        
        return redirect('/peminjaman')->with('success','Peminjaman berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peminjaman::destroy('id_peminjaman',$id);
        return redirect('/peminjaman')->with('success','Peminjaman berhasil dihapus');
    }
    public function cetak()
    {
        $peminjaman = Peminjaman::with('users')->get();
        $pdf = PDF::loadview('admin.cetak-peminjaman', ['peminjaman' => $peminjaman]);
        return $pdf->stream();
    }
}