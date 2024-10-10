<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function payment(){
        return $this->belongsTo(Payment::class);
    }
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function lga(){
        return $this->belongsTo(Lga::class);
    }
    public function product(){
        return $this->belongsToMany(Product::class);
    }
}
