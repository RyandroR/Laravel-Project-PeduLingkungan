<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//kebalikan $fillable = $guarded
class Detail extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'IdUser',
        'Berat',
        'slug'
    ];

    public function User(){
        return $this->belongsTo(User::class, 'IdUser');
    }
}

