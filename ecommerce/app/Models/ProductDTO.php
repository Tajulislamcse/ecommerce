<?php

namespace App\Models;

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
    public function category()
    {
    	return $this->belongsTo('App\Models\CategoryDTO');
    }
    public function discount()
    {
    	return $this->belongsTo('App\Models\DiscountDTO');
    }
    public function inventory()
    {
    	return $this->belongsTo('App\Models\InventoryDTO');
    }
    public function images()
    {
    	return $this->hasMany('App\Models\ProductImageDTO');
    }
    public function comments()
    {
    	return $this->hasMany('App\Models\ProductCommentDTO');
    }
    public function reviews()
    {
    	return $this->hasMany('App\Models\ProductReviewDTO');
    }
    public function orders()
    {
    	return $this->hasMany('App\Models\PurchaseOrderDTO');
    }
}
