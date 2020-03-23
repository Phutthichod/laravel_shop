function show_table(headTable,listProduct){
    let str = '';
    str += `<table  class='table' width=\"60%\" style=\"text-align: center;  margin:auto\">`;
    str += "<thead class='thead-light'>";
    str += "<tr>";
    for(let i in headTable){
        str += "<th>"+headTable[i]+"</th>";
    }
    str += "</tr>";
    str += "</thead>";
    str += " <tbody>";
    for(let i in listProduct){
        str += "<tr>";
        var row =listProduct[i];
        for (j in row){
            str += "<th>"+row[j]+"</th>";
        }
        str += "</tr>";
    }
    str += "</tbody>";
    str += "</table>";
    return str;
}
function cal_price(listProduct){
    let priceInProduct = [];
    let prictTotalNovat = 0;
    let priceTotal = 0;
    for(let i in listProduct){
        let price = listProduct[i]['prod'].product_price*listProduct[i].num;
        priceInProduct.push([listProduct[i],price]);
        priceTotal += price;
    }
    prictTotalNovat = priceTotal;
    priceTotal =  priceTotal*0.07+prictTotalNovat;
    return {priceInproduct:priceInProduct,prictTotalNovat:prictTotalNovat,priceTotal:priceTotal};
}
