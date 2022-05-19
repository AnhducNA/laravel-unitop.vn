<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['name, content, price, product_cat_id, user_id, thumbnail'];

    function FeaturedImages()
    {
        return $this->hasOne('App\Models\FeaturedImages');
    }

    function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
