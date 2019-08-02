<?php

namespace App\Providers\ViewComposers;

use App\Category;
use Illuminate\Contracts\View\View;

class ArtComposer {
    public function compose(View $view){
        $cat_objs = Category::all();
        $view ->with('cat_objs', $cat_objs);
}
}