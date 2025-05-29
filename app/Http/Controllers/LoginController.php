<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login(){
        return view('login');
    }


    public function Signin(Request $req){
       
        $login = $req->Email;
        $password = $req->Pass;
        $credential = ['email' => $login, 'password' => $password];
        
        // dd(Auth::attempt($credential));
        if(Auth::attempt($credential)){
            $id = Auth::id();
            return redirect()->route('profile.show', $id)->with('success', 'Profile created successfully!');
        }
        else{
            return redirect()->route('Login')->with('error', 'Invalid credentials');
        }
    }

    public function logout(){
        session()->flush();
        Auth::logout();
        return redirect()->route('Login');
    }

}
