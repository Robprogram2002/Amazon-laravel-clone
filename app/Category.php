<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $guarded = [];

    public function subcategories() 
    {
        return $this->hasMany('App\SubCategory')->orderBy('id','desc');
    }

    public function products()
    {
        return $this->hasMany('App\Product')->orderBy('id', 'desc');
    }
}
