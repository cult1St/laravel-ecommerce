<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public function payment(){
        return $this->has(Payment::class);
    }
    public function trans_details(){
        return $this->hasMany(Trans_details::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
