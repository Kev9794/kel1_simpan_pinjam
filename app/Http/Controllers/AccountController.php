<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Rules\MatchOldPassword;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id',auth()->user()->id)->first();
        return view('user.account', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('id',auth()->user()->id)->first();
        return view('user.account', [
            'users' => $users
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
        return view('user.account', [
            'users' => User::where('id', $id)->get()
        ]);
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
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email:dns|unique:users',
            'no_telp' => 'required',
            'alamat' => 'required',
            'image' => 'image'
        ]);
        $user = User::where('id',$id)->first();
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('photo-profiles');
        }

        //$image_name = $request->file('image')->store('photo-profiles');
        
        $user->name = $request->get('name');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->no_telp = $request->get('no_telp');
        $user->alamat = $request->get('alamat');
        //$user->image = $image_name;
        $user->save();

        //User::where('id',$id)->update($validatedData);
        
        return redirect('/account')->with('success','Akun berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id',$id)->first();
        if($user->image){
            Storage::delete($user->image);
        }
        User::destroy($user->id);
        return redirect('/home')->with('success','Akun berhasil dihapus');
    }

    public function change(Request $request)
    {
        $validatedData = $request->validate([
            'password_lama' => ['required', new MatchOldPassword],
            'password' => 'required|min:6',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password)]);

        return redirect('/account')->with('message','Password berhasil diperbarui');
    }
}
