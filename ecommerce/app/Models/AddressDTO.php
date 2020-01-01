<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddressDTO extends Model
{
    protected $fillable=[
    'street',
    'zipcode',
    'city',
    'country'
    ];
}
