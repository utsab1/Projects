<?php include 'layouts/frontend_header1.php';?>
<?php 
$row= $_SESSION["shopping_cart"];
if(isset($_POST['savebtn']))
{
 
    if(createOrder($conn,$_POST))
    {
       showSuccessMsg('Order register Successfully !!!');
         redirection('orderstatus.php');
    }
}

?>


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            
                            
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header" style="text-align: center;">
                                        <strong>Order</strong> Registration
                                    </div>
                                    <div class="card-body card-block">
                                        
                                          
                                        <form action="" id="addForm" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row">
                                      
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label >Email address</label>
                                               <P><?php echo $userInfo['user_email']; ?></P>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label >Sex</label>
                                               <P><?php echo $userInfo['user_gender']; ?></P>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <p><?php echo $userInfo['user_fname']; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                               <p><?php echo $userInfo['user_lname']; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                    <label>Contact</label>
                                               <p><?php echo $userInfo['user_contact']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                    <label>Product Name</label>
                            <div id="popover_content_wrapper">
                <span id="cart_details"></span>
            </div>
                                            </div>
                                        </div>
                                    </div>
                                          <!-- Content -->
                                            <div class="form-group">
                                            <label class="control-label col-lg-2" for="content">Ordering Address</label>
                                            <div class="col-lg-10">
                                              <textarea name="order_address" class="form-control"  id="order_address" placeholder="Enter your Ordering Address"></textarea>
                                            </div>
                                          </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm" name="savebtn">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                                
                            </div>
                    
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script>  
$(document).ready(function(){

    load_product();

    load_cart_data();
    
    function load_product()
    {
        $.ajax({
            url:"fetch_item.php",
            method:"POST",
            success:function(data)
            {
                $('#display_item').html(data);
            }
        });
    }

    function load_cart_data()
    {
        $.ajax({
            url:"fetch_cart.php",
            method:"POST",
            dataType:"json",
            success:function(data)
            {
                $('#cart_details').html(data.cart_details);
                $('.total_price').text(data.total_price);
                $('.badge').text(data.total_item);
            }
        });
    }

    $('#cart-popover').popover({
        html : true,
        container: 'body',
        content:function(){
            return $('#popover_content_wrapper').html();
        }
    });

    $(document).on('click', '.add_to_cart', function(){
        var product_id = $(this).attr("id");
        var product_name = $('#name'+product_id+'').val();
        var product_price = $('#price'+product_id+'').val();
        var product_quantity = $('#quantity'+product_id).val();
        var action = "add";
        if(product_quantity > 0)
        {
            $.ajax({
                url:"action.php",
                method:"POST",
                data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
                success:function(data)
                {
                    load_cart_data();
                    alert("Item has been Added into Cart");
                }
            });
        }
        else
        {
            alert("lease Enter Number of Quantity");
        }
    });


    $(document).on('click', '#clear_cart', function(){
        var action = 'empty';
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{action:action},
            success:function()
            {
                load_cart_data();
                $('#cart-popover').popover('hide');
                alert("Your Cart has been clear");
            }
        });
    });
    
});

</script>
    <script src="js/main.js"></script>
<script type="text/javascript">

        function validateText(text,id)
    {
        var textPattern = /^[a-zA-Z0-9!-”$%&’()*\+,\/;\[\\\]\/\s^_.`{|}~]+$/;
            if (!textPattern.test(text)) {
            $("#"+id).css({"border": "1px solid red"});
            $('#'+id).focus();
            setTimeout(function () {
                $('#'+id).css({"border": "1px solid #ddd"});
            }, 5000);

            return false;
            }
            else
            {
                return true;
            }
    }

    $('#addForm').submit(function(){
        
        var number = /[0-9 -()+]+$/;

        if(!validateText($('#comp_types_of_complain').val(),'comp_types_of_complain')
           ||!validateText($('#comp_department').val(),'comp_department')
            ||!validateText($('#comp_complain_description').val(),'comp_complain_description'))
        {
            return false;
        }
        else
        {
            $('#addForm').submit();
        }

       
    });
      </script>

</body>

</html>
<!-- end document-->
<?php include 'layouts/frontend_footer.php'; ?>
