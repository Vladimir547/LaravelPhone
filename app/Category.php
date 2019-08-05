<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products(){
        return $this->hasMany('App\Product', 'category_id');//conecction method
        return $this->hasMany('App\Brand_category', 'category_id');
    }
}
