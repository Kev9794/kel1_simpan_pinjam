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
            'image' => 'image'
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('photo-profiles');
        }
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        
        return redirect("login")->with('success','Registration successfull! Please login first');
    }
    public function edit($id)
    {
        return view('user.manage-account', [
            'users' => User::where('id', $id)->get()
        ])->name('account');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::where('id',$id)->update($validatedData);
        
        return redirect('/home')->with('success','Data diri berhasil diperbarui');
    }
}