<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ItemController extends Controller
{
    public function getItem($id){
        $objs = Product::find($id);
        return view('item', compact('objs'));
    }
}
