<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        
        return redirect("login")->with('success','Registration successfull! Please login first');
    }
}
