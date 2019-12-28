<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductReviewDTO extends Model
{
    //
    protected $fillable=[
    'rating',
    'reviewer'
    'email',
    'subject',
    'message'

    ];
    public function product()
    {
    	return $this->belongsTo('App\Models\ProductDTO');
    }
}
