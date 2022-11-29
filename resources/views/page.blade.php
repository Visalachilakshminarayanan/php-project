<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="{{url('css/page.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
        var time = setInterval(displaytime,1000); //1 seconds
        function displaytime(){
            var dt = new Date();
          var date =  dt.getDate();
          var month = (dt.getMonth()+1);
          var year=dt.getFullYear() ;
          var hours = dt.getHours();
          var mini = dt.getMinutes();
          var sec = dt.getSeconds();
          document.getElementById("display-date").innerHTML = "<div class='dtime'>" + dt.toLocaleTimeString() + "</div>";
       // document.getElementById("display-date").innerHTML = "<div class='dtime'>" + date + "</div>" + "<div class='dtime'>" + month + "</div>" + "<div class='dtime'>" + year + "</div>" + "<div class='dtime'>" + hours + "</div>" + "<div class='dtime'>" + mini + "</div>" + "<div class='dtime'>" + sec + "</div>";
        }
    </script>
</head>
<body>
    <div class="horizontal-nav">
    <ul class="horizontal-menu">
        <li><img src="C:\xampp\htdocs\projectvisa\public\images\house.png"></li>
        <li class="home"><a href="">Dashboard</a></li>
    </ul>
    </div>


   <div class="navigation">
    <div class="nav-profile">
        <img src="C:\xampp\htdocs\projectvisa\public\images\user.png">
        <div class="nav-profile-username">
        <h2>G Visalachi</h2>
        <div class="options">
            <ul class="profile-options">
                <li><span class="material-icons">update</span><a href="{{ url('check_update') }}">Check Updates</a></li>
                <li><span class='material-icons'>launch</span><a href="{{ url('order details') }}">Order details</a></li>
                <li><span class='material-icons'>leaderboard</span><a href="{{ url('sales_details') }}">Sales details</a></li>
                <li><span class='material-icons'>leaderboard</span><a href="{{ url('invoice generation') }}">Invoice generation</a></li>

            </ul>
        </div>
    </div>
    <div id="display-date"> </div>

    </div>
   
    <div class="table-div" style="overflow-x:scroll;" style="margin-top:100px">
        <table border="1" class="item-details">
            <tr>
                <th>Sno</th>
                <th>Itemcode</th>
                <th>Item Description</th>
                <th>Qty</th>
                <th>Rate</th>
                <th>HSN No</th>
                <th>GST in %</th>
                <th>Customer id</th>
                <th>Customer Name</th>
                <th>Contact No</th>
                <th>Customer Address</th>
            </tr>
            <tr class="row">
                <td>1</td>
                <td>123456258</td>
                <td>Bannan leaf</td>
                <td>90</td>
                <td>10</td>
                <td>9865325</td>
                <td>18%</td>
                <td>111</td>
                <td>Visalatchi</td>
                <td>9876543210</td>
                <td>34#,Uchanapally,Denkanikottai,Hosur-635109</td>
            </tr>
            <tr class="row">
                <td>1</td>
                <td>123456258</td>
                <td>Bannan leaf</td>
                <td>90</td>
                <td>10</td>
                <td>9865325</td>
                <td>18%</td>
                <td>111</td>
                <td>Visalatchi</td>
                <td>9876543210</td>
                <td>34#,Uchanapally,Denkanikottai,Hosur-635109</td>
            </tr>
            <tr class="row">
                <td>1</td>
                <td>123456258</td>
                <td>Bannan leaf</td>
                <td>90</td>
                <td>10</td>
                <td>9865325</td>
                <td>18%</td>
                <td>111</td>
                <td>Visalatchi</td>
                <td>9876543210</td>
                <td>34#,Uchanapally,Denkanikottai,Hosur-635109</td>
            </tr>
            <tr class="row">
                <td>1</td>
                <td>123456258</td>
                <td>Bannan leaf</td>
                <td>90</td>
                <td>10</td>
                <td>9865325</td>
                <td>18%</td>
                <td>111</td>
                <td>Visalatchi</td>
                <td>9876543210</td>
                <td>34#,Uchanapally,Denkanikottai,Hosur-635109</td>
            </tr>
            <tr class="row">
                <td>1</td>
                <td>123456258</td>
                <td>Bannan leaf</td>
                <td>90</td>
                <td>10</td>
                <td>9865325</td>
                <td>18%</td>
                <td>111</td>
                <td>Visalatchi</td>
                <td>9876543210</td>
                <td>34#,Uchanapally,Denkanikottai,Hosur-635109</td>
            </tr>
            <tr class="row">
                <td>1</td>
                <td>123456258</td>
                <td>Bannan leaf</td>
                <td>90</td>
                <td>10</td>
                <td>9865325</td>
                <td>18%</td>
                <td>111</td>
                <td>Visalatchi</td>
                <td>9876543210</td>
                <td>34#,Uchanapally,Denkanikottai,Hosur-635109,34#,Uchanapally,Denkanikottai,Hosur-635109</td>
            </tr>
            <tr class="row">
                <td>1</td>
                <td>123456258</td>
                <td>Bannan leaf</td>
                <td>90</td>
                <td>10</td>
                <td>9865325</td>
                <td>18%</td>
                <td>111</td>
                <td>Visalatchi</td>
                <td>9876543210</td>
                <td>34#,Uchanapally,Denkanikottai,Hosur-635109</td>
            </tr>
        </table>
    </div>
   </div>
   <div class="page-count">
    <img src="C:\xampp\htdocs\projectvisa\public\images\less.png">
    
    
   1 2 3 4 5
   <img src="C:\xampp\htdocs\projectvisa\public\images\greater.png">
    
   </div>

</body>
</html>