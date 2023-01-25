<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
class DonationController extends Controller
{
    public function index(){
        return view('donation.user.index', [
            "title" => "Donasi"
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'user_id' => ['required'],
            'weight' => ['required','gt:0'],
            'image' => ['required','mimes:jpg,png,jpeg'],
            'location' => ['required','min:5']
        ]);

        if($request->file('image')){
            $validated['image'] = $request->file('image')->store('post-images');
        }
        $request->file('image')->store('post-images');

        Detail::create($validated);
        $request->session()->flash('success', 'Thank You for your donation');
        return redirect('/');
    }
}
