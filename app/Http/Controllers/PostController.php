<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Product;

class PostController extends Controller
{
    public function getPosts(){
        $objs = Product::orderBy('id', 'DESC')->paginate(12);
        return view('posts', compact('objs'));
    }
}
