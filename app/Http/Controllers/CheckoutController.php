<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CheckoutController extends Controller
{
    private $prodList = array();
    public function __construct(){
        $this->middleware('check.login');
    }
    public function index(){

    }
    public function checkout(Request $req){
        $product = Product::findAll();
        foreach($product as $key=>$val){
            if($req->get("prod_$key")>0)
                $this->prodList[] = ['prod' => $val,'num' => $req->get("prod_$key")];
        }
        // print_r($this->prodList);
        if(sizeof($this->prodList)<1) return redirect("cart");
        $subTotal = array();
        $priceNoVat = 0;
        $priceWithVat = 0;
        $this->calculateTotalPrice($this->prodList,$subTotal,$priceNoVat,$priceWithVat,7);
        return view('checkout',['prodList' => $this->prodList,"subTotal"=>$subTotal,"priceNoVat"=>$priceNoVat,"priceWithVat"=>$priceWithVat]);
    }

    function calculateTotalPrice(array $productPrice, array &$subTotal, float &$priceNoVat, float &$priceWithVat, float $percentVat = 7) {
        $priceNoVat = 0;
        for($i = 0; $i < count($productPrice); $i++)
        {
            $subTotal[$i] = $productPrice[$i]['prod']->getPrice() * $productPrice[$i]['num'];

            $priceNoVat += + $subTotal[$i];

        }
        $priceWithVat = $priceNoVat*(1+$percentVat/100);

    }
}
