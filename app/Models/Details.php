<?php

namespace App\Models;

class Details
{
    static $data = [[
        "waktu" => "10:00",
        "berat" => 34,
        "slug" => "testing1"
    ],[
        "waktu" => "12:00",
        "berat" => 34,
        "slug" => "testing2"
    ]];

    public static function all(){
        return collect(self::$data);
    }

    public static function find($slug){ 
        
        $data = static::all();

        return $data->firstWhere('slug', $slug);
    }

}
