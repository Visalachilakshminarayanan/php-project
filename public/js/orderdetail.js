document.getElementById("rate").addEventListener("keyup",totalamt);
function totalamt(){
    var qty = document.getElementById("qty").value;
    var rate = document.getElementById("rate").value;
    document.getElementById("total").value = qty * rate;
}

// var y = document.getElementById("ordernum").value;
// document.getElementById("submit").addEventListener("click",ordernodisp);
// function ordernodisp(){
//     document.getElementById("ordernum").value = ++y;
// }

