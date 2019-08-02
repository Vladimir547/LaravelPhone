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
    $cat = Category::find($id);
    $objs = Product::where('category_id', $cat->id)->paginate(12);
        if (view()->exists('includes.' . $cat->id))
        {
            $vi = 'includes.'.$cat->id;
        }else{
            $vi = '/posts';
        }
    return view('posts', compact('cat', 'objs', 'vi'));
    }
}
