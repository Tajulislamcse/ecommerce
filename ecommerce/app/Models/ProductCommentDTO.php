<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCommentDTO extends Model
{
    //
    protected $fillable=[
    'name',
    'email',
    'phone',
    'message'
    ];
    public function product()
    {
    	return $this->belongsTo('App\Models\ProductDTO');
    }
}
