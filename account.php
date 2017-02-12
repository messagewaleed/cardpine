<!DOCTYPE html>

<?php

  include './php/sessions.php';
  include './allow_me/php/connection.php';

  if (!isset($_SESSION['user'])) {
    echo "<script>alert('Please Login first'); window.location.href = 'index.php'</script>";
  }

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>C A R D Pine | My Account</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   

    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/lite-blue-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">  

    <!-- My style sheet -->
    <link href="css/mystyle.css" rel="stylesheet">

    <!-- jQuery library -->
    <script src="js/jquery.min.js"></script>  

    <!-- gmail platform -->
    <script src="https://apis.google.com/js/api:client.js"></script>


    <!-- facebook js sdk library -->
    <script src="js/facebook.js"></script>



   <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body> 

  <?php include './php/header.php';  ?> 


<div id="main_page_content" >
  <!-- Account Section -->
    <section id="checkout">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
          <div class="checkout-area">
            <form action="">
              <div class="row">
                <div class="col-md-12">
                  <div class="checkout-left">
                    <div class="panel-group" id="accordion">
                      <!-- Incomplete Orders -->
                      <div class="panel panel-default aa-checkout-coupon">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                              Incomplete Orders
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                          <div id="incomplete_orders" class="panel-body">
                            <?php

                                $res = $conn->query("SELECT * FROM user_orders WHERE status = 0 AND user_email='".$_SESSION['user']."'");

                                if ($res->num_rows != 0){
                                
                                  while ($row = $res -> fetch_assoc()) {


                                    $total=0;
                                    $shipping_address = explode(',', $row['shipping_address']);
                                    $billing_address = explode(',', $row['billing_address']);
                                    $date = $row['order_date'];
                                    $date = explode(" ", $date);

                            ?>
                            <div class="single_order">

                              <div class="order order_header">
                                <div class="left_side order_number">
                                  <a class="order_button blue_button"><?= $row['order_id']; ?></a>
                                </div>
                                <div class="right_side order_action_buttons">
                                  <a class="order_button grey_button" href="#">Track</a>
                                </div>
                              </div>

                              <div class="order order_main">
                                <div class="order_address">
                                  <div class="address_header">Shipping Address</div>
                                  <div class="address" >
                                    <div><?= $shipping_address[0]; ?></div>
                                    <?php 
                                      if($shipping_address[1] != '' && $shipping_address[1] != 'undefined')
                                      {
                                        echo "<div>".$shipping_address[1]."</div>";
                                      } 
                                    ?>
                                    <div><?= $shipping_address[2]; ?>, <?= $shipping_address[3]; ?></div>
                                    <div><?= $shipping_address[4]; ?></div>
                                    <?php 
                                      if($shipping_address[5] != '' && $shipping_address[5] != 'undefined')
                                      {
                                        echo "<div>".$shipping_address[5]."</div>";
                                      } 
                                    ?>
                                    <div><?= $shipping_address[6]; ?>, <?= $shipping_address[7]; ?>, <?= $shipping_address[8]; ?></div>
                                  </div>
                                  <hr/>
                                  <div class="address_header">Billing Address</div>
                                  <div class="address" >
                                    <div><?= $billing_address[0]; ?></div>
                                    <?php 
                                      if($billing_address[1] != '' && $billing_address[1] != 'undefined')
                                      {
                                        echo "<div>".$billing_address[1]."</div>";
                                      } 
                                    ?>
                                    <div><?= $billing_address[2]; ?>, <?= $billing_address[3]; ?></div>
                                    <div><?= $billing_address[4]; ?></div>
                                    <?php 
                                      if($billing_address[5] != '' && $billing_address[5] != 'undefined')
                                      {
                                        echo "<div>".$billing_address[5]."</div>";
                                      } 
                                    ?>
                                    <div><?= $billing_address[6]; ?>, <?= $billing_address[7]; ?>, <?= $shipping_address[8]; ?></div>
                                  </div>
                                </div>
                                <div class="order_item">
                                  <table class="table table-responsive">
                                    <thead>
                                      <tr>
                                        <th>ITEM NAME</th>
                                        <th>QUANTITY</th>
                                        <th>PRICE</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                    <?php 

                                      $card_res = $conn->query("SELECT * FROM order_details WHERE order_id ='".$row['order_id']."'");

                                      echo "";

                                      while ($card_row = $card_res->fetch_assoc()) {

                                        $total += $card_row['total_price'];

                                    ?>
                                      <tr>
                                        <td><?= $card_row['item_name'] ?></td>
                                        <td><?= $card_row['item_quantity'] ?></td>
                                        <td>Rs <?= $card_row['total_price'] ?></td>
                                      </tr>

                                    <?php
                                      }
                                    ?>
                                    </tbody>
                                  </table>  
                                </div>
                              </div>

                              <div class="order order_footer">
                                <div class="left_side order_date">
                                  <span>Date: </span><?= $date[0]; ?>
                                </div>
                                <div class="right_side order_date">
                                  <span>Grand Total: Rs </span><?= $total; ?>
                                </div>
                              </div>  
                            </div>
                            <hr/>

                            <?php

                                 }
                                }
                                else
                                {
                                  echo "<div>NO ORDERS FOUND</div>";
                                }                            

                            ?>
                          </div>
                        </div>
                      </div>
                      <!-- Complete Orders -->
                      <div class="panel panel-default aa-checkout-login">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                              Completed Orders 
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                          <div id="completed_orders" class="panel-body">
                            <?php

                                $res = $conn->query("SELECT * FROM user_orders WHERE status = 1 AND user_email='".$_SESSION['user']."'");

                                if ($res->num_rows != 0){
                                
                                  while ($row = $res -> fetch_assoc()) {


                                    $total=0;
                                    $shipping_address = explode(',', $row['shipping_address']);
                                    $billing_address = explode(',', $row['billing_address']);
                                    $date = $row['order_date'];
                                    $date = explode(" ", $date);

                            ?>
                            <div class="single_order">

                              <div class="order order_header">
                                <div class="left_side order_number">
                                  <a class="order_button blue_button"><?= $row['order_id']; ?></a>
                                </div>
                                <div class="right_side order_action_buttons">
                                  <a class="order_button grey_button" href="#">Invoice</a>
                                </div>
                              </div>

                              <div class="order order_main">
                                <div class="order_address">
                                  <div class="address_header">Shipping Address</div>
                                  <div class="address" >
                                    <div><?= $shipping_address[0]; ?></div>
                                    <?php 
                                      if($shipping_address[1] != '' && $shipping_address[1] != 'undefined')
                                      {
                                        echo "<div>".$shipping_address[1]."</div>";
                                      } 
                                    ?>
                                    <div><?= $shipping_address[2]; ?>, <?= $shipping_address[3]; ?></div>
                                    <div><?= $shipping_address[4]; ?></div>
                                    <?php 
                                      if($shipping_address[5] != '' && $shipping_address[5] != 'undefined')
                                      {
                                        echo "<div>".$shipping_address[5]."</div>";
                                      } 
                                    ?>
                                    <div><?= $shipping_address[6]; ?>, <?= $shipping_address[7]; ?>, <?= $shipping_address[8]; ?></div>
                                  </div>
                                  <hr/>
                                  <div class="address_header">Billing Address</div>
                                  <div class="address" >
                                    <div><?= $billing_address[0]; ?></div>
                                    <?php 
                                      if($billing_address[1] != '' && $billing_address[1] != 'undefined')
                                      {
                                        echo "<div>".$billing_address[1]."</div>";
                                      } 
                                    ?>
                                    <div><?= $billing_address[2]; ?>, <?= $billing_address[3]; ?></div>
                                    <div><?= $billing_address[4]; ?></div>
                                    <?php 
                                      if($billing_address[5] != '' && $billing_address[5] != 'undefined')
                                      {
                                        echo "<div>".$billing_address[5]."</div>";
                                      } 
                                    ?>
                                    <div><?= $billing_address[6]; ?>, <?= $billing_address[7]; ?>, <?= $shipping_address[8]; ?></div>
                                  </div>
                                </div>
                                <div class="order_item">
                                  <table class="table table-responsive">
                                    <thead>
                                      <tr>
                                        <th>ITEM NAME</th>
                                        <th>QUANTITY</th>
                                        <th>PRICE</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                    <?php 

                                      $card_res = $conn->query("SELECT * FROM order_details WHERE order_id ='".$row['order_id']."'");

                                      echo "";

                                      while ($card_row = $card_res->fetch_assoc()) {

                                        $total += $card_row['total_price'];

                                    ?>
                                      <tr>
                                        <td><?= $card_row['item_name'] ?></td>
                                        <td><?= $card_row['item_quantity'] ?></td>
                                        <td>Rs <?= $card_row['total_price'] ?></td>
                                      </tr>

                                    <?php
                                      }
                                    ?>
                                    </tbody>
                                  </table>  
                                </div>
                              </div>

                              <div class="order order_footer">
                                <div class="left_side order_date">
                                  <span>Date: </span><?= $date[0]; ?>
                                </div>
                                <div class="right_side order_date">
                                  <span>Grand Total: Rs </span><?= $total; ?>
                                </div>
                              </div>  
                            </div>
                            <hr/>

                            <?php

                                 }
                                }   
                                else
                                {
                                  echo "<div>NO ORDERS FOUND</div>";
                                }                         

                            ?>
                          </div>
                        </div>
                      </div>
                      <!-- All Orders -->
                      <div class="panel panel-default aa-checkout-billaddress">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              All Orders
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                          <div id="incomplete_orders" class="panel-body">
                            <?php

                                $res = $conn->query("SELECT * FROM user_orders WHERE user_email='".$_SESSION['user']."'");

                                if ($res->num_rows != 0){
                                
                                  while ($row = $res -> fetch_assoc()) {


                                    $total=0;
                                    $shipping_address = explode(',', $row['shipping_address']);
                                    $billing_address = explode(',', $row['billing_address']);
                                    $date = $row['order_date'];
                                    $date = explode(" ", $date);

                            ?>
                            <div class="single_order">

                              <div class="order order_header">
                                <div class="left_side order_number">
                                  <a class="order_button blue_button"><?= $row['order_id']; ?></a>
                                </div>
                                <div class="right_side order_action_buttons">
                                  <a class="order_button grey_button" href="#">
                                  <?php 
                                    if ($row['status'] == 0) 
                                    {
                                      echo "Track";
                                    } 
                                    else
                                    {
                                      echo "Invoice";
                                    }
                                    ?>
                                  </a>
                                </div>
                              </div>

                              <div class="order order_main">
                                <div class="order_address">
                                  <div class="address_header">Shipping Address</div>
                                  <div class="address" >
                                    <div><?= $shipping_address[0]; ?></div>
                                    <?php 
                                      if($shipping_address[1] != '' && $shipping_address[1] != 'undefined')
                                      {
                                        echo "<div>".$shipping_address[1]."</div>";
                                      } 
                                    ?>
                                    <div><?= $shipping_address[2]; ?>, <?= $shipping_address[3]; ?></div>
                                    <div><?= $shipping_address[4]; ?></div>
                                    <?php 
                                      if($shipping_address[5] != '' && $shipping_address[5] != 'undefined')
                                      {
                                        echo "<div>".$shipping_address[5]."</div>";
                                      } 
                                    ?>
                                    <div><?= $shipping_address[6]; ?>, <?= $shipping_address[7]; ?>, <?= $shipping_address[8]; ?></div>
                                  </div>
                                  <hr/>
                                  <div class="address_header">Billing Address</div>
                                  <div class="address" >
                                    <div><?= $billing_address[0]; ?></div>
                                    <?php 
                                      if($billing_address[1] != '' && $billing_address[1] != 'undefined')
                                      {
                                        echo "<div>".$billing_address[1]."</div>";
                                      } 
                                    ?>
                                    <div><?= $billing_address[2]; ?>, <?= $billing_address[3]; ?></div>
                                    <div><?= $billing_address[4]; ?></div>
                                    <?php 
                                      if($billing_address[5] != '' && $billing_address[5] != 'undefined')
                                      {
                                        echo "<div>".$billing_address[5]."</div>";
                                      } 
                                    ?>
                                    <div><?= $billing_address[6]; ?>, <?= $billing_address[7]; ?>, <?= $shipping_address[8]; ?></div>
                                  </div>
                                </div>
                                <div class="order_item">
                                  <table class="table table-responsive">
                                    <thead>
                                      <tr>
                                        <th>ITEM NAME</th>
                                        <th>QUANTITY</th>
                                        <th>PRICE</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                    <?php 

                                      $card_res = $conn->query("SELECT * FROM order_details WHERE order_id ='".$row['order_id']."'");

                                      echo "";

                                      while ($card_row = $card_res->fetch_assoc()) {

                                        $total += $card_row['total_price'];

                                    ?>
                                      <tr>
                                        <td><?= $card_row['item_name'] ?></td>
                                        <td><?= $card_row['item_quantity'] ?></td>
                                        <td>Rs <?= $card_row['total_price'] ?></td>
                                      </tr>

                                    <?php
                                      }
                                    ?>
                                    </tbody>
                                  </table>  
                                </div>
                              </div>

                              <div class="order order_footer">
                                <div class="left_side order_date">
                                  <span>Date: </span><?= $date[0]; ?>
                                </div>
                                <div class="right_side order_date">
                                  <span>Grand Total: Rs </span><?= $total; ?>
                                </div>
                              </div>  
                            </div>
                            <hr/>

                            <?php

                                 }
                                }   
                                else
                                {
                                  echo "<div>NO ORDERS FOUND</div>";
                                }                         

                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
           </div>
         </div>
       </div>
     </div>
    </section>
  <!-- /Account Section -->
</div>

<?php include './php/footer.php';  ?>  

  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  

  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>

  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  

  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>

  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>

  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  
  <!-- Custom js -->
  <script src="js/custom.js"></script> 

  <!-- Parsley -->
  <script src="allow_me/vendors/parsleyjs/dist/parsley.min.js"></script>

  <!-- login/register -->
  <script type="text/javascript" src="js/my_script.js"></script>

  <!-- jQuery Smart Wizard -->
  <script src="allow_me/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

  <script type="text/javascript">
    
    $('#incomplete_orders hr').last().remove();
    $('#completed_orders hr').last().remove();
    $('#all_orders hr').last().remove();

  </script>


  </body>
</html>








