<link rel="stylesheet" href="{{asset('vender/bootstrap/dist/css/bootstrap.css')}}">
<img src="{{ asset('img/banner.jpg') }}" alt="banner" width="100%"/>
<?php

if(Session::has('username')){
    $username = Session::get('username');
    echo "<div align='right'>สวัสดีคุณ {$username}  <a href='/logout'>Logout</a></div>";
}

?>
