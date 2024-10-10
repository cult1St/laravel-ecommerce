<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function ratings(){
        return $this->hasMany(Rating::class);
    }
    
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function trans_details(){
        return $this->hasMany(Trans_details::class);
    }
    public function orders(){
        return $this->belongsToMany(Order::class);
    }
}
