<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login.index', [
            "title" => "Login",
            "theme" => $_COOKIE["theme"]
        ]);
    }



    public function authenticate(Request $request){
         
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => ['required','min:5','max:20']
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        };

        return back()->with('loginerror', 'login failed');

    }
    
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        return redirect('/');
    }

}
