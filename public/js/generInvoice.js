

function calc(){
    var qty = document.getElementById("qty").innerHTML;
    var rate = document.getElementById("rate").innerHTML;
    var grand = document.getElementById("grand");
    var total = qty*rate;
    var gstotal = ((total)*18/100);
    grand.innerHTML = gstotal + total;

    document.getElementById("subtotal").innerHTML = total;
    document.getElementById("tax").innerHTML = gstotal;
   document.getElementById("grand-total").innerHTML = gstotal + total;
   
}