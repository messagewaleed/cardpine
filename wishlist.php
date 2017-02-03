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
    <title>C A R D Pine | Wishlist Page</title>
    
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
   <section id="cart-view">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="cart-view-area">
             <div class="cart-view-table aa-wishlist-table">
               <form action="">
                 <div class="table-responsive">
                    <table id="wishlist_table" class="table">
                      <thead>
                        <tr>
                          <th>Remove</th>
                          <th>Image</th>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Stock Status</th>
                          <th>Add To Cart</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php

                          $sql = "SELECT card_id FROM user_wishlist WHERE  user_email='".$_SESSION['user']."'";

                          $result = $conn->query($sql);


                          while ($row = $result->fetch_assoc()) {


                          $card_sql = "SELECT card_name,card_image,card_price FROM cards WHERE card_id = ".$row['card_id'];

                          $res = $conn->query($card_sql);

                          $card_data = $res->fetch_assoc();

                          $price = ($card_data['card_price']);

                        ?>

                        <tr id="<?php echo ($row['card_id']);?>_tr">
                          <td><a class="remove remove_wishlist" data="<?php echo ($_SESSION['user']);?>,<?php echo ($row['card_id']);?>" href="#"><fa class="fa fa-close"></fa></a></td>
                          <td><a href="#"><img src="./allow_me/images/cards/tiles/<?= $card_data['card_image']?>" alt="img"></a></td>
                          <td><a class="aa-cart-title" href="#"><?= $card_data['card_name']?></a></td>
                          <td>RS <?= $card_data['card_price']?></td>
                          <td>In Stock</td>
                          <td><a class="aa-add-to-cart-btn aa-add-card-btn" id="<?php echo ($row['card_id']);?>" >Add</a></td>
                        </tr>

                        <?php

                          }

                        ?>                    
                        </tbody>
                    </table>
                  </div>
               </form>             
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- / Cart view section -->
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

  </body>
</html>







