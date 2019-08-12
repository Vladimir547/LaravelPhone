<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand_category extends Model
{
    public function categories(){
        return belongsTo('App\Category');
    }
    public function brand(){
        return belongsTo('App\Brand');
    }
}
