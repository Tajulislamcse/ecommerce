<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscountDTO extends Model
{
    //
    protected $fillable=[
    'title',
     'amount',
     'type'
    ];
       public function products()
    {
    	return $this->hasMany('App\Models\ProductDTO');
    }
}
