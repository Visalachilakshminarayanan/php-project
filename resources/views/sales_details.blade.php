<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sales details</title>
    <link rel="stylesheet" href="{{url('css/page.css')}}"/>
    <link rel="stylesheet" href="{{url('css/sales details.css')}}"/>
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
    <li><span class="material-icons">update</span><a href="{{ url('check_update')}}">Check Updates</a></li>
    <li><span class='material-icons'>inventory</span><a href="{{ url('order details') }}">Order details</a></li>
    <li><span class='material-icons'>notes</span><a href="#">Sales details</a></li>
    <li><span class='material-icons'>payment</span><a href="{{ url('invoice_generation') }}">Invoice details</a></li>
    <li><span class='material-icons'>logout</span><a href="{{ url('login_page') }}">Logout</a></li>

    </ul>
    </div>
   
    <!-- <div id="display-date"> </div> -->
    <h1>Sales Order Details</h1>
    <div class="container">
    <div class="heading">
       
   
    <div class="calender">
   
        <form action="{{ url('sales_details') }}" id="salesfrm">
        {{csrf_field()}}
        {{ method_field('PUT') }}
        <div class="date">
            <label>From Date</label>
        </div>
        <div class="date input">
            <input type="date" name="frmdate" required value="{{ request()->input('frmdate') }}" >
        </div>
                <div class="date">
                    <label>To Date</label>
                </div>
                 <div class="date input">
                    <input type="date" name="todate" required value="{{ request()->input('todate') }}" >
                </div>
                <div></div>
                <button id="submit">submit</button>
    </div>
    </form>
    </div>
    
    </div>
    <div class="sales-tbl-div">
        <table class="sales-tbl">
            <tr>
                <th>Order Date</th>
                <th>Order No.</th>
                <th>Itemcode</th>
                <th>Itemname</th>
                <th>Qty</th>
                <th>Rate</th>
                <th>Total value</th>
                <th>Customer Name</th>
                <th>Contact No.</th>
                <th>Email-Id</th>
                <th>Deliver Address</th>
            </tr>
            <tr>
                @foreach($datefil as $orders)
                <td>{{$orders ['created_at']}}</td>
                <td>{{$orders ['orderno']}}</td>
                <td>{{$orders ['itemcode']}}</td>
                <td>{{$orders ['productname']}}</td>
                <td>{{$orders ['qty']}}</td>
                <td>{{$orders ['rate']}}</td>
                <td>{{$orders ['totalprice']}}</td>
                <td>{{$orders ['custname']}}</td>
                <td>{{$orders ['contactno']}}</td>
                <td>{{$orders ['emailid']}}</td>
                <td>{{$orders ['deliveraddress']}}</td>
    </tr>
    @endforeach
        </table>
    </div>
    <!-- <script src="{{url('js/sales.js')}}"></script> -->
</body>
</html>