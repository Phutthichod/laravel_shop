<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class LogoutController extends Controller
{
    public function index(){
        Session::flush();
        return redirect("/");
    }
}
