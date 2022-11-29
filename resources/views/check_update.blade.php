<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order approval</title>
   
    <link rel="stylesheet" href="{{url('css/page.css')}}"/>
    <link rel="stylesheet" href="{{url('css/check update.css')}}"/>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
    //     var time = setInterval(displaytime,1000); //1 seconds
    //     function displaytime(){
    //         var dt = new Date();
    //       var date =  dt.getDate();
    //       var month = (dt.getMonth()+1);
    //       var year=dt.getFullYear() ;
    //       var hours = dt.getHours();
    //       var mini = dt.getMinutes();
    //       var sec = dt.getSeconds();
    //       document.getElementById("display-date").innerHTML = "<div class='dtime'>" + dt.toLocaleTimeString() + "</div>";
    //    // document.getElementById("display-date").innerHTML = "<div class='dtime'>" + date + "</div>" + "<div class='dtime'>" + month + "</div>" + "<div class='dtime'>" + year + "</div>" + "<div class='dtime'>" + hours + "</div>" + "<div class='dtime'>" + mini + "</div>" + "<div class='dtime'>" + sec + "</div>";
    //     }
    </script>
</head>
<body>
    <div class="horizontal-nav">
    <ul class="horizontal-menu">
        <li><span class="material-icons">update</span><a href="#">Check Updates</a></li>
        <li><span class='material-icons'>inventory</span><a href="{{ url('order details') }}">Order details</a></li>
        <li><span class='material-icons'>notes</span><a href="{{ url('sales_details') }}">Sales details</a></li>
        <li><span class='material-icons'>payment</span><a href="{{ url('invoice_generation') }}">Invoice details</a></li>
        <li><span class='material-icons'>logout</span><a href="{{ url('login_page') }}">Logout</a></li>
    </ul>
    </div>
   
    <input type="text" id="orderno1" value="0" style="border:none;width:500px;height:60px;background-color:yellow;font-size:20px;margin-left:500px;display:none">
    <div class="table-design">
        <form>
        <table class="table">
            <tr>
                <th>Customer Name</th>
                <th>Item Code</th>
                <th>Product Name</th>
                <th>Qty</th>
                <th>Rate</th>
                <th>Total price</th> 
                <th></th> 
            </tr>
            <tr>
                @foreach($order_dtl as $orders)
                <td>{{$orders ['custname']}}</td>
                <td>{{$orders ['itemcode']}}</td>
                <td>{{$orders ['productname']}}</td>
                <td>{{$orders ['qty']}}</td>
                <td>{{$orders ['rate']}}</td>
                <td>{{$orders ['totalprice']}}</td>
                <td id="raised"><button id="order">Raise Order</button></td>
            </tr>
            @endforeach
        </table>
    </form>
  
    <script src="{{url('js/checkupdate.js')}}"></script> 
</body>
</html>