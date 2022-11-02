<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Details;


class DetailController extends Controller
{
    public function index(){
        return view('donasi', [
            "title" => "Donasi",
            "theme" => $_COOKIE["theme"],
            "data" => Details::all()
        ]);
    }

    public function show($slug){
        return view('detail', [
            "title" => "Detail Page",
            "theme" => $_COOKIE["theme"],
            "data" => Details::find($slug)
        ]);
    }
}
