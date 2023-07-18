<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table        = "customers";
    protected $guarded      = [];

    public function product(){
        return $this->belongsToMany(Products::class,'customer_product','customer_id','product_id');
    }
}
