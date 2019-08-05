<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CatalogController extends Controller
{
    /**
     * @param null $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex($id = null){
    $objs = Product::where('category_id', $id)->paginate(12);
        if (view()->exists('includes.' . $id))
        {
            $vi = 'includes.'.$id;
        }else{
            $vi = 'includes.default';
        }

    return view('posts', compact( 'objs', 'vi'));
    }
}
