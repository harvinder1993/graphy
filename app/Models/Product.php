<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [ 
        'name', 'description','quantity','price','model_no','user_id'
    ];
    public function user(){ 
       return $this->belongsTo(User::class);
    }
}
