<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'stock',
    ];

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
