<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function brand(){
        return $this->hasMany('App\Product', 'brand_id');
        return $this->hasMany('App\Brand_category', 'brand_id');
    }
}
