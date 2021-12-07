<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;
class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'id','name', 'slug', 'status', 'price', 'sale_price',
        'image', 'list_image', 'category_id', 'content', 'color'
    ]; // làm đầy vào
    public function cat()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }
    public function comment()
    {
        return $this->hasOne(Comment::class,'id','id_product');
    }
    public function getComment(){
        return $this->hasMany(Comment::class,'id','comments_product_id');
    }
    public function scopeSearch($query)
    {
        if($keyword = request()->keyword){
            $query = product::orderBy('created_at','DESC')->where('name','like','%'.$keyword.'%');

        }
        return $query;
    }
}
