<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    public function lgas(){
        return $this->hasMany(Lga::class);
    }
    public function order(){
        return $this->hasMany(Order::class);
    }
}
