<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Session;
class IndexController extends Controller
{

    public function index(){
        $name = "phutthichod";
        return view('index',['name' => $name]);
    }
    public function login(Request $req){
        $username = $req->get('username');
      // $pass = $req->get('passwd');
        $user = Member::where('username',$username)->get();
        if (count($user) === 0) {
        $msg = "Login Failed";
            return view("index", array('msg' => $msg));
        } else {
            Session::put('username',  $username);
            return redirect('cart');
        }
    }
}
