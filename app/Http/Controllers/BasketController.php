<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class BasketController extends Controller
{
    public function getIndex(){
        $cook_arr= $this->cook_arr();
        $cook_count = $this->cook_count();
        if($cook_arr == 0){
            return redirect('/');
        }else{

                return view('basket',compact('cook_arr', 'cook_count'));

        }

    }
    public function cook_arr(){

        $cook = (isset($_COOKIE['basket']))?$_COOKIE['basket']:0;
        if($cook!=0){
            $big_arr= explode(',', $cook);
            $tov=array();
            foreach($big_arr as $value){
                $arr = explode(':', $value);
                if($arr[0] != null){
                    $tov[$arr[0]] = Product::find($arr[0]);
                }
            }
        }else{
            $tov = 0;
        }
                return $tov;
    }
    private function cook_count(){//for count
        $cook = (isset($_COOKIE['basket']))?$_COOKIE['basket']:0;
        $big_arr= explode(',', $cook);
        $count = array();
        foreach($big_arr as $value){
            $arr = explode(':', $value);
            if(isset($arr[1])) {
                $count[$arr[0]] = $arr[1];
            }
        }
        return $count;
    }
    public function getDelete($id = null){
        $count_arr =$this->cook_count();
        $arr = $this->cook_arr();
        $str = '';
        unset($arr[$id]);
        //dd($arr);
        foreach($arr as $key=>$value){
            if($key != 0){
                $str.=$key.':'.$count_arr[$value->id].':'.$value->price.',';
            }
        }
        //dd($str);
        setcookie('basket',$str,time()+3600,'/');
        return redirect('basket');
    }
}
