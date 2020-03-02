
@extends('templates.layout')

@section('title','pinto')

@section('content')
<h1>ยินดีตอนรับสู่ N.S. Shop</h1>
<form name="cartForm" id="cartForm" method="post" action="/cart">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <?php
        $header = array("ลำดับ","ชื่อสินค้า","ราคาต่อชิ้น (บาท)","จำนวน");

        $data = array();
        $i = 0;
    ?>
    @foreach ($product as $prod)
        <?php
            $data[$i] = array($i+1,$prod->getName(),$prod->getPrice(),"<input type='number' class='form-control' name='prod_$i' id='prod_$i' value='0' min='0'/>");
            $i++;
        ?>
    @endforeach
    {{showTable($header,$data)}}

    <div style="margin: 1em; padding: 2em">
        <button type="submit" class="btn btn-success" name="checkout" id ="checkout">Check Out</button>
        <button type="reset" class="btn btn-secondary" name="cancel" id="cancel" >Cancel </button>
    </div>
</form>

@endsection
