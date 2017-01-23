<!DOCTYPE html>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cardpine";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>C A R D Pine | Home</title>
    
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

    <!-- Google Font -->
   <!--  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'> -->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->   

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="img/flag/english.jpg" alt="english flag">ENGLISH
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><img src="img/flag/french.jpg" alt="">FRENCH</a></li>
                      <li><a href="#"><img src="img/flag/english.jpg" alt="">ENGLISH</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-usd"></i>USD
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                      <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>00-62-658-658</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="#">My Account</a></li>
                  <li class="hidden-xs"><a href="#">Wishlist</a></li>
                  <li class="hidden-xs"><a href="#">My Cart</a></li>
                  <li class="hidden-xs"><a href="#">Checkout</a></li>
                  <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.html">
                  <span class="fa fa-shopping-cart"></span>
                  <p>C A R D<strong>Pine</strong> <span>Your Card Collection</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">SHOPPING CART</span>
                  <span class="aa-cart-notify">0</span>
                </a>
                <!-- <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x RS 250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x RS 250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        RS 500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="#">Checkout</a>
                </div> -->
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Search here ex. 'man' ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="#">Home</a></li>
              <li><a href="#">Wedding Invitations<span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="#">Muslim</a></li>
                  <li><a href="#">Hindu</a></li>
                  <li><a href="#">Sikh</a></li>
                  <li><a href="#">Christian</a></li>                                               
                  <li><a href="#">And more.. <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Scroll Cards</a></li>
                      <li><a href="#">Designer Cards</a></li>
                      <li><a href="#">Cheap Cards</a></li>                                      
                    </ul>
                  </li>
                </ul>
              </li>
             <li><a href="#">Add-Ons<span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="#">Thankyou cards</a></li>
                  <li><a href="#">Place Cards</a></li>
                  <li><a href="#">RSVP Cards</a></li>
                  <li><a href="#">Programe Booklet</a></li>                                                
                  <li><a href="#">Menu Cards</a></li>                
                </ul>
              </li>
              <li><a href="#">About</a></li>            
              <li><a href="#">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
  
  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
         <ul class="seq-canvas">

            <?php 

              $sql = "SELECT * FROM slider WHERE status = 'published'";

              $res = $conn -> query($sql);



              while ($row = $res -> fetch_assoc()) {
                    # code                            

            ?>

            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="./allow_me/images/<?php echo ($row['background_img']); ?>" alt="Men slide img" />
              </div>
              <div class="seq-title">
               <span data-seq><?php echo ($row['sub_heading_top']); ?></span>                
                <h2 data-seq><?php echo ($row['main_text']); ?></h2>                
                <p data-seq><?php echo ($row['sub_heading_bottom']); ?></p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            
            <?php

              }

            ?>              
          </ul>
        <!-- slider navigation btn -->
<!--
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
-->
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">

            <?php 

              $sql = "SELECT * FROM tiles WHERE tile_on_left = 'yes'";

              $res = $conn -> query($sql);

              while ($row = $res -> fetch_assoc()) {
                  
            ?>

            <!-- promo left -->
            <div class="col-md-5 no-padding">                
              <div class="aa-promo-left">
                <div class="aa-promo-banner">                    
                  <img src="./allow_me/images/<?php echo ($row['tile_image']); ?>" alt="img">                    
                  <div class="aa-prom-content">
                    <span><?php echo ($row['top_heading']); ?></span>
                    <h4><a href="#"><?php echo ($row['tile_main_text']); ?></a></h4>                      
                  </div>
                </div>
              </div>
            </div>

            <?php
              }
            ?>

            <!-- promo right -->
            <div class="col-md-7 no-padding">
              <div class="aa-promo-right">

            <?php

              $sql = "SELECT * FROM tiles WHERE tile_on_left = 'no'";

              $res = $conn -> query($sql);

              while ($row = $res -> fetch_assoc()) {

            ?>

                <div class="aa-single-promo-right">
                  <div class="aa-promo-banner">                      
                    <img src="./allow_me/images/<?php echo ($row['tile_image']); ?>" alt="img">                      
                    <div class="aa-prom-content">
                      <span><?php echo ($row['top_heading']); ?></span>
                      <h4><a href="#"><?php echo ($row['tile_main_text']); ?></a></h4>                        
                    </div>
                  </div>
                </div>

          

          <?php

            }
           
          ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Promo section -->
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#men" data-toggle="tab">MUSLIM</a></li>
                    <li><a href="#women" data-toggle="tab">HINDU</a></li>
                    <li><a href="#sports" data-toggle="tab">SIKH</a></li>
                    <li><a href="#electronics" data-toggle="tab">CHRISTIAN</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="men">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/muslim1.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="#">M-765</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                        
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                          
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/muslim2.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">M-775</a></h4>
                              <span class="aa-product-price">RS 45.50</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/muslim3.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">M-705</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/muslim4.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">M-738</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/muslim5.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">M-717</a></h4>
                              <span class="aa-product-price">RS 45.50</span>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                           <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/muslim6.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">M-795</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/muslim7.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">M-744</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                           <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/muslim8.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">M-799</a></h4>
                              <span class="aa-product-price">RS 45.50</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>                        
                      </ul>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / men product category -->
                    <!-- start women product category -->
                    <div class="tab-pane fade" id="women">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/hindu1.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">H-567</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/hindu2.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">H-587</a></h4>
                              <span class="aa-product-price">RS 45.50</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/hindu3.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">H-554</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/hindu4.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">H-532</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/hindu5.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">H-521</a></h4>
                              <span class="aa-product-price">RS 45.50</span>
                            </figcaption>
                          </figure>
                         
                          <div class="aa-product-hvr-content">
                           <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/hindu6.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">H-537</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/hindu7.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">H-581</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                           <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/hindu8.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">H-586</a></h4>
                              <span class="aa-product-price">RS 45.50</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>                        
                      </ul>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / women product category -->
                    <!-- start sports product category -->
                    <div class="tab-pane fade" id="sports">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/sikh1.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">S-376</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                          
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/sikh2.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">S-387</a></h4>
                              <span class="aa-product-price">RS 45.50</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/sikh3.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">S-354</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/sikh4.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">S-378</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/sikh5.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">S-395</a></h4>
                              <span class="aa-product-price">RS 45.50</span>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                           <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/sikh6.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">S-367</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/sikh7.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">S-317</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                           <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/sikh8.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">S-358</a></h4>
                              <span class="aa-product-price">RS 45.50</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>                        
                      </ul>
                    </div>
                    <!-- / sports product category -->
                    <!-- start electronic product category -->
                    <div class="tab-pane fade" id="electronics">
                       <ul class="aa-product-catg">
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/christain1.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">C-153</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/christain2.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">C-101</a></h4>
                              <span class="aa-product-price">RS 45.50</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/christain3.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">C-167</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/christain4.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">C-143</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/christain5.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">C-178</a></h4>
                              <span class="aa-product-price">RS 45.50</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                           <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/christain6.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">C-185</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/christain7.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">C-111</a></h4>
                              <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                           <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="my_img/christain8.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">C-121</a></h4>
                              <span class="aa-product-price">RS 45.50</span>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>                        
                      </ul>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / electronic product category -->
                  </div>
                  <!-- quick view modal -->                  
                  <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">                      
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-6 col-sm-6 col-xs-12">                              
                              <div class="aa-product-view-slider">                                
                                <div class="simpleLens-gallery-container" id="demo-1">
                                  <div class="simpleLens-container">
                                      <div class="simpleLens-big-image-container">
                                          <a class="simpleLens-lens-image" data-lens-image="my_img/muslim7large.jpg">
                                              <img src="my_img/muslim7.jpg" class="simpleLens-big-image">
                                          </a>
                                      </div>
                                  </div>
                                  <!-- <div class="simpleLens-thumbnails-container">
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                      </a>                                    
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                      </a>

                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                      </a>
                                  </div> -->
                                </div>
                              </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="aa-product-view-content">
                                <h3>M-744</h3>
                                <div class="aa-price-block">
                                  <span class="aa-product-view-price">RS 34.99</span>
                                  <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                </div>
                                <p>Add on card paper will be generic color (Off-white) with deisgn to match chosen card.</p>
                                <h4>COLOR</h4>
                                <div class="aa-prod-view-size">
                                  <a href="#">BLUE</a>
                                  <a href="#">BROWN</a>
                                  <a href="#">RED</a>
                                  <a href="#">YELLOW</a>
                                </div>
                                <div class="aa-prod-quantity">
                                  <form action="">
                                    <select name="" id="">
                                      <option value="0" selected="1">1</option>
                                      <option value="1">2</option>
                                      <option value="2">3</option>
                                      <option value="3">4</option>
                                      <option value="4">5</option>
                                      <option value="5">6</option>
                                    </select>
                                  </form>
                                  <p class="aa-prod-category">
                                    Category: <a href="#">Muslim Invitations</a>
                                  </p>
                                </div>
                                <div class="aa-prod-view-bottom">
                                  <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                  <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                        
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- / quick view modal -->              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
  <!-- banner section -->
  <section id="aa-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">        
          <div class="row">
            <div class="aa-banner-area">
            <a href="#"><img src="my_img/bbanner.jpg" alt="fashion banner img"></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- popular section -->
  <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <!-- <li><a href="#popular" data-toggle="tab">Popular</a></li>
                <li><a href="#featured" data-toggle="tab">Featured</a></li> -->
                <li class="active"><a href="#latest" data-toggle="tab">Latest</a></li>                    
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">

                <!-- Start men popular category -->
               <!--  <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider"> -->
                    <!-- start single product item -->
                    <!-- <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div> -->
                      <!-- product badge -->
                     <!--  <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li> -->
                     <!-- start single product item -->
                    <!-- <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">RS 45.50</span>
                        </figcaption>
                      </figure>                      
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div> -->
                      <!-- product badge -->
                       <!-- <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li> -->
                    <!-- start single product item -->
                    <!-- <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      </figure>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                        <span class="aa-product-price">RS 45.50</span>
                      </figcaption>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div> -->
                      <!-- product badge -->
                       <!-- <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li> -->
                    <!-- start single product item -->
                    <!-- <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li> -->
                    <!-- start single product item -->
                    <!-- <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                      
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li> -->
                    <!-- start single product item -->
                    <!-- <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div> -->
                      <!-- product badge -->
                      <!-- <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li>  -->   
                    <!-- start single product item -->
                  <!--   <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div> -->
                      <!-- product badge -->
                     <!--  <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li> --> 
                    <!-- start single product item -->
                   <!--  <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div> -->
                      <!-- product badge -->
                     <!--  <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>                                                                                   
                  </ul>
                  <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div> -->
                <!-- / popular product category -->
                
                <!-- start featured product category -->
                <!-- <div class="tab-pane fade" id="featured">
                 <ul class="aa-product-catg aa-featured-slider"> -->
                    <!-- start single product item -->
                    <!-- <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div> -->
                      <!-- product badge -->
                      <!-- <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li> -->
                     <!-- start single product item -->
                    <!-- <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">RS 45.50</span>
                        </figcaption>
                      </figure>                      
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div> -->
                      <!-- product badge -->
                       <!-- <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li> -->
                    <!-- start single product item -->
                    <!-- <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      </figure>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                        <span class="aa-product-price">RS 45.50</span>
                      </figcaption>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div> -->
                      <!-- product badge -->
                       <!-- <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li> -->
                    <!-- start single product item -->
                    <!-- <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li> -->
                    <!-- start single product item -->
                    <!-- <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                      
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li> -->
                    <!-- start single product item -->
                    <!-- <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div> -->
                      <!-- product badge -->
                      <!-- <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li> -->    
                    <!-- start single product item -->
                    <!-- <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div> -->
                      <!-- product badge -->
                      <!-- <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li> --> 
                    <!-- start single product item -->
                    <!-- <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div> -->
                      <!-- product badge -->
                      <!-- <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>                                                                                   
                  </ul>
                  <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div> -->
                <!-- / featured product category -->

                <!-- start latest product category -->
                <div class="tab-pane fade in active" id="latest">
                  <ul class="aa-product-catg aa-latest-slider">
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="my_img/muslim1.jpg" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">M-765</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>
                     <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="my_img/hindu8.jpg" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">H-586</a></h4>
                          <span class="aa-product-price">RS 45.50</span>
                        </figcaption>
                      </figure>                      
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                       <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="my_img/sikh8.jpg" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      </figure>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#">S-358</a></h4>
                        <span class="aa-product-price">RS 45.50</span>
                      </figcaption>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                       <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="my_img/christain3.jpg" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">C-1671</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="my_img/muslim5.jpg" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">M-717</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                      
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="my_img/hindu2.jpg" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">H-587</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li>    
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="my_img/sikh4.jpg" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">S-378</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li> 
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="my_img/christain7.jpg" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">C-111</a></h4>
                          <span class="aa-product-price">RS 45.50</span><span class="aa-product-price"><del>RS 65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>                                                                                   
                  </ul>
                   <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / latest product category -->              
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>FREE SHIPPING</h4>
                <P>We offer 100% free shipping.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 DAYS MONEY BACK</h4>
                <P>We garentee money back in 30 days.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORT 24/7</h4>
                <P>We are always there to help you.</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
  <!-- Testimonial -->
  <section id="aa-testimonial">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">


              <?php 

                $sql = "SELECT * FROM testimonials WHERE testimonial_on_home = 'yes'";

                $res = $conn -> query($sql);



                while ($row = $res -> fetch_assoc()) {
                      # code                            

              ?>

              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="./allow_me/images/<?php echo ($row['customer_image']); ?>"" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p><?php echo ($row['customer_message']); ?></p>
                  <div class="aa-testimonial-info">
                    <p><?php echo ($row['customer_name']); ?></p>
                  </div>
                </div>
              </li>

              <?php

                }

              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->

  <!-- Latest Blog -->
  <!-- <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <h2>LATEST BLOG</h2>
            <div class="row"> -->
              <!-- single latest blog -->
              <!-- <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">                    
                    <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>  
                      <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>5K</span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p> 
                    <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div> -->
              <!-- single latest blog -->
              <!-- <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">                    
                    <a href="#"><img src="img/promo-banner-3.jpg" alt="img"></a>  
                      <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>5K</span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p> 
                     <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>         
                  </div>
                </div>
              </div> -->
              <!-- single latest blog -->
              <!-- <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">                    
                    <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>  
                      <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>5K</span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p> 
                    <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>    
      </div>
    </div>
  </section> -->
  <!-- / Latest Blog -->

  <!-- Client Brand -->
  <!-- <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
              <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
              <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
              <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
              <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
              <li><a href="#"><img src="img/client-brand-joomla.png" alt="joomla img"></a></li>
              <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
              <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
              <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
              <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
              <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- / Client Brand -->

  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Stay updated with lastest arrivals!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Main Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Wedding Invites</a></li>
                    <li><a href="#">Add-Ons</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Knowledge Base</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Delivery</a></li>
                      <li><a href="#">Returns</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Discount</a></li>
                      <li><a href="#">Special Offer</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Useful Links</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Site Map</a></li>
                      <li><a href="#">Search</a></li>
                      <li><a href="#">Advanced Search</a></li>
                      <li><a href="#">Suppliers</a></li>
                      <li><a href="#">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                      <p> 25 Astor Pl, Lal Chowk 10003, India</p>
                      <p><span class="fa fa-phone"></span>0 194-247-1234</p>
                      <p><span class="fa fa-envelope"></span>cardpine@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Designed by <a href="http://www.iacsoftware.com/">IAC SOFTWARE SOLUTIONS</a></p>
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.html">Register now!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>    

  <!-- jQuery library -->
  <script src="js/jquery.min.js"></script>
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

  </body>
</html>
<!DOCTYPE html>
<!--This is the home page-->
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>C A R D Pine | Admin</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.min.css" rel="stylesheet">

    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Datatables -->

    <link href="vendors/datatables.net/extensions/FixedHeader/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net/extensions/Scroller/css/scroller.bootstrap.min.css" rel="stylesheet">
    

    
    <link href="vendors/datatables.net/media/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net/extensions/Buttons/css/buttons.dataTables.css" rel="stylesheet">
    <link href="vendors/datatables.net/extensions/Select/css/select.dataTables.css" rel="stylesheet">
    <link href="vendors/datatables.net-editor/css/editor.dataTables.css" rel="stylesheet">



  </head>


  <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cardpine";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
  ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>C A R D Pine</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">

                  <li id="home_nav"><a><i class="fa fa-home"></i> Home </a></li>

                  <li id="category_nav"><a><i class="fa fa-edit"></i> Categories </a></li>

                  <li id="edit_card_nav"><a><i class="fa fa-desktop"></i> Cards </a></li>

                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <div class="menu_tabs">
            <!-- top menu tabs -->
            <div class="top_menu" >

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div id="add_slider" class="tile-stats">
                  <div class="icon"><i class="fa fa-plus-square"></i>
                  </div>
                  
                  <div class="count">389</div>
                  
                  <h3>EDIT SLIDER</h3>
                  
                  <p>EDIT SLIDER DETAILS.</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div id="add_tile" class="tile-stats">
                  <div class="icon"><i class="fa fa-plus-square"></i>
                  </div>
                    
                  <div class="count">389</div>

                  <h3>EDIT TILES</h3>
                  
                  <p>EDIT TILES DETAILS.</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div id="add_card" class="tile-stats">
                  <div class="icon"><i class="fa fa-plus-square"></i>
                  </div>
                  
                  <div class="count">389</div>
                  
                  <h3>ADD CARD</h3>
                  
                  <p>ADD CARD DETAILS.</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div id="add_testimonial" class="tile-stats">
                  <div class="icon"><i class="fa fa-plus-square"></i>
                  </div>
                  
                  <div class="count">389</div>
                  
                  <h3>ADD TESTI</h3>
                  
                  <p>ADD TESTIMONIAL DETAILS.</p>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <!-- content -->
            <div hidden id="content_add">  

              <!-- content to add slider to site -->
              <div class="row" id="slider_div">

                <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="x_panel">

                    <div class="x_title">
                      <h2>EDIT SLIDER DETAILS</h2>
                      <div class="clearfix"></div>
                    </div>

                    

                    <div class="x_content" style="display: block;">
                      <table id="slider_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>SLIDER ID</th>
                            <th>MAIN TEXT</th>
                            <th>TOP HEADING</th>
                            <th>BOTTOM HEADIND</th>
                            <th>SLIDER IMAGE</th>
                            <th>STATUS</th>
                          </tr>
                        </thead>
                      </table>  
                    </div>
                  </div>
                </div>
              </div>

              <!-- content to add tile to site -->
              <div class="row" id="tiles_div">
                <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="x_panel">

                    <div class="x_title">
                      <h2>EDIT TILES</h2>
                    <div class="clearfix"></div>
                    </div>

                      <div class="x_content" style="display: block;">
                        <table id="tiles_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>TILE ID</th>
                            <th>MAIN TEXT</th>
                            <th>TOP HEADING</th>
                            <th>TILE IMAGE</th>
                          </tr>
                        </thead>
                      </table>

  
                      </div>
                  </div>
                </div>
              </div>

              <!-- content to add card to site -->
              <div class="row" id="card_div">
                <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="x_panel">

                    <div class="x_title">
                      <h2>ADD NEW CARD</h2>
                    <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <div class="x_content" style="display: block;">
                    <br>

                    <form id="card_form" enctype="multipart/form-data" data-parsley-validate="" method="post"  class="form-horizontal form-label-left" novalidate="">

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="card_name">Card Name <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="card_name" id="card_name" required="required" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="5"><ul class="parsley-errors-list" id="parsley-id-5"></ul>
                          </div>
                        </div>
                  

                        <div class="form-group">
                          <label for="card_category" class="control-label col-md-3 col-sm-3 col-xs-12">Select Category 
                          <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="card_category" data-parsley-dropdown="true" name="card_category" class="select2_single form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                              <option  value="-1">Select a category</option>
                              <?php 

                                $sql = "SELECT category_name FROM category";

                                $res = $conn -> query($sql);

                                while ($row = $res -> fetch_assoc()) {
                                    # code                             

                              ?>
              
                              <option value = "<?php echo ($row['category_name']); ?>"><?php echo ($row['category_name']); ?></option>
                              
                              <?php

                                }

                              ?>
                            
                            </select>
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="card_price">Card Price <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="dropdown" name="card_price" data-parsley-type="digits" id="card_price" required="required" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="7"><ul class="parsley-errors-list" id="parsley-id-7"></ul>
                          </div>
                        </div>


                        <div class="form-group">
                          <label for="card_description"  class="control-label col-md-3 col-sm-3 col-xs-12">Card Description <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea type="text" style="resize: vertical;" required="required" id="card_description" name="card_description" class="resizable_textarea form-control col-md-7 col-xs-12 parsley-success" rows="3" data-parsley-id="8" ></textarea><ul class="parsley-errors-list" id="parsley-id-8"></ul>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="card_image" class="control-label col-md-3 col-sm-3 col-xs-12">Card Image<span class="required">* (900*1024)</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="card_image" data-parsley-fileextension="jpg png"  data-parsley-dimensions="true" data-parsley-dimensions-options='{"width": "900","height": "1024"}'  class="form-control col-md-7 col-xs-12" required="required" type="file" name="card_image" data-parsley-id="9">
                            <ul class="parsley-errors-list" id="parsley-id-9"></ul>
                          </div>
                        </div>
                
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <input type="submit" name="submit_card_details" value="Add Details" class="btn btn-success">
                          </div>
                        </div>

                      </form>
                    </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- content to add testimonial  -->
              <div class="row" id="testimonial_div">
                <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="x_panel">

                    <div class="x_title">
                      <h2>ADD NEW TESTIMONIAL</h2>
                    <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <div class="x_content" style="display: block;">
                    <br>

                    <form id="testimonial_form" enctype="multipart/form-data" data-parsley-validate="" method="post"  class="form-horizontal form-label-left" novalidate="">

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer_name">Customer Name <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="customer_name" id="customer_name" required="required" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="5"><ul class="parsley-errors-list" id="parsley-id-5"></ul>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer_message">Message <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea type="text" style="resize: vertical;" required="required" id="customer_message" name="customer_message" class="resizable_textarea form-control col-md-7 col-xs-12 parsley-success" rows="5" data-parsley-id="7" ></textarea><ul class="parsley-errors-list" id="parsley-id-7"></ul>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="customer_image" class="control-label col-md-3 col-sm-3 col-xs-12">Customer Image<span class="required">* (150*150)</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="customer_image" data-parsley-fileextension="jpg png"  data-parsley-dimensions="true" data-parsley-dimensions-options='{"width": "150","height": "150"}'  class="form-control col-md-7 col-xs-12" required="required" type="file" name="customer_image" data-parsley-id="9">
                            <ul class="parsley-errors-list" id="parsley-id-9"></ul>
                          </div>
                        </div>
                
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <input type="submit" name="submit_testimonial_details" value="Add Details" 
                            class="btn btn-success">
                          </div>
                        </div>

                      </form>
                    </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="clearfix"></div>

          <div class="content_main">
            
            <!-- content to add/edit slider -->
            <div hidden class="row" id="category_div">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">
                    <h2>EDIT CATEGORY DETAILS</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="display: block;">
                    <table id="category_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>CATEGORY ID</th>
                          <th>CATEGORY NAME</th>
                          <th>CATEGORY DESCRIPTION</th>
                          <th>STOCK</th>
                        </tr>
                      </thead>
                    </table>  
                  </div>
                </div>
              </div>
            </div>    

            <!-- content to edit/delete card -->
            <div hidden class="row" id="edit_card_div">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">
                    <h2>EDIT CARD DETAILS</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="display: block;">
                    <table id="card_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th></th>
                          <th>CARD NAME</th>
                          <th>CARD DESCRIPTION</th>
                          <th>CARD PRICE</th>
                          <th>CARD CATEGORY</th>
                          <th>CARD IMAGE</th>
                          <th>CARD ON HOME</th>
                        </tr>
                      </thead>
                    </table>  
                  </div>
                </div>
              </div>
            </div>   

            <!-- content to edit/delete testimonials -->
            <div  class="row" id="testimonials_div">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">
                    <h2>EDIT TESTIMONIALS DETAILS</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="display: block;">
                    <table id="testimonials_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>TESTIMONIAL ID</th>
                          <th>CUSTOMER NAME</th>
                          <th>CUSTOMER MESSAGE</th>
                          <th>CUSTOMES IMAGE</th>
                          <th>ON HOME</th>
                        </tr>
                      </thead>
                    </table>  
                  </div>
                </div>
              </div>

            </div> 





          </div>

        </div>
        
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            C A R D Pine - Admin Template by <a href="https://iacsoftware.com">IAC SOFTWARE SOLUTION</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/datatables.net/media/js/jquery.js"></script>               
    
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>

    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>

    <!-- Parsley -->
    <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
    <script src="vendors/parsleyjs/dist/laravel-parsley.js"></script> 

    <!-- Autosize -->
    <script src="vendors/autosize/dist/autosize.min.js"></script>

    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>

    <!-- Datatables -->
    <script src="vendors/datatables.net/media/js/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net/media/js/dataTables.bootstrap.js"></script>
    <script src="vendors/datatables.net/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net/extensions/Buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net/extensions/FixedHeader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net/extensions/Responsive/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net/extensions/Scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/datatables.net/extensions/Select/js/dataTables.select.min.js"></script>
    <script src="vendors/datatables.net-editor/js/dataTables.editor.min.js"></script>




<!-- file extention validation -->
<script>
    $(document).ready(function() {
        window.ParsleyValidator
            .addValidator('fileextension', function (value, requirement) {
                // the value contains the file path, so we can pop the extension
                var fileExtension = value.split('.').pop();
                var extent = requirement.split(" ");

                return fileExtension === extent[0] || fileExtension === extent[1];
            }, 32)
            .addMessage('en', 'fileextension', 'The extension doesn\'t match the required');

        $("#slider_form").parsley();
        $("#card_form").parsley();
        $("#tile_form").parsley();
        $("#testimonial_form").parsley();
    });
</script>


<!-- dropdown validation -->
<script>
    $(document).ready(function() {
        window.ParsleyValidator
            .addValidator('dropdown', function (value, requirement) {
                // the value contains the file path, so we can pop the extension

                

                if (requirement) 
                {
                  return value != -1;
                }

            }, 32)
            .addMessage('en', 'dropdown', 'Please select a valid option');

        $("#slider_form").parsley();
        $("#card_form").parsley();
        $("#tile_form").parsley();
        $("#testimonial_form").parsley();
    });
</script>




<!-- collapsable content -->
<script>


  $('#add_slider').click(function() {

    if($("#content_add").is(':visible') && $("#slider_div").is(':visible'))
    {
      $("#content_add").slideUp();
    }
    else if($("#content_add").is(':visible') && $("#slider_div").is(':hidden'))
    {
      $("#slider_div").slideDown();
      $("#tiles_div").slideUp();
      $("#card_div").slideUp();
      $("#testimonial_div").slideUp();
    }
    else
    {
      $("#content_add").slideDown();
      $("#slider_div").slideDown();
      $("#tiles_div").slideUp();
      $("#card_div").slideUp();
      $("#testimonial_div").slideUp();
    }
  });

  $('#add_tile').click(function() {
    // alert('hey');
    if($("#content_add").is(':visible') && $("#tiles_div").is(':visible'))
    {
      $("#content_add").slideUp();
    }
    else if($("#content_add").is(':visible') && $("#card_div").is(':hidden'))
    {
      $("#tiles_div").slideDown();
      $("#slider_div").slideUp();
      $("#card_div").slideUp();
      $("#testimonial_div").slideUp();
    }
    else
    {
      $("#content_add").slideDown();
      $("#tiles_div").slideDown();
      $("#slider_div").slideUp();
      $("#card_div").slideUp();
      $("#testimonial_div").slideUp();
    }
  });

  $('#add_card').click(function() {
    // alert('hey');
    if($("#content_add").is(':visible') && $("#card_div").is(':visible'))
    {
      $("#content_add").slideUp();
    }
    else if($("#content_add").is(':visible') && $("#card_div").is(':hidden'))
    {
      $("#card_div").slideDown();
      $("#tiles_div").slideUp();
      $("#slider_div").slideUp();
      $("#testimonial_div").slideUp();
    }
    else
    {
      $("#content_add").slideDown();
      $("#card_div").slideDown();
      $("#tiles_div").slideUp();
      $("#slider_div").slideUp();
      $("#testimonial_div").slideUp();
    }
  });

  $('#add_testimonial').click(function() {
    // alert('hey');
    if($("#content_add").is(':visible') && $("#testimonial_div").is(':visible'))
    {
      $("#content_add").slideUp();
    }
    else if($("#content_add").is(':visible') && $("#testimonial_div").is(':hidden'))
    {
      $("#testimonial_div").slideDown();
      $("#tiles_div").slideUp();
      $("#card_div").slideUp();
      $("#slider_div").slideUp();
    }
    else
    {
      $("#content_add").slideDown();
      $("#testimonial_div").slideDown();
      $("#tiles_div").slideUp();
      $("#card_div").slideUp();
      $("#slider_div").slideUp();
    }
  });


  $("#home_nav").click(function(){

  	$("#category_div").slideUp();
    $("#edit_card_div").slideUp();


  });

  $("#category_nav").click(function(){

  	$("#category_div").slideDown();
    $("#edit_card_div").slideUp();
    $("#content_add").slideUp();

  });

  $("#edit_card_nav").click(function(){

    $("#category_div").slideUp();
    $("#edit_card_div").slideDown();
    $("#content_add").slideUp();

  });


</script>

<!-- Autosize -->
<script>
  $(document).ready(function() {
    autosize($('.resizable_textarea'));
  });
</script>
<!-- /Autosize -->


<!-- Datatables -->
<script>

  var slider_editor,category_editor,card_editor,tiles_editor,testimonials_editor;

  $(document).ready(function() {

    {
          slider_editor = new $.fn.dataTable.Editor( {
              ajax: "../cardpine/get_slider_data.php",
              keys: true,
              table: "#slider_datatable-responsive",
              idSrc:  'slider_id',
              fields: [ {
                      label: "SLIDER ID:",
                      name: "slider_id",
                  }, {
                      label: "MAIN TEXT:",
                      name: "main_text"
                  }, {
                      label: "TOP HEADING:",
                      name: "sub_heading_top"
                  }, {
                      label: "BOTTOM HEADING:",
                      name: "sub_heading_bottom"
                  }, {
                      label: "IMAGE:",
                      name: "background_img", 
                      type: "upload"
                  }, {
                      label: "STATUS:",
                      name: "status",
                      type:  "select",
                      options: [
                          { label: "published", value: "published" },
                          { label: "unpublished", value: "unpublished" } 
                        ]
                      }
              ]
          } );

          $('#slider_datatable-responsive').DataTable({
              dom: "Bfrtip",
              ajax: "../cardpine/get_slider_data.php",
              columns: [
                  { 
                    data: "slider_id", 
                    
                  },
                  { 
                    data: "main_text",
                    className: 'editable'
                  },
                  { 
                    data: "sub_heading_top", 
                    className: 'editable'
                  },
                  { 
                    data: "sub_heading_bottom",
                    className: 'editable'
                  },
                  { 
                    data: "background_img",
                    className: 'editable'
                  },
                  { 
                    data: "status", 
                    className: 'editable'
                  }
              ],
              order: [ 0, 'asc' ],
              keys: {
                  columns: ':not(:first-child)',
                  keys: [ 9 ]
              },
              buttons: [
                
              ]
          });


          $('#slider_datatable-responsive').on( 'click', 'tbody td.editable', function (e) {
              slider_editor.inline( this, {
                  submitOnBlur: true
              } );
          } );

          $('#slider_datatable-responsive').on( 'key-focus', function ( e, datatable, cell ) {
              slider_editor.inline( cell.index() , {
                  
                  submitOnBlur: true
              });
          } );



          slider_editor.on( 'preSubmit', function ( e, o, action ) {

              if ( action !== 'remove' ) {

                  var main_text = slider_editor.field( 'main_text' );
                  var sub_heading_top = slider_editor.field( 'sub_heading_top' );
                  var sub_heading_bottom = slider_editor.field( 'sub_heading_bottom' );
                  var background_img = slider_editor.field( 'background_img' ); 
                  // Only validate user input values - different values indicate that
                  // the end user has not entered a value
                  if ( ! main_text.isMultiValue() ) {
                      if ( ! main_text.val() ) {
                          main_text.error( 'Value is required' );
                      }
                  }

                  if ( ! sub_heading_top.isMultiValue() ) {
                      if ( ! sub_heading_top.val() ) {
                          sub_heading_top.error( 'Value is required' );
                      }
                  }

                  if ( ! sub_heading_bottom.isMultiValue() ) {
                      if ( ! sub_heading_bottom.val() ) {
                          sub_heading_bottom.error( 'Value is required' );
                      }
                  }

                  var ext = background_img.val().split('.').pop();
                  if ( ! background_img.isMultiValue() ) {
                      if ( ext !== 'jpg' && ext !== 'png' ) {
                          background_img.error( 'Please upload an image (jpg or png only).' );
                      }
                  }


                  // ... additional validation rules
       
                  // If any error was reported, cancel the submission so it can be corrected
                  if ( this.inError() ) {
                      return false;
                  }
              }

          } );
    }

    {
      category_editor = new $.fn.dataTable.Editor( {
            ajax: "../cardpine/get_category_data.php",
            keys: true,
            table: "#category_datatable-responsive",
            idSrc:  'category_id',
            fields: [  {
                    label: "CATEGORY NAME:",
                    name: "category_name"
                }, {
                    label: "CATEGORY DESCRIPTION:",
                    name: "category_description",
                    type: "textarea"
                }
            ]
        } );


      $('#category_datatable-responsive').DataTable({
          dom: "Bfrtip",
          ajax: "../cardpine/get_category_data.php",
          columns: [
              { 
                data: "category_id", 
                
              },
              { 
                data: "category_name",
                className: 'editable'
              },
              { 
                data: "category_description", 
                className: 'editable'
              },
              { 
                data: "stock",
              }
          ],
          order: [ 0, 'asc' ],
          keys: {
              columns: [1,2],
              keys: [ 9 ]
          },
          buttons: [
            { extend:"create", editor:category_editor },
          ]
      });


      $('#category_datatable-responsive').on( 'click', 'tbody td.editable', function (e) {
          category_editor.inline( this, {
              submitOnBlur: true
          } );
      } );

      $('#category_datatable-responsive').on( 'key-focus', function ( e, datatable, cell ) {
          category_editor.inline( cell.index() , {
              submitOnBlur: true
          });
      } );

      category_editor.on( 'preSubmit', function ( e, o, action ) {

          if ( action !== 'remove' ) {

              var category_name = category_editor.field( 'category_name' );
              var category_description = category_editor.field( 'category_description' );
              
              // Only validate user input values - different values indicate that
              // the end user has not entered a value
              if ( ! category_name.isMultiValue() ) {
                  if ( ! category_name.val() ) {
                      category_name.error( 'Value is required' );
                  }
              }

              if ( ! category_description.isMultiValue() ) {
                  if ( ! category_description.val() ) {
                      category_description.error( 'Value is required' );
                  }
              }

              // ... additional validation rules
   
              // If any error was reported, cancel the submission so it can be corrected
              if ( this.inError() ) {
                  return false;
              }
          }

      } );
    }

    {
      card_editor = new $.fn.dataTable.Editor( {
        ajax: "../cardpine/get_card_data.php",
        keys: true,
        table: "#card_datatable-responsive",
        idSrc:  'card_id',
        fields: [ {
                label: "CARD NAME:",
                name: "card_name"
            }, {
                label: "CARD DESCRIPTION:",
                name: "card_description",
                type: "textarea"
            }, {
                label: "CARD PRICE:",
                name: "card_price"
            }, {
                label: "CARD CATEGORY:",
                name: "card_category",
                type: "select",
            }, {
                label: "CARd IMAGE:",
                name: "card_image", 
                type: "upload"
            }, {
                label: "CARD ON HOME:",
                name: "on_home",
                type:  "select",
                options: [
                    { label: "no", value: "no" },
                    { label: "yes", value: "yes" } 
                  ]
                }
          ]
      });


      $.post("../cardpine/get_category_data.php",{getOptions:"yes"},function(data){

      card_editor.field('card_category').update(data);

      },"json");

      $('#card_datatable-responsive').DataTable({
          dom: "Bfrtip",
          ajax: "../cardpine/get_card_data.php",
          columns: [  
              {
                data: null,
                defaultContent: '',
                className: 'select-checkbox',
                orderable: false
              },
              { 
                data: "card_name",
                className: 'editable'
              },
              { 
                data: "card_description", 
                className: 'editable'
              },
              { 
                data: "card_price",
                className: 'editable'
              },
              { 
                data: "card_category",
                className: 'editable'
              },
              { 
                data: "card_image", 
                className: 'editable'
              },
              { 
                data: "on_home", 
                className: 'editable'
              }
          ],
          select: {
            style:    'os',
            selector: 'td:first-child'
          },
          order: [ 1, 'asc' ],
          keys: {
              columns: ':not(:first-child)', 
              keys: [ 9 ]
          },
          buttons: [
            {extend:"create", editor:card_editor},
            {extend:"remove", editor:card_editor}
          ]
      });


      


      $('#card_datatable-responsive').on( 'click', 'tbody td.editable', function (e) {
          card_editor.inline( this, {
              submitOnBlur: true
          } );
      } );

      $('#card_datatable-responsive').on( 'key-focus', function ( e, datatable, cell ) {
          card_editor.inline( cell.index() , {
              submitOnBlur: true
          });
      } );



      card_editor.on( 'preSubmit', function ( e, o, action ) {

          if ( action !== 'remove' ) {

              var card_name = card_editor.field( 'card_name' );
              var card_description = card_editor.field( 'card_description' );
              var card_price = card_editor.field( 'card_price' );
              var card_image = card_editor.field( 'card_image' ); 
              // Only validate user input values - different values indicate that
              // the end user has not entered a value
              if ( ! card_name.isMultiValue() ) {
                  if ( ! card_name.val() ) {
                      card_name.error( 'Value is required' );
                  }
              }

              if ( ! card_description.isMultiValue() ) {
                  if ( ! card_description.val() ) {
                      card_description.error( 'Value is required' );
                  }
              }

              if ( ! card_price.isMultiValue() ) {
                  if ( ! card_price.val() ) {
                      card_price.error( 'Value is required' );
                  }
              }

              var ext = card_image.val().split('.').pop();
              if ( ! card_image.isMultiValue() ) {
                  if ( ext !== 'jpg' && ext !== 'png' ) {
                      card_image.error( 'Please upload an image (jpg or png only).' );
                  }
              }


              // ... additional validation rules
   
              // If any error was reported, cancel the submission so it can be corrected
              if ( this.inError() ) {
                  return false;
              }
          }

      } );
    }

    {
          tiles_editor = new $.fn.dataTable.Editor( {
              ajax: "../cardpine/get_tiles_data.php",
              keys: true,
              table: "#tiles_datatable-responsive",
              idSrc:  'tile_id',
              fields: [ {
                      label: "TILE ID:",
                      name: "tile_id",
                  }, {
                      label: "MAIN TEXT:",
                      name: "tile_main_text"
                  }, {
                      label: "TOP HEADING:",
                      name: "top_heading"
                  }, {
                      label: "IMAGE:",
                      name: "tile_image", 
                      type: "upload"
                  }
              ]
          } );


          $('#tiles_datatable-responsive').DataTable({
              dom: "Bfrtip",
              ajax: "../cardpine/get_tiles_data.php",
              columns: [
                  { 
                    data: "tile_id", 
                    
                  },
                  { 
                    data: "tile_main_text",
                    className: 'editable'
                  },
                  { 
                    data: "top_heading", 
                    className: 'editable'
                  },
                  
                  { 
                    data: "tile_image",
                    className: 'editable'
                  },
              ],
              order: [ 0, 'asc' ],
              keys: {
                  columns: ':not(:first-child)',
                  keys: [ 9 ]
              },
              buttons: [
                
              ]
          });


          $('#tiles_datatable-responsive').on( 'click', 'tbody td.editable', function (e) {
              tiles_editor.inline( this, {
                  submitOnBlur: true
              } );
          } );

          $('#tiles_datatable-responsive').on( 'key-focus', function ( e, datatable, cell ) {
              tiles_editor.inline( cell.index() , {
                  submitOnBlur: true
              });
          } );

          tiles_editor.on( 'preSubmit', function ( e, o, action ) {

            if ( action !== 'remove' ) {

                var tile_main_text = tiles_editor.field( 'tile_main_text' );
                var top_heading = tiles_editor.field( 'top_heading' );
                
                // Only validate user input values - different values indicate that
                // the end user has not entered a value
                if ( ! tile_main_text.isMultiValue() ) {
                    if ( ! tile_main_text.val() ) {
                        tile_main_text.error( 'Value is required' );
                    }
                }

                if ( ! top_heading.isMultiValue() ) {
                    if ( ! top_heading.val() ) {
                        top_heading.error( 'Value is required' );
                    }
                }


                // ... additional validation rules
     
                // If any error was reported, cancel the submission so it can be corrected
                if ( this.inError() ) {
                    return false;
                }
            }

          } );

    }

    {
          testimonials_editor = new $.fn.dataTable.Editor( {
              ajax: "../cardpine/get_testimonials_data.php",
              keys: true,
              table: "#testimonials_datatable-responsive",
              idSrc:  'testimonial_id',
              fields: [ {
                      label: "TILE ID:",
                      name: "testimonial_id",
                  }, {
                      label: "CUSTOMER NAME:",
                      name: "customer_name"
                  }, {
                      label: "CUSTOMER MESSAGE:",
                      name: "customer_message"
                  }, {
                      label: "CUSTOMER IMAGE:",
                      name: "customer_image", 
                      type: "upload"
                  }, {
                      label: "ON HOME:",
                      name: "testimonial_on_home", 
                      type: "select",
                      options: [
                        { label: "no", value: "no" },
                        { label: "yes", value: "yes" }
                      ]

                  }
              ]
          } );


          $('#testimonials_datatable-responsive').DataTable({
              dom: "Bfrtip",
              ajax: "../cardpine/get_testimonials_data.php",
              columns: [
                  { 
                    data: "testimonial_id", 
                    
                  },
                  { 
                    data: "customer_name",
                    className: 'editable'
                  },
                  { 
                    data: "customer_message", 
                    className: 'editable'
                  },  
                  { 
                    data: "customer_image",
                    className: 'editable'
                  },
                  { 
                    data: "testimonial_on_home",
                    className: 'editable'
                  }
              ],
              select: {
                style:    'os',
                selector: 'td:first-child'
              },
              order: [ 0, 'asc' ],
              keys: {
                  columns: ':not(:first-child)',
                  keys: [ 9 ]
              },
              buttons: [
                
              ]
          });


          $('#testimonials_datatable-responsive').on( 'click', 'tbody td.editable', function (e) {
              testimonials_editor.inline( this, {
                  submitOnBlur: true
              } );
          } );

          $('#testimonials_datatable-responsive').on( 'key-focus', function ( e, datatable, cell ) {
              testimonials_editor.inline( cell.index() , {
                  
                  submitOnBlur: true
              });
          } );



          testimonials_editor.on( 'preSubmit', function ( e, o, action ) {

              if ( action !== 'remove' ) {

                  var customer_name = testimonials_editor.field( 'customer_name' );
                  var customer_message = testimonials_editor.field( 'customer_message' );
                  var customer_image = testimonials_editor.field( 'customer_image' ); 
                  // Only validate user input values - different values indicate that
                  // the end user has not entered a value
                  if ( ! customer_name.isMultiValue() ) {
                      if ( ! customer_name.val() ) {
                          customer_name.error( 'Value is required' );
                      }
                  }

                  if ( ! customer_message.isMultiValue() ) {
                      if ( ! customer_message.val() ) {
                          customer_message.error( 'Value is required' );
                      }
                  }

                  var ext = customer_image.val().split('.').pop();
                  if ( ! customer_image.isMultiValue() ) {
                      if ( ext !== 'jpg' && ext !== 'png' ) {
                          customer_image.error( 'Please upload an image (jpg or png only).' );
                      }
                  }

                  // ... additional validation rules
       
                  // If any error was reported, cancel the submission so it can be corrected
                  if ( this.inError() ) {
                      return false;
                  }
              }

          } );
    }

    
  });



</script>
<!-- /Datatables -->




<!-- <script>
  var notice = new PNotify({ title: 'Regular Success', text: 'Data Entered Successfully!', type: 'success', styling: 'bootstrap3'});
</script> -->


  </body>


  <?php 


  if (isset($_POST['submit_card_details'])) {
  

                echo "<script>alert('hey');</script>";
               
                $target_dir = "../cardpine/images/";
                $base_path = "images/";
                
                // saving and retrieving image path from database
                $target_path = $base_path . basename($_FILES['card_image']['name']); 
                $target_file = $target_dir . basename($_FILES['card_image']['name']);
                
                
                $query = "INSERT into cards (card_name,card_price,card_category,card_description,card_image) "
                . "VALUES ('{$_POST['card_name']}','{$_POST['card_price']}','{$_POST['card_category']}','{$_POST['card_description']}','{$target_path}')";
               
                if (move_uploaded_file($_FILES["card_image"]["tmp_name"], $target_file)) {
                if ($conn->query($query) === TRUE){

                    if (stock($_POST['card_category'])) {
                      # code...

                      echo "<script>alert('Data has been inserted successfully.');</script>";

                    }
                    else
                    {
                      echo "<script>alert('some error');</script>";
                    }

                
                  } 
                else{
                       echo "--------------------------------------------Some error occured" . "Error: " . $query ." -------  ". $conn->error;
                    }
                } else {
                echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
                    }
                $conn->close();     
    
  }


  function stock($card_category)
  {

    $res =  $GLOBALS['conn']  -> query("SELECT stock from category WHERE category_name = '$card_category'");
    $count = 0;
    while ($row = $res -> fetch_assoc()) {
        # code...
        $count = $row['stock'] + 1;
    }

    $chk = $GLOBALS['conn'] -> query("UPDATE category SET stock='$count' WHERE  category_name = '$card_category'");

    return $chk;
  }


  if (isset($_POST['submit_testimonial_details'])) {
  

                
               
                $target_dir = "../cardpine/images/";
                $base_path = "images/";
                
                // saving and retrieving image path from database
                $target_path = $base_path . basename($_FILES['customer_image']['name']); 
                $target_file = $target_dir . basename($_FILES['customer_image']['name']);
                
                
                $query = "INSERT into testimonials (customer_name,customer_message,customer_image) "
                . "VALUES ('{$_POST['customer_name']}','{$_POST['customer_message']}','{$target_path}')";
               
                if (move_uploaded_file($_FILES["customer_image"]["tmp_name"], $target_file)) {
                if ($conn->query($query) === TRUE){
                echo "<script>alert('data successfully entered')</script>";
                    } 
                else{
                       echo "--------------------------------------------Some error occured" . "Error: " . $query ." -------  ". $conn->error;
                    }
                } else {
                echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
                    }
                $conn->close();     
    
  }


  ?>



</html>
