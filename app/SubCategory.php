<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'sub_categories';

    protected $guarded = [];

    public function products()
    {
        return $this->hasMany('App\Product', 'subcategory_id')->orderBy('id', 'desc');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
