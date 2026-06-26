<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class userController extends Controller
{
    public function indexLogin(){
        return view("login");
    }
    
    public function login(Request $request){
        $validate = $request->validate([
            'nim' => 'required|numeric|digits_between:10,17',
            'password' => 'required|min:8|max:16',
        ]);

        $auth = Auth::attempt([
            "npm" => $request->nim,
            "password" => $request->password
        ]);
        if($auth){
            $user = Auth::user();
            Session::put("name",$user->name);
            return redirect()->route("home");
        }else{
            return Hash::make("12345678");
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
