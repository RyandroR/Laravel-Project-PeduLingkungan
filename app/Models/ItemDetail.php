<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemDetail extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'timestamps'
    ];

    public function Category(){
        return $this->belongsToMany(Category::class, 'item_detail_id' ,'point_shops', 'category_id');
    }
}
