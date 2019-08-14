<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand_category;


class BrandController extends Controller
{
    public function getIndex(){
        $objs=Brand_category::orderBy('id','DESC');
        dd($objs);
        //return view('posts', compact( 'objs'));

    }
}
