<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand_category extends Model
{
    public function brand_category(){
        return belongsTo('App\Category');
        return belongsTo('App\Brand');
    }
}