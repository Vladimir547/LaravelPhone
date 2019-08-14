<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Brand_category extends Model
{
    public function categories(){
        return $this -> belongsTo('App\Category', 'category_id');
    }
    public function brand(){
        return $this -> belongsTo('App\Brand', 'brand_id');
    }
}
