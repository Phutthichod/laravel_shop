<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
class ProductController extends Controller
{
    private $product;
    public function __construct(){
        $this->product = Product::findAll();
        $this->middleware('check.login');
    }
    public function init(){

    }
    public function index(){
        return view('cart');
    }
    public  function toJSON(){
        return json_encode($this->product);
    }



}
