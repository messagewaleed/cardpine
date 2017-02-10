<!DOCTYPE html>

<?php

	include './php/sessions.php';
	include './allow_me/php/connection.php';

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>C A R D Pine | Checkout Page</title>
    
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
	 <!-- Cart view section -->
		 <section id="checkout">
		   	<div class="container">
		    	 <div class="row">
		       <div class="col-md-12">
		        <div class="checkout-area">
		          <form action="">
		            <div class="row">
		              <div id="wizard" class="form_wizard wizard_horizontal">
	                      <ul class="wizard_steps">
	                        <li>
	                          <a href="#step-1">
	                            <span class="step_no">1</span>
	                          </a>
	                        </li>
	                        <li>
	                          <a href="#step-2">
	                            <span class="step_no">2</span>
	                          </a>
	                        </li>
	                        <li>
	                          <a href="#step-3">
	                            <span class="step_no">3</span>
	                          </a>
	                        </li>
	                        <li>
	                          <a href="#step-4">
	                            <span class="step_no">4</span>
	                          </a>
	                        </li>
	                      </ul>

		                      <div class="panel-group" id="step-1">

		                        <!-- Billing Details -->
		                        <div class="panel panel-default aa-checkout-billaddress">
		                          <div class="panel-heading">
		                            <h4 class="panel-title">
		                              <a>
		                                Billing Details
		                              </a>
		                            </h4>
		                          </div>
		                          <div id="collapseThree" class="panel-collapse collapse in">
		                            <div class="panel-body">
		                              <div class="row">
		                                <div class="col-md-6">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="text" id="billing_first_name"  required="" placeholder="First Name*" class="form-control parsley-success" data-parsley-id="200" /><ul class="parsley-errors-list" id="parsley-id-200"></ul>
		                                  </div>                             
		                                </div>
		                                <div class="col-md-6">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="text" id="billing_last_name" required="" placeholder="Last Name*" class="form-control parsley-success" data-parsley-id="201" /><ul class="parsley-errors-list" id="parsley-id-201"></ul>
		                                  </div>
		                                </div>
		                              </div> 
		                              <div class="row">
		                                <div class="col-md-12">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="text" name="billing_company_name" class="form-control" placeholder="Company name">
		                                  </div>                             
		                                </div>                            
		                              </div>  
		                              <div class="row">
		                                <div class="col-md-6">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="email" id="billing_email" required="" placeholder="Email Address*" class="form-control parsley-success" data-parsley-id="202" /><ul class="parsley-errors-list" id="parsley-id-202"></ul>
		                                  </div>                             
		                                </div>
		                                <div class="col-md-6">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="tel" id="billing_tel" required="" placeholder="Phone*" class="form-control parsley-success" data-parsley-id="203" /><ul class="parsley-errors-list" id="parsley-id-203"></ul>
		                                  </div>
		                                </div>
		                              </div> 
		                              <div class="row">
		                                <div class="col-md-12">
		                                  <div class="aa-checkout-single-bill">
		                                    <textarea id="billing_address" required="" class="form-control parsley-success" data-parsley-id="204" placeholder="Address*" rows="3"></textarea><ul class="parsley-errors-list" id="parsley-id-204"></ul>
		                                  </div>                             
		                                </div>                            
		                              </div>   
		                              <div class="row">
		                                <div class="col-md-6">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="text" id="billing_appartment" class="form-control" placeholder="Appartment, Suite etc.">
		                                  </div>                             
		                                </div>
		                                <div class="col-md-6">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="text" id="billing_city" required="" placeholder="City / Town*" class="form-control parsley-success" data-parsley-id="205" /><ul class="parsley-errors-list" id="parsley-id-205"></ul>
		                                  </div>
		                                </div>
		                              </div>   
		                              <div class="row">
		                                <div class="col-md-6">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="text" id="billing_district" required="" placeholder="District*" class="form-control parsley-success" data-parsley-id="206" /><ul class="parsley-errors-list" id="parsley-id-206"></ul>
		                                  </div>                             
		                                </div>
		                                <div class="col-md-6">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="number" id="billing_pincode" required="" placeholder="Pincode / ZIP*" class="form-control parsley-success" data-parsley-id="207" /><ul class="parsley-errors-list" id="parsley-id-207"></ul>
		                                  </div>
		                                </div>
		                              </div>                                    
		                            </div>
		                          </div>
		                        </div>

		                      </div>


		                      <div class="panel-group" id="step-2">

		                        <!-- Shipping Address -->
		                        <div  class="panel panel-default aa-checkout-billaddress">
		                          <div class="panel-heading">
		                            <h4 class="panel-title">
		                              <a>
		                                Shippping Address
		                              </a>
		                            </h4>
		                          </div>
		                          <div id="collapseFour" class="panel-collapse collapse in">
		                            <div class="panel-body">
		                             <div class="row">
		                                <div class="col-md-6">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="text" id="shipping_first_name" required="" placeholder="First Name*" class="form-control parsley-success" data-parsley-id="208" /><ul class="parsley-errors-list" id="parsley-id-208"></ul>
		                                  </div>                             
		                                </div>
		                                <div class="col-md-6">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="text" id="shipping_last_name" required="" placeholder="Last Name*" class="form-control parsley-success" data-parsley-id="209" /><ul class="parsley-errors-list" id="parsley-id-209"></ul>
		                                  </div>
		                                </div>
		                              </div> 
		                              <div class="row">
		                                <div class="col-md-12">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="text" id="shipping_company_name" class="form-control" placeholder="Company name">
		                                  </div>                             
		                                </div>                            
		                              </div>  
		                              <div class="row">
		                                <div class="col-md-6">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="email" id="shipping_email" required="" placeholder="Email Address*" class="form-control parsley-success" data-parsley-id="210" /><ul class="parsley-errors-list" id="parsley-id-210"></ul>
		                                  </div>                             
		                                </div>
		                                <div class="col-md-6">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="tel" id="shipping_tel" required="" placeholder="Phone*" class="form-control parsley-success" data-parsley-id="211" /><ul class="parsley-errors-list" id="parsley-id-211"></ul>
		                                  </div>
		                                </div>
		                              </div> 
		                              <div class="row">
		                                <div class="col-md-12">
		                                  <div class="aa-checkout-single-bill">
		                                    <textarea id="shipping_address" required="" placeholder="Address*" class="form-control parsley-success" data-parsley-id="212" rows="3"></textarea><ul class="parsley-errors-list" id="parsley-id-212"></ul>
		                                  </div>                             
		                                </div>                            
		                              </div>   
		                              <div class="row">
		                                <div class="col-md-6">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="text" id="shipping_appartment" placeholder="Appartment, Suite etc.">
		                                  </div>                             
		                                </div>
		                                <div class="col-md-6">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="text" id="shipping_city" required="" placeholder="City / Town*" class="form-control parsley-success" data-parsley-id="213" /><ul class="parsley-errors-list" id="parsley-id-213"></ul>
		                                  </div>
		                                </div>
		                              </div>   
		                              <div class="row">
		                                <div class="col-md-6">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="text" id="shipping_district" required="" placeholder="District*" class="form-control parsley-success" data-parsley-id="214" /><ul class="parsley-errors-list" id="parsley-id-214"></ul>
		                                  </div>                             
		                                </div>
		                                <div class="col-md-6">
		                                  <div class="aa-checkout-single-bill">
		                                    <input type="number" id="shipping_pincode" required="" placeholder="Pincode / ZIP*" class="form-control parsley-success" data-parsley-id="215" /><ul class="parsley-errors-list" id="parsley-id-215"></ul>
		                                  </div>
		                                </div>
		                              </div>              
		                            </div>
		                          </div>
		                        </div>

		                      </div>


	                      <div class="panel-group" id="step-3">

	                      	<!-- Order Summary -->
	                        <div class="panel panel-default aa-checkout-odersummary">
	                          <div class="panel-heading">
	                            <h4 class="panel-title">
	                              <a>
	                                Order Summary 
	                              </a>
	                            </h4>
	                          </div>
	                          <div id="collapseFour" class="panel-collapse collapse in">
		                        <div class="aa-order-summary-area">
		                          <table class="table table-responsive">
		                            <thead>
		                              <tr>
		                                <th>Product</th>
		                                <th>Total</th>
		                              </tr>
		                            </thead>
		                            <tbody>
		                              <?php 

		                                $sql = "SELECT * FROM user_cart WHERE user_email = '".$_SESSION['user']."'";
		                                $result = $conn->query($sql);

		                                $total=0;
		                                  $sub_total=0;

		                                  while ($row = $result->fetch_assoc()) {

		                                    $quantity = $row['total_quantity'];

		                                    $card_sql = "SELECT card_name,card_image,card_price FROM cards WHERE card_id = ".$row['card_id'];

		                                    $res = $conn->query($card_sql);

		                                    $card_data = $res->fetch_assoc();

		                                    $sub_total = ($quantity*$card_data['card_price']);

		                                    $total = $total + $sub_total;

		                              ?>

		                              <tr>
		                                <td><?= $card_data['card_name']?> <strong> x  <?= $quantity?></strong></td>
		                                <td>RS <?= $sub_total ?></td>
		                              </tr>

		                              <?php 
		                                }
		                              ?>
		                            </tbody>
		                            <tfoot>
		                              <tr>
		                                <th>Subtotal</th>
		                                <td>RS <?= $total ?></td>
		                              </tr>
		                               <tr>
		                                <th>Total</th>
		                                <td>$RS <?= $total ?></td>
		                              </tr>
		                            </tfoot>
		                          </table>
		                        </div>
		                      </div>
	                        </div>

	                      </div>

	                      <div class="panel-group" id="step-4">

	                      	<!-- Payment Options -->
	                        <div class="panel panel-default aa-checkout-paymentoption">
	                          <div class="panel-heading">
	                            <h4 class="panel-title">
	                              <a>
	                                Payment Options 
	                              </a>
	                            </h4>
	                          </div>
	                          <div id="collapseFour" class="panel-collapse collapse in">
		                        <div class="aa-payment-method">                    
		                          <label for="cashdelivery"><input type="radio" id="cashdelivery" name="optionsRadios"> Cash on Delivery </label>
		                          <label for="paypal"><input type="radio" id="paypal" name="optionsRadios" checked> Via Paypal </label>
		                          <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark">    
		                          <input type="submit" value="Place Order" class="aa-browse-btn">                
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
	 <!-- / Cart view section -->

	 <form id="hidden_form" hidden>

	 	<input type="text" name="email" value="<?= $_SESSION['user']?>" />
	 	<textarea id="full_billing_address" name="billing_address"></textarea>
	 	<textarea id="full_shipping_address" name="shipping_address"></textarea>

	 </form>
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




  </body>
</html>
