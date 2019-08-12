<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function product(){
        return $this->hasMany('App\Product', 'brand_id');
    }
    public function brand_categories(){
        return $this->hasMany('App\Brand_category', 'brand_id');
    }
}
