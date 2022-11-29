<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice details</title>
    
    <link rel="stylesheet" href="{{url('css/page.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css\invoice generation.css')}}">
</head>
<body>
    <div class="horizontal-nav">
        <ul class="horizontal-menu">
        <li><span class="material-icons">update</span><a href="{{ url('check_update')}}">Check Updates</a></li>
        <li><span class='material-icons'>inventory</span><a href="{{ url('order details')}}">Order details</a></li>
        <li><span class='material-icons'>notes</span><a href="{{ url('sales_details')}}">Sales details</a></li>
        <li><span class='material-icons'>payment</span><a href="#">Invoice details</a></li>
        <li><span class='material-icons'>logout</span><a href="{{ url('login_page') }}"">Logout</a></li>
        </ul>
        </div>
    
        <div class="heading">
            <h1>Invoice Generation</h1>
        </div>
        <div class="container">
            <form action="{{ url('myPDF') }}" id="invfrm">
            {{csrf_field()}}
        {{ method_field('PUT') }}
        <div class="invoice">
            <div class="date">
                <label>Enter Order No :</label>
            </div>
            <div class="date input">
                <input type="text" name="orderno" required value="{{ request()->input('orderno') }}">
            </div>
            <!-- <div class="date">
                <label>Order Date :</label>
            </div> -->
            <!-- <div class="date-input">
                <input type="date" name="order-date" required value="{{ request()->input('order-date') }}">
            </div> -->
            <div></div>
            <button id="submit">Generate Invoice</button>
        </div>
</form>
        </div>
        <script src="{{url('js/generInvoice.js')}}"></script>
    </body>
    </html>
