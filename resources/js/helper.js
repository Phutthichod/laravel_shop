function show_table(headTable,listProduct,border){
    let str = '';
    str += `<table border='${border}'>`;
    str += "<tr>";
    for(let i in headTable){
        str += "<th>"+headTable[i]+"</th>";
    }
    str += "</tr>";

    for(i in listProduct){
        str += "<tr>";
        var row =listProduct[i];
        for (j in row){
            str += "<th>"+row[j]+"</th>";
        }
        str += "</tr>";
    }
    str += "</table>";
    return str;
}
function cal_price(listProduct){
    let priceInProduct = [];
    let prictTotalNovat;
    let priceTotal;
    for(let i in listProduct){
        priceInProduct[i] = [listProduct[i],listProduct[i].price*listProduct.numberOfProduce];
        priceTotal += listProduct[i];
    }
    prictTotalNovat = priceTotal;
    priceTotal =  priceTotal*0.07+prictTotalNovat;
    return {priceInproduct:priceInProduct,prictTotalNovat:prictTotalNovat,priceTotal:priceTotal};
}