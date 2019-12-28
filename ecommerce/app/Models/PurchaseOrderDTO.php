<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrderDTO extends Model
{
    protected $fillable=[
    'userId',
    'date',
    'status',
    'billingAddressId',
    'shippingAddressId'
    ];
    public function product()
    {
    	return $this->belongsTo('App\Models\ProductDTO');
    }
    public function users()
    {
    	return $this->hasMany('App\Models\User');
    }
}
