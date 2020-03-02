<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
class ProductController extends Controller
{
    public function __construct(){

        $this->middleware('check.login');
    }
    public function init(){

    }
    public function index(){
        $product = Product::findAll();
        return view('cart',['product' => $product]);
    }




}
