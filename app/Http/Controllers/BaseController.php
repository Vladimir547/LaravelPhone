<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Product;

class BaseController extends Controller
{
    public function getindex(){
        $objs=product::orderBy('id','DESC')->paginate(3);
        //dd($objs);
        return view('index',compact('objs'));
    }
}
