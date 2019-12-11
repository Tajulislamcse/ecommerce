<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDTO extends Model
{
    
    protected $fillable=[
    	'name',
    	'sku',
    	'image',
    	'category',
    	'description',
    	'price',
    	'discount'
    ];
}
