<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public function productReview(){
        return $this->hasMany(ProductReview::class);
    }

    public function product(){
        return $this->belongsToMany(Product::class,'product_reviews');
    }
}
