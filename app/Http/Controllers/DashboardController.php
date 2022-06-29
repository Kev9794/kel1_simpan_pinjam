<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class DashboardController extends Controller
{
    public function index(){
        $peminjaman = Peminjaman::all();
        return view('admin.dashboard',['peminjaman' => $peminjaman]);
    }
}
