<div id="footer">
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
          <button type="button" id="close_login_dialog" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div id="login_div">
              <h4>Login</h4>
              <form id="login_form" class="aa-login-form">
                <input type="hidden" value="login" name="from">
                <label for="email">Email address<span>*</span></label>
                <input type="email" name="email" class="form-control parsley-success" data-parsley-id="101" required="" placeholder="Enter Email"><ul class="parsley-errors-list" id="parsley-id-101"></ul>
                <label for="password">Password<span>*</span></label>
                <input type="password" name="password" class="form-control parsley-success" data-parsley-id="102" required="" placeholder="Password"><ul class="parsley-errors-list" id="parsley-id-102"></ul>
              </form>
              <button class="aa-browse-btn" style="width: 100%;" id="submit_login">Login</button>
              <br/>
              <p class="aa-lost-password"><a style="cursor: pointer;" id="switchToReset">Lost your password?</a></p>
              <div>
                <div style="display: inline-block;">
                <fb:login-button data-size="xlarge" scope="public_profile,email" onlogin="checkLoginState()">facebook</fb:login-button>
                </div>
                <div id="gmail_btn" style="display: inline-block;" class="g-signin2">Gmail</div>
              </div>
              <div class="aa-register-now">
                Don't have an account?<a style="cursor: pointer;" id="switchToRegister">Register now!</a>
              </div>
              <div hidden id="error_message_login" style="color: red;" class="aa-register-now">
              </div>
            </div>
            <div hidden id="register_div">
              <h4>Register</h4>
              <form id="register_form" class="aa-login-form">
                <input type="hidden" value="register" name="from">
                <label for="email">Email address<span>*</span></label>
                <input type="email" name="email" class="form-control parsley-success" data-parsley-id="103" required="" placeholder="Enter Email"><ul class="parsley-errors-list" id="parsley-id-103"></ul>
                <label for="fullname">Full Name<span>*</span></label>
                <input type="text" name="fullname" class="form-control parsley-success" data-parsley-id="104" required="" placeholder="Enter Full Name"><ul class="parsley-errors-list" id="parsley-id-104"></ul>
                <label for="password">Password<span>*</span></label>
                <input type="password" name="password" class="form-control parsley-success" data-parsley-id="105" required="" placeholder="Password"><ul class="parsley-errors-list" id="parsley-id-105"></ul>
              </form>
              <button class="aa-browse-btn" style="width: 100%;" id="submit_register">Register</button>
              <br/>
              <div class="aa-register-now">
                do have an account?<a style="cursor: pointer;" id="switchToLogin">Login!</a>
              </div>
              <div hidden id="error_message_register" style="color: red;" class="aa-register-now">
              </div>
            </div>
            <div hidden id="reset_div">
              <h4>Reset</h4>
              <div hidden id="code_sent_message" style="color: green;">
              </div>
              <form id="reset_form" class="aa-login-form">
                <input type="hidden" value="reset" name="from">
                <label for="email">Email address<span>*</span></label>
                <input type="email" id="reset_email" name="email" class="form-control parsley-success" data-parsley-id="106" required="" placeholder="Enter Email"><ul class="parsley-errors-list" id="parsley-id-106"></ul>
                <label for="new_password">New Password<span>*</span></label>
                <input type="password" name="new_password" class="form-control parsley-success" data-parsley-id="107" required="" placeholder="New Password"><ul class="parsley-errors-list" id="parsley-id-107"></ul>
                <label for="confirm_password">Confirm Password<span>*</span></label>
                <input type="password" name="confirm_password" class="form-control parsley-success" data-parsley-id="108" required="" placeholder="Confirm Password"><ul class="parsley-errors-list" id="parsley-id-108"></ul>
                <label for="confirmation_code">Confirmation Code<span>*</span></label>
                <input type="password" name="confirmation_code" class="form-control parsley-success" data-parsley-id="109" required="" placeholder="Confirmation Code"><ul class="parsley-errors-list" id="parsley-id-109"></ul>
              </form>
              <button class="aa-browse-btn" disabled style="width: 100%;" id="submit_reset">Reset</button>
              <br/>
              <div class="aa-register-now">
                Send Confirmation Code to your email!<a style="cursor: pointer;" id="generateCode">SEND!</a>
              </div>
              <div hidden id="error_message_reset" style="color: red;" class="aa-register-now">
              </div>
            </div>
          </div>                        
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>  
  </div>