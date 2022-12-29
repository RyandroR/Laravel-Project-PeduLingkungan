<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register.index', [
            "title" => "Register",
            "theme" => $_COOKIE["theme"]
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required','max:64'],
            'email' => ['required','email:dns','unique:users'],
            'password' => ['required']
        ]);

        $validated['password'] = bcrypt( $validated['password']);

        User::create($validated);
        $request->session()->flash('success', 'Yippee');
        return redirect('/login');
    }
}
