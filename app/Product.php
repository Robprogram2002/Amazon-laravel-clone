<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [];

    public function comments() 
    {
        return $this->hasMany('App\Comment')->orderBy('id', 'desc');
    }

    public function questions()
    {
        return $this->hasMany('App\Question')->orderBy('id', 'desc');
    }

    public function seller()
    {
        return $this->belongsTo('App\Seller', 'seller_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory', 'subcategory_id');
    }
}
