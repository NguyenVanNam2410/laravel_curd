<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_product extends Model
{
    use HasFactory;


    public function Menu()
    {
        return $this->hasMany(product::class,'category_id','id');
    }
}
