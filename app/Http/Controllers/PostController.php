<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand_category;

class PostController extends Controller
{
    public function getPosts(){
        $objs = Product::orderBy('id', 'DESC')->paginate(12);
        $vi = 'includes.default';
        $brands = Brand_category::orderBy('id', 'ASC')-> paginate(15);
        $category = Category::find('id');

        return view('posts', compact('objs', 'vi', 'brands', 'category'));
    }
}
