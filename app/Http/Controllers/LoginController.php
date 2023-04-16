<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;

use DB;

class LoginController extends Controller
{
    //

    public function customLogin(Request $request){
        $page_title = 'Page Login';
        $page_description = 'Some description for the page';
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);
        
        if($request->role == 'Mahasiswa'){
            $credentials = $request->only('email', 'password', 'role');
            
            if(Auth::attempt($credentials)){
                return redirect()->intended('/dashbaord')->with('success', 'Signed In Berhasil');
            }
        }
        // tambahkan pesan error untuk masing-masing kondisi gagal login
        else if($request->role == 'Dosen'){
            $credentials = $request->only('email', 'password', 'role');
            
            if(Auth::attempt($credentials)){
                return redirect()->intended('/dashbaord')->withSuccess('Signed In');
            }
        }

        else if($request->role == 'Admin'){
            $credentials = $request->only('email', 'password', 'role');
            
            if(Auth::attempt($credentials)){
                return redirect()->intended('/dashbaord')->withSuccess('Signed In');
            }
        }
        
        $action = __FUNCTION__;
        // tambahkan pesan error untuk login gagal
        return redirect('/login-index')->with('error', 'Login details are not valid')
            ->with(compact('page_title', 'page_description','action'));
    }
    

    public function logout(){
        // dd('test');
        Auth::logout();
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();

        request()->session()->flush();
 
        return redirect('/login-index');
    }

    public function registration()
    {
        return view('page.register');
    }
    
    public function index_login()
    {
        // dd('test');
        $page_title = 'Page Login';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('login.masuk', compact('page_title', 'page_description','action'));
    }
    public function index_register()
    {
        // dd('test');
        $page_title = 'Page Login';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('login.registrasi', compact('page_title', 'page_description','action'));
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'alamat' => 'required',
            'role' => 'required',
            'nim' => 'required_if:role,Mahasiswa',
            'nip' => 'required_if:role,Dosen',
            'password' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        //dd($request);
        return redirect('/login-index')->with('success', 'Registrasi berhasil, silahkan login untuk melanjutkan');
    }
 
        
    
    
    
    
    
    public function customRegistration(Request $request)
    {  
        
        $validatedData = $request->validate([
            'nama_petugas' => 'required',
            'alamat' => 'required',
            'role' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);       
            
        
        User::create($validatedData);
                  
        return redirect("/login-index")->withSuccess('You have signed-in');
    }
 
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    } 



}