<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable =[
        'rt_user_id',
        'rt_product_id',
        'rt_star',
    ];

    public function getProduct(){
        return $this->hasOne(Product::class, 'id', 'rt_product_id')->select(array('id', 'name'));
    }

    public function getUser(){
        return $this->hasOne(User::class,'id','rt_user_id');
    }
}
