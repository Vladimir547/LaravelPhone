<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function catalogs(){
        return belongsTo('App\Cataqlog');
        return belongsTo('App\Brand');
    }
}
