
@extends('templates.layout')

@section('title','pinto')

@section('content')
<main class="content">
    <?php  $arrHead = ['ลำดับ','ชื่อสินค้า','ราคาต่อชิ้น(บาท)','จำนวน','ราคารวม(บาท)'];
      $arrTd = [];
      $i = 0;
    ?>
      @foreach ($prodList as $val)
            <?php
              $arrTd[] = [($i+1),$val['prod']->getName(),$val['prod']->getPrice(),$val['num'],number_format($subTotal[$i],2)];
              $i++;
            ?>
      @endforeach
      {{showTable($arrHead,$arrTd)}}
      <div class="bill">
          <span>ราคารวมทั้งหมด(xcel. VAT)</span>
          <strong class="price">
              {{number_format($priceNoVat, 2) }} บาท
          </strong>
<!--                <span>VAT (7 %)</span><strong class="price_vat">--><?//=  number_format($vat,2)." บาท" ?><!--</strong>-->

          <div><span>ราคารวมทั้งหมด(incl. VAT)</span><strong class="price_total">{{number_format($priceWithVat,2)}}  บาท</strong></div>
      </div>
  <span>thank you</span>
  <a href="/cart">ย้อนกลับ</a>

</main>

@endsection
