<?php

namespace App\Http\Controllers;


use App\Http\Requests\OrderRequest;
use Auth;
use App\Order;
use App\Product;

class OrderController extends Controller
{
    public function postIndex(OrderRequest $r){
        //dd($r->all());
        $obj = new Order;
        $obj-> name = $r['name'];
        $obj -> phone = $r['phone'];
        $obj -> address = $r['address'];
        $obj -> comment = $r['comment'];
        $obj -> body = $_COOKIE['basket'];
        $obj -> ip = $_SERVER['REMOTE_ADDR'];
        $obj-> status = 'new';
        $obj-> user_id = Auth::guest() ? 0 : Auth::user()->id;
        $obj -> save();
        setcookie('basket','', time()-1, '/');
        return redirect("thankyoupage");
    }
    public function getAll(){
        $orders = Order::where('user_id', Auth::user()->id)->get;
    }
    public function getArchive(){
        $objs = Order :: where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();

        $arr_count=[];
        $arr=[];
        foreach($objs as $one){
            $one_arr= explode(',', $one-> body);
            $arr[$one->id]['order'] = $one;
            foreach($one_arr as $two){
                if(isset($two[0])) {
                    $arr[$one->id][$two[0]] = Product::find($two[0]);
                    $arr_count[$one->id][$two[0]] = $two[2];
                }
            }
        }
        return view('archive', compact('objs', 'arr', 'arr_count'));
    }
    
}
