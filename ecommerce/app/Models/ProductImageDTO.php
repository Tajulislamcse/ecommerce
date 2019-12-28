<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImageDTO extends Model
{
    //
    protected $fillable=[
    'url',
    'productId'
    ];
    public function product()
    {
    	return $this->belongsTo('App\Models\ProductDTO');
    }
}
