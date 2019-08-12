<?php

namespace App\Http\Controllers;


use App\Http\Requests\OrderRequest;

use App\Order;

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
        $obj-> user_id = '1';
        $obj -> save();
        setcookie('basket','', time()-1, '/');
        return redirect("thankyoupage");
    }
}
