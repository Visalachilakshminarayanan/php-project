
document.getElementById("order").addEventListener("click",e=>{
    e.preventDefault();
    showorder();
});

var x = document.getElementById("orderno1").value;
function showorder(){
    // document.getElementById("orderno1").style.display = "block";
   //document.getElementById("orderno1").value = "Order raised successfully, Order NO :" + x++;
   alert("Order raised successfully, Order NO :" + ++x);
   document.getElementById("order").style.backgroundColor = "green";
    document.getElementById("order").style.color = "white";
    document.getElementById("order").innerHTML = "Raised";
   document.getElementById("order").disabled = "true";

}