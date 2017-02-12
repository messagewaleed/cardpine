<?php

  include './php/sessions.php';
  include './allow_me/php/connection.php';

  if (isset($_GET['cid'])) {

  $card_id = $_GET['cid'];

  $sql = "SELECT * from cards WHERE card_id = $card_id";

  $result = $conn->query($sql);

  $data = $result -> fetch_assoc();

  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>C A R D Pine | Product Detail</title>
    
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

  <div id="main_page_content">
    <!-- product category -->
    <section id="aa-product-details">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-product-details-area">
              <div class="aa-product-details-content">
                <div class="row">
                  <!-- Modal view slider -->
                  <div class="col-md-5 col-sm-5 col-xs-12">                              
                    <div class="aa-product-view-slider">                                
                      <div id="demo-1" class="simpleLens-gallery-container">
                        <div class="simpleLens-container">
                          <div class="simpleLens-big-image-container"><a data-lens-image="./allow_me/images/cards/main/<?php echo ($data['card_image']);?>" class="simpleLens-lens-image"><img src="./allow_me/images/cards/tiles/<?php echo ($data['card_image']);?>" class="simpleLens-big-image"></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal view content -->
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="aa-product-view-content">
                      <h3><?php echo ($data['card_name']);?></h3>
                      <div class="aa-price-block">
                        <span class="aa-product-view-price">Rs. <?php echo ($data['card_price']);?></span>
                        <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                      </div>
                      <p><?php echo ($data['card_description']);?></p>


                      <div class="aa-prod-quantity">
                        <form action="">
                          <select id="choose_quantity" name="">
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                          </select>
                        </form>
                        <p class="aa-prod-category">
                          Category: <a href="#"><?php echo ($data['card_category']);?></a>
                        </p>
                      </div>
                      <div class="aa-prod-view-bottom">
                        <a id="add_toCart" class="aa-add-to-cart-btn" data="<?=$card_id;?>">Add To Cart</a>
                        <?php 

                          $count_rows = 0;

                          if (isset($_SESSION['user'])) {

                            $res = $conn->query("SELECT * FROM user_wishlist WHERE card_id = $card_id and user_email ='".$_SESSION['user']."'");

                            $count_rows = $res->num_rows;

                          }

                        ?>
                        <a id="add_toWishlist" data="<?=$card_id;?>" class="aa-add-to-cart-btn">
                        <?php 
                          if ($count_rows != 0) {
                            echo "Remove From Wishlist";
                          }
                          else {
                            echo "Wishlist";
                          }
                        ?></a>
                        <a class="aa-add-to-cart-btn" href="#">Compare</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="aa-product-details-bottom">
                <ul class="nav nav-tabs" id="myTab2">
                  <li><a href="#review" data-toggle="tab">Reviews</a></li>                
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane fade " id="review">
                   <div class="aa-product-review-area">
                   <?php

                     $count_sql="SELECT COUNT(*) FROM user_reviews WHERE card_id = $card_id";

                     $result = $conn->query($count_sql);

                     $count = $result -> fetch_assoc();

                   ?>
                     <h4><?= $count['COUNT(*)']?> Reviews for <?= $data['card_name']?></h4> 
                     <ul class="aa-review-nav">

                      <?php

                        $sql="SELECT * FROM user_reviews WHERE card_id = $card_id";

                        $result = $conn->query($sql);

                        while ($row = $result -> fetch_assoc()) {                     

                      ?>

                       <li>
                          <div class="media">
                            <div class="media-body">
                              <h4 class="media-heading"><strong><?= $row['user_name']?></strong> - <span><?php $date = explode('.',$row['added_on']); echo $date[0];  ?></span></h4>
                              <div class="aa-product-rating">
                                <?php
                                  if($row['user_rating'] == '1')
                                  {
                                    ?>

                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star-o"></span>
                                      <span class="fa fa-star-o"></span>
                                      <span class="fa fa-star-o"></span>
                                      <span class="fa fa-star-o"></span>

                                    <?php
                                  }elseif($row['user_rating'] == '2')
                                  {
                                ?>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star-o"></span>
                                      <span class="fa fa-star-o"></span>
                                      <span class="fa fa-star-o"></span>

                                    <?php
                                  }elseif($row['user_rating'] == '3')
                                  {
                                ?>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star-o"></span>
                                      <span class="fa fa-star-o"></span>

                                    <?php
                                  }elseif($row['user_rating'] == '4')
                                  {
                                ?>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star-o"></span>

                                    <?php
                                  }elseif($row['user_rating'] == '5')
                                  {
                                ?>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>

                                    <?php
                                  }
                                ?>

                                
                              </div>
                              <p><?= $row['user_review']?></p>
                            </div>
                          </div>
                        </li>

                      <?php

                        }

                      ?>
                     </ul>
                     <h4>Add a review</h4>
                     <div class="aa-your-rating">
                       <p>Your Rating</p>
                       <a><span id="one_star" class="rate_star fa fa-star"></span></a>
                       <a><span id="two_star" class="rate_star fa fa-star-o"></span></a>
                       <a><span id="three_star" class="rate_star fa fa-star-o"></span></a>
                       <a><span id="four_star" class="rate_star fa fa-star-o"></span></a>
                       <a><span id="five_star" class="rate_star fa fa-star-o"></span></a>
                     </div>
                     <!-- review form -->
                     <form method="post" class="aa-review-form">
                        <input type="hidden" id="rating" value="1" name="rating">
                        <input type="hidden"  value="<?php echo ($card_id);?>" name="card_id">
                        <div class="form-group">
                          <label for="rewiew">Your Review</label>
                          <textarea class="form-control" rows="3" required="" name="review"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" required="" name="name" placeholder="Name">
                        </div>  
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" required="" name="email" placeholder="example@gmail.com">
                        </div>

                        <button type="submit" name="submit_review" class="btn btn-default aa-review-submit">Submit</button>
                     </form>
                   </div>
                  </div>            
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / product category -->
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

  <?php

    if (isset($_POST['submit_review'])) {

      $card_id = $_POST['card_id'];
      $rating = $_POST['rating'];
      $review = $_POST['review'];
      $email = $_POST['email'];
      $name = $_POST['name'];
      $found = false;

      $sql = "INSERT INTO user_reviews (card_id,user_name,user_email,user_review,user_rating) VALUES ($card_id,'$name','$email','$review',$rating)";

      $select = "SELECT user_email from user_credentials";

      $result = $conn -> query($select);

      while ($row = $result -> fetch_assoc()) {
        if ($row['user_email'] == $email) {
          $found = true;
          break;
        }
      }

      if ($found) {
        if ($conn->query($sql) === TRUE)
        {
          echo "<script>alert('Review Submitted');</script>";
        }
        else
        {
          echo "<script>alert('some error -> ".$conn->error."');</script>";
        }
      }
      else
      {
        echo "<script>alert('Please Register First!');</script>";
      }

      
      

    }


  ?>


</html>
