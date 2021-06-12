<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = 'sellers';

    protected $guarded = [];

    public function products() 
    {
        return $this->hasMany('App\Product')->orderBy('id', 'desc');
    }
}
