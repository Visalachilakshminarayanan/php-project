<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order details</title>
    <link rel="stylesheet" href="<?php echo e(url('css/page.css')); ?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(url('css/order detail.css')); ?>"/>
</head>
<body>
    <div class="horizontal-nav">
        <ul class="horizontal-menu">
        <li><span class="material-icons">update</span><a href="<?php echo e(url('check_update')); ?>">Check Updates</a></li>
        <li><span class='material-icons'>inventory</span><a href="#">Order details</a></li>
        <li><span class='material-icons'>notes</span><a href="<?php echo e(url('sales_details')); ?>">Sales details</a></li>
        <li><span class='material-icons'>payment</span><a href="<?php echo e(url('invoice_generation')); ?>">Invoice details</a></li>
        <li><span class='material-icons'>logout</span><a href="<?php echo e(url('login_page')); ?>">Logout</a></li>    
    </ul>
        </div>
    
<!-------------------------ORDER DETAILS FORM-------------------------------------->
<h1 class="prod_title">Product Order Details</h1>
    <div class="detail1">
       
        <form action="<?php echo e(url('order details')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

            	<!-- <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> -->
        <div class="form-label">
        <label>Itemcode</label></div>
        <div class="form-input">
       
        <input type="text" id="item_id" name="itemcode" required></div>

        <!-- <div class="form-label">
            <label>Customer Id</label></div>
            <div class="form-input">
            <input type="text" ></div> -->

            <div class="form-label">
                <label>Product Name</label></div>
                <div class="form-input">
                <select id="prod-dropdown" name="itemname">
                    <option>---Select----</option>
                    <!-- <option>Banana Leaf</option>
                    <option>Banana Flower</option>
                    <option>Banana Stem</option>
                    <option>Banana Tree</option>
                    <option>Banana Fruit</option>
                    <option>Plantain</option> -->
                     <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option><?php echo e($name->itemname); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</select>
                </div>
                <div class="form-label">
                    <label>Customer Name</label></div>
                    <div class="form-input">
                    <input type="text" name="custname" required></div>

         <div class="form-label">
        <label>Qty</label></div>
        <div class="form-input">
        <input type="text" name="qty" id="qty" required></div>

        <div class="form-label">
            <label>Contact No</label></div>
            <div class="form-input">
            <input type="text" name="contactno" required></div>

        <div class="form-label">
            <label>Rate</label></div>
            <div class="form-input">
            <input type="text" name="rate" id="rate" required></div>
            
            <div class="form-label">
                <label>Email Id</label></div>
                <div class="form-input">
                <input type="text" name="emailid" required></div>

            <div class="form-label">
                <label>Total Amount</label></div>
                <div class="form-input">
                <input type="text" id="total" name="total" required disable></div>

                <div class="form-label">
                            <label>Deliver Address</label></div>
                            <div class="form-input">
                            <textarea name="address" required></textarea></div>

                            <div class="form-label">
                            <label></label></div>
                            <div class="form-input">
                            <input type="text" id="ordernum" name="orderno" value="0" style="display:none;"></div>
                            <center>
                                <button id="submit">Submit</button>
                            </center>
                           
</form>


    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo e(url('/js/orderdetail.js')); ?>"></script> 
  
</body>
</html><?php /**PATH C:\Users\Dell\Documents\xampp\htdocs\project3\resources\views/order details.blade.php ENDPATH**/ ?>