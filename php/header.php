<div id="header">
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
                    <li><a id="account_page">My Account</a></li>
                    <li class="hidden-xs"><a id="wishlist_page">Wishlist</a></li>
                    <li class="hidden-xs"><a id="cart_page">My Cart</a></li>
                    <li class="hidden-xs"><a id="checkout_page">Checkout</a></li>

                    <?php

                      if (isset($_SESSION['logged_in'])) {

                    ?>

                    <li><a href="" id="logoff_btn" >Logout</a></li>

                    <?php

                      }
                      else
                      {

                    ?>
   
                    <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>

                    <?php

                      }

                    ?>
                    
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
                  <a href="index.php">
                    <span class="fa fa-shopping-cart"></span>
                    <p>C A R D<strong>Pine</strong> <span>Your Card Collection</span></p>
                  </a>
                  <!-- img based logo -->
                  <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                </div>
                <!-- / logo  -->
                 <!-- cart box -->


                <div id="card_box" class="aa-cartbox">
                  <?php include './php/show_cart.php'; ?>
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
  </div>