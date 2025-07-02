<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function updatePassword(Request $req){
        $req->validate([
            'current_password'=>'required',
            'password'=>'required|confirmed|min:8',
        ]);
        if(Hash::check($req->current_password,auth()->user()->password)){
            $user=User::find(auth()->id());
            $user->password=$req->password;
            $user->save();
            return redirect()->back()->with(['success'=>'Password Updated Successfully!']);
        }else{
            return redirect()->back()->with(['error'=>'Current Password does not match!']);
        }
    }
}
