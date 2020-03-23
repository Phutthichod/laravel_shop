
@extends('templates.layout')

@section('title','pinto')

@section('content')
<main class="content">
    <h1>ยินดีตอนรับสู่ N.S. Shop</h1>
    <div class="div" id="show-table">
    </div>
    <div class="bill">
        <span>ราคารวมทั้งหมด(xcel. VAT) </span>
        <strong class="price">
        </strong>
        <div><span>ราคารวมทั้งหมด(incl. VAT) </span><strong class="price_total"></strong></div>
        </div>
        <span>thank you</span>
        <a href="/cart">ย้อนกลับ</a>

</main>

@endsection
<script src="{{asset('js/helper.js')}}"></script>
<script>
    loadProd()
    function loadProd() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        // document.getElementById("demo").innerHTML = this.responseText;
        let listProduct = JSON.parse(this.responseText)
        let headArr = ['ลำดับ','ชื่อสินค้า','ราคาต่อชิ้น(บาท)','จำนวน','ราคารวม(บาท)'];
        let arrTd = [];
        let result = cal_price(listProduct);
        let number = 1
        let priceInProduct = result.priceInproduct
        for(i in priceInProduct){
            arrTd.push([number,priceInProduct[i][0]['prod'].product_name,priceInProduct[i][0]['prod'].product_price,priceInProduct[i][0].num,priceInProduct[i][1]]);
            number++
        }
        let table = show_table(headArr,arrTd);
        document.getElementById("show-table").innerHTML = table;
        document.getElementsByClassName("price")[0].innerHTML = result.prictTotalNovat+" บาท"
        document.getElementsByClassName("price_total")[0].innerHTML = result.priceTotal+" บาท"
        }
  };
    xhttp.open("GET", "/productList", true);
    xhttp.send();
}
</script>
