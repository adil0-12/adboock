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
     public function create(Request $req){
      $this->validate($req, [
         'name' => 'required|min:3|max:10',
         'email' => 'required|email|unique:profiles',
         'pass'=>'min:6|required'
     ]);
     
      $new = new Profile();
      $new->name=$req->name;
      $new->email=$req->email;
      $new->password=$req->pass ;
      $new->description=$req->desc;
      $new->save();
    
      return Redirect()->route('profiles.index')->with('success', 'Profile created successfully!');
     }
}
