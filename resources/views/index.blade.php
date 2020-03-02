@extends('templates.layout')

@section('title','pinto')

@section('content')
<div class="container">
    <h1>ยินดีต้อนรับสู่ N.S. Shop</h1>
        <div style="color: red;">
            {{$msg??""}}
        </div>
        <form name="loginForm" id="loginForm" method="post"action="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <fieldset class="">
                <legend class="text-primary">Cashier Login</legend>
                <div class="row form-group justify-content-center" >
                    {{-- <label class="col-3" style="display: inline-block; width: 90px; text-align: right;" for="username">username: </label> --}}
                    <input class="form-control col-3" type="text" name="username" id="username" placeholder="username" required/>
                </div>
                <div class="row form-group justify-content-center">
                    {{-- <label class="col-3" style="display: inline-block; width: 90px; text-align: right;" for="password" width="100px">password: </label> --}}
                    <input class="form-control col-3 center-block" type="password" name="password" id="password" placeholder="password" required/>
                </div>
                <button class="btn btn-success mr-2" type="submit">Login</button>
                <button class="btn btn-secondary " type="reset">Cancel</button>
            </fieldset>
        </form>
</div>


@endsection
