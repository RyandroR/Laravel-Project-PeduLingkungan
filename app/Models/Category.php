<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'timestamps'
    ];

    public function ItemDetail(){
        return $this->belongsToMany(ItemDetail::class, 'point_shops', 'category_id', 'item_detail_id');
    }
}
