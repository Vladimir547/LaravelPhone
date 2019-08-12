<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products(){
        return $this->hasMany('App\Product', 'category_id');//conecction method

    }
    public function brand_categories(){
        return $this->hasMany('App\Brand_category', 'category_id');
    }
}
