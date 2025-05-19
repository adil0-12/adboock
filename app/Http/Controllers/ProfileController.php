<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $profiles=Profile::paginate(9);
        return view('profile.Profiles',compact('profiles'));
     }
    

     public function show(Request $req){
        $profile = Profile::FindOrFail($req->id);
        
        return view('profile.detailes',compact('profile'));

     }
}
