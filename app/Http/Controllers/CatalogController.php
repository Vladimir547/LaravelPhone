<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Brand_category;

class CatalogController extends Controller
{
    /**
     * @param null $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex($id = null){
        $brands = Brand_category::where('category_id', $id)-> get();
        $category = Category::find($id);
        $objs = Product::where('category_id', $id)->paginate(12);
        if (view()->exists('includes.' . $id))
        {
            $vi = 'includes.'.$id;
        }else{
            $vi = 'includes.default';
        }
    return view('posts', compact( 'objs', 'vi', 'brands', 'category'));
    }

}
