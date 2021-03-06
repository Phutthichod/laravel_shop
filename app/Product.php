<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    private $price;
    public static $prodList = array();
    public function getPrice(){
        return $this->product_price;
    }
    public function getName(){
        return $this->product_name;
    }
    public static function findAll(){
        $product = self::all();
        foreach ($product as $prod)
        {
            $productList[$prod->id] = $prod;
        }
        return $product;
    }
    // public function toJSON(){
    //     return json_encode(self::$prodList);
    // }

}
