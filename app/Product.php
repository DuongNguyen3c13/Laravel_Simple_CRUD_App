<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id', 'name', 'price', 'discount_price', 'status', 'image',
    ];

     function category() {
        return $this->belongsTo('App\Category','category_id');
    }
}
