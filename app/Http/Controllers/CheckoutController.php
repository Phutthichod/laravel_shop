<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CheckoutController extends Controller
{
    public function __construct(){
        $this->middleware('check.login');
    }
    public function index(Request $req){
        $product = Product::findAll();
        foreach($product as $key=>$val){
                session()->put("prod_$key",$req->get("prod_$key"));
        }
        return view('checkout');
    }
     function toJSON(){
        $product = Product::findAll();
        $prodList = array();
        foreach($product as $key=>$val){
            if(session()->get("prod_$key")>0)
                $prodList[] = ['prod' => $val,'num' => session()->get("prod_$key")];
        }
        return $prodList;
    }
}
