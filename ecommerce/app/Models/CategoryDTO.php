<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryDTO extends Model
{
    protected $fillable=[
    'name',
    'isActive'
    ];
    public function products()
    {
    	return $this->hasMany('App\Models\ProductDTO');
    }
}
