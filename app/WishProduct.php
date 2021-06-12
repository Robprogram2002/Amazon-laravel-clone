<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishProduct extends Model
{
    protected $table = 'wish_products';
    protected $guarded = [];

    public function wish_list()
    {
        return $this->belongsTo('App\WishList', 'wish_list_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }
}
