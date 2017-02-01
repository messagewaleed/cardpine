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

            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
              <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
              <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
            </fieldset>
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

                          <?php

                            $sql = "SELECT * FROM cards WHERE card_category = 'muslim' AND on_home = 'yes'" ;

                            $res = $conn -> query($sql);

                            while ($row = $res -> fetch_assoc()) {

                              $tile_image = 'tile_'.$row['card_image'];

                          ?>

                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="product_detail.php?cid=<?php echo ($row['card_id']); ?>"><img src="./allow_me/images/cards/tiles/<?php echo ($row['card_image']); ?>" alt="polo shirt img"></a>
                              <a class="aa-add-card-btn" id="<?php echo ($row['card_id']);?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                <figcaption>
                                <h4 class="aa-product-title"><a href="#"><?php echo ($row['card_name']) ;?></a></h4>
                                <span class="aa-product-price">RS <?php echo ($row['card_price']) ;?>
                              </figcaption>
                            </figure>                        
                            <div class="aa-product-hvr-content">
                              <a id="<?php echo ($row['card_id']);?>" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                              <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                              <a href="#" data-toggle2="tooltip" class="quick_view" id="<?php echo ($row['card_id']);?>" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                          
                            </div>
                          </li>

                          <?php

                            }

                          ?>                      
                        </ul>
                        <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                      </div>
                      <!-- / men product category -->


                      <!-- start women product category -->
                      <div class="tab-pane fade" id="women">
                        <ul class="aa-product-catg">

                          <?php

                            $sql = "SELECT * FROM cards WHERE card_category = 'hindu' AND on_home = 'yes'" ;

                            $res = $conn -> query($sql);

                            while ($row = $res -> fetch_assoc()) {

                              $tile_image = 'tile_'.$row['card_image'];

                          ?>

                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="product_detail.php?cid=<?php echo ($row['card_id']); ?>"><img src="./allow_me/images/cards/tiles/<?php echo ($row['card_image']); ?>" alt="polo shirt img"></a>
                              <a class="aa-add-card-btn" id="<?php echo ($row['card_id']);?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                <figcaption>
                                <h4 class="aa-product-title"><a href="#"><?php echo ($row['card_name']) ;?></a></h4>
                                <span class="aa-product-price">RS <?php echo ($row['card_price']) ;?>
                              </figcaption>
                            </figure>                        
                            <div class="aa-product-hvr-content">
                              <a id="<?php echo ($row['card_id']);?>" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                              <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                              <a href="#" data-toggle2="tooltip" class="quick_view" id="<?php echo ($row['card_id']);?>" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                          
                            </div>
                          </li>

                          <?php

                            }

                          ?>  
                                                 
                        </ul>
                        <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                      </div>
                      <!-- / women product category -->
                      <!-- start sports product category -->
                      <div class="tab-pane fade" id="sports">
                        <ul class="aa-product-catg">
                          <?php

                            $sql = "SELECT * FROM cards WHERE card_category = 'sikh' AND on_home = 'yes'" ;

                            $res = $conn -> query($sql);

                            while ($row = $res -> fetch_assoc()) {

                              $tile_image = 'tile_'.$row['card_image'];

                          ?>

                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="product_detail.php?cid=<?php echo ($row['card_id']); ?>"><img src="./allow_me/images/cards/tiles/<?php echo ($row['card_image']); ?>" alt="polo shirt img"></a>
                              <a class="aa-add-card-btn" id="<?php echo ($row['card_id']);?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                <figcaption>
                                <h4 class="aa-product-title"><a href="#"><?php echo ($row['card_name']) ;?></a></h4>
                                <span class="aa-product-price">RS <?php echo ($row['card_price']) ;?>
                              </figcaption>
                            </figure>                        
                            <div class="aa-product-hvr-content">
                              <a id="<?php echo ($row['card_id']);?>" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                              <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                              <a href="#" data-toggle2="tooltip" class="quick_view" id="<?php echo ($row['card_id']);?>" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                          
                            </div>
                          </li>

                          <?php

                            }

                          ?>                          
                        </ul>
                      </div>
                      <!-- / sports product category -->
                      <!-- start electronic product category -->
                      <div class="tab-pane fade" id="electronics">
                         <ul class="aa-product-catg">
                          <?php

                            $sql = "SELECT * FROM cards WHERE card_category = 'christian' AND on_home = 'yes'" ;

                            $res = $conn -> query($sql);

                            while ($row = $res -> fetch_assoc()) {

                          ?>

                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="product_detail.php?cid=<?php echo ($row['card_id']); ?>"><img src="./allow_me/images/cards/tiles/<?php echo ($row['card_image']); ?>" alt="polo shirt img"></a>
                              <a class="aa-add-card-btn" id="<?php echo ($row['card_id']);?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                <figcaption>
                                <h4 class="aa-product-title"><a href="#"><?php echo ($row['card_name']) ;?></a></h4>
                                <span class="aa-product-price">RS <?php echo ($row['card_price']) ;?>
                              </figcaption>
                            </figure>                        
                            <div class="aa-product-hvr-content">
                              <a id="<?php echo ($row['card_id']);?>" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                              <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                              <a href="#" data-toggle2="tooltip" class="quick_view" id="<?php echo ($row['card_id']);?>" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                          
                            </div>
                          </li>

                          <?php

                            }

                          ?>                         
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
                                            <a id="dialog_zoom_image" class="simpleLens-lens-image" data-lens-image="./allow_me/images/cards/main/hindu6.jpg">
                                                <img id="dialog_display_image"  src="./allow_me/images/cards/tiles/hindu6.jpg" class="simpleLens-big-image">
                                            </a>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- Modal view content -->
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="aa-product-view-content">
                                  <h3 id="dialog_card_name">M-744</h3>
                                  <div class="aa-price-block">
                                    <span id="dialog_card_price" class="aa-product-view-price">RS 34.99</span>
                                    <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                  </div>
                                  <p id="dialog_card_description">Add on card paper will be generic color (Off-white) with deisgn to match chosen card.</p>
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
                                      Category: <a id="dialog_card_category" href="#">Muslim Invitations</a>
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
    <!-- banner section -->


    <!-- popular section -->
    <section id="aa-popular-category">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="aa-popular-category-area">
                <!-- start prduct navigation -->
               <ul class="nav nav-tabs aa-products-tab">
                  <li class="active"><a href="#latest" data-toggle="tab">Latest</a></li>                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">

                  <!-- start latest product category -->
                  <div class="tab-pane fade in active" id="latest">
                    <ul class="aa-product-catg aa-latest-slider">



                      <?php

                        $sql = "SELECT * FROM cards WHERE is_latest = 'yes'" ;

                        $res = $conn -> query($sql);

                        while ($row = $res -> fetch_assoc()) {


                      ?>

                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="product_detail.php?cid=<?php echo ($row['card_id']); ?>"><img src="./allow_me/images/cards/tiles/<?php echo ($row['card_image']); ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" id="<?php echo ($row['card_id']);?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                            <h4 class="aa-product-title"><a href="#"><?php echo ($row['card_name']) ;?></a></h4>
                            <span class="aa-product-price">RS <?php echo ($row['card_price']) ;?>
                          </figcaption>
                        </figure>                        
                        <div class="aa-product-hvr-content">
                          <a id="<?php echo ($row['card_image']); ?>" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                          <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                          <a href="#" data-toggle2="tooltip" data-placement="top" class="quick_view" id="<?php echo ($row['card_id']);?>" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                          
                        </div>
                      </li>

                      <?php

                        }

                      ?>  
                                                                                    
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
