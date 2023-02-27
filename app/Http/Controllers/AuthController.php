<?php

namespace App\Http\Controllers;

use App\Http\Requests\adminlogin;
use App\Http\Requests\adminreg;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
   public function adminlogin(adminlogin $request){
    $fieldType = filter_var($request->userdetail, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
    $user = User::where([$fieldType=>$request->userdetail])->first();
    if(!$user){
     return response()->json();
    }else{
        if(Auth::attempt([$fieldType=>$request->userdetail, 'password'=>$request->password]) && $user->is_admin == true ){
            return response()->json(['success'=>'you have successfully logged in']);
        }else{
           return response()->json(['error'=>'please enter the correct details']);
        }
    }


   }


   public function adminregister(adminreg $request){
         User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'is_admin'=>1,
            'password'=>Hash::make($request->password),
         ]);
   }


   public function Logout() {
        Auth::logout();
        Session::invalidate();
        Session::flush();
        return redirect('/');

    }
}
