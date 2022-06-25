<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect("apply")
            ->with('success', 'User Berhasil login');

        }
  
        return redirect("login")->with('success', 'Login details are not valid');
       
    }

    public function register()
    {
        return view('auth.register');
    }
      
    public function customRegistration(Request $request)
    {  
        
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
    
        return redirect("login");
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'no_telp' => $data['no_telp'],
        'alamat' => $data['alamat'],
      ]);
    }    
    
    public function apply()
    {
        if(Auth::check()){
            return view('user.apply');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
        
    }
}
