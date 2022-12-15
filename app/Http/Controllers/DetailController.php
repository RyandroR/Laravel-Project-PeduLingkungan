<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use Cookie;

class DetailController extends Controller
{
    public function index(){
        return view('donasi', [
            "title" => "Donasi",
            "theme" => $_COOKIE["theme"],
            "data" => Detail::all()
        ]);
    }

    public function show(Detail $detail){
        return view('detail', [
            "title" => "Detail Page",
            "theme" => $_COOKIE["theme"],
            "data" => $detail
        ]);
    }
}
