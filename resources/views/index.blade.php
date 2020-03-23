@extends('templates.layout')

@section('title','pinto')

@section('content')
<div class="container">
    <h1>ยินดีต้อนรับสู่ N.S. Shop</h1>
        <div id="error-msg" style="color: red;">
            {{$msg??""}}
        </div>
        <form name="loginForm" id="loginForm" method="post"action="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <fieldset class="">
                <legend class="text-primary">Cashier Login</legend>
                <div class="row form-group justify-content-center" >
                    {{-- <label class="col-3" style="display: inline-block; width: 90px; text-align: right;" for="username">username: </label> --}}
                    <input class="form-control col-3" type="text" name="username" id="username" placeholder="username" />
                </div>
                <div class="row form-group justify-content-center">
                    {{-- <label class="col-3" style="display: inline-block; width: 90px; text-align: right;" for="password" width="100px">password: </label> --}}
                    <input class="form-control col-3 center-block" type="password" name="password" id="password" placeholder="password" required/>
                </div>
                <button class="btn btn-success mr-2" onclick="checkLogin()" type="button">Login</button>
                <button class="btn btn-secondary " type="reset">Cancel</button>
            </fieldset>
        </form>
</div>


@endsection
<script>
//     init()
// function init() {
//      var formElem = document.getElementById("loginForm");
//      formElem.onsubmit = Validate;
//      }
// function Validate(){
//     console.log('sssssss')

//     if(username.value === ''){
//         username.focus()
//         return false;
//     }
//     return true

// }
function checkLogin(){
    console.log("ssssssss")
    var username = document.getElementById("username")
    var password = document.getElementById("password")
    var arr_check = [username,password]
    for(i in arr_check){
        if(arr_check[i].value === ''){
            document.getElementById("error-msg").innerHTML = "คุณกรอกข้อมูลไม่ครบ"
            arr_check[i].focus()
            return false
        }
    }
    var formElem = document.getElementById("loginForm");
    formElem.submit()
}
</script>
