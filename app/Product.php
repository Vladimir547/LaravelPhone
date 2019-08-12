<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function catalogs(){
        return belongsTo('App\Category');
    }
    /*public function brand_categories(){
        return belongsTo('App\Brand_category');
    }*/
}
