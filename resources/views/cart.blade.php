
@extends('templates.layout')

@section('title','pinto')

@section('content')
<h1>ยินดีตอนรับสู่ N.S. Shop</h1>
<form onload="loadProd()" name="cartForm" id="cartForm" method="post" action="/checkout">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <div id="show-table">

    </div>
    <div style="margin: 1em; padding: 2em">
        <button type="submit" class="btn btn-success" name="checkout" id ="checkout">Check Out</button>
        <button type="reset" class="btn btn-secondary" name="cancel" id="cancel" >Cancel </button>
    </div>
</form>
@endsection
<script src="{{asset('js/helper.js')}}"></script>
<script>
    loadProd()
    function loadProd() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        // document.getElementById("demo").innerHTML = this.responseText;
        let prod = JSON.parse(this.responseText)
        console.log(prod)
        let headArr = ['ลำดับ','ชื่อสินค้า','ราคาต่อชิ้น(บาท)','จำนวน'];

        let arrTd = [];
        var number = 1
        for(i in prod){
            arrTd.push([number,prod[i].product_name,prod[i].product_price,"<input type='number' name='prod_"+i+"' value='0' required output='setCustomValidity(' ')'"]);
            number++;
        }
        let table = show_table(headArr,arrTd);
        console.log(table)
        document.getElementById("show-table").innerHTML = table;
        }
  };
    xhttp.open("GET", "/product", true);
    xhttp.send();
}
</script>
