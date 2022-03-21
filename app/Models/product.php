<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['name_product', 'price', 'sale','category_id','image', 'status', 'product_id'];
    public function Menu()
    {
        return $this->belongsTo(Category_product::class,'category_id','id');
    }
    public function scopeSearch($query){
        $category = request('category_id') ?? null;
        $key = request('key') ?? null;
        if(request('key')){
            $query = $query->where('name_product','like','%'.$key.'%');
        }
        if(request('category_id')){
            $query = $query->where('category_id', '=', $category);
        }
        if(request('key') && request('category_id')){
            $query = $query->where([
                [
                    'name_product','like','%'.$key.'%'
                ],
                [
                    'category_id', '=', $category
                ]
            ]);
        }
        return $query;
    }

}
