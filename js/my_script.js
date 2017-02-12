
var url = "./php/user_login_register.php";
var session_url = "./php/sessions.php";
var wishlist_url = "./php/wishlist.php";
var cart_url = "./php/cart.php";
var googleUser = {};
billing_address_height=0;
shipping_address_height=0;

$( document ).ready(function() {

  var loc = window.location.pathname;
  if (loc.includes("checkout")) {

    $('#wizard').smartWizard();

    $('.buttonNext').addClass('btn btn-success');
    $('.buttonPrevious').addClass('btn btn-primary');
    $('.buttonFinish').addClass('btn btn-default');

    $('#card_box').hide();


    $('#billing_addresses').children('.set_address').each(function(){

      console.log("height billing: "+$(this).height());

      if ($(this).height() > billing_address_height)
      {
        billing_address_height = $(this).height();
      }

    });

    $('#shipping_addresses').children('.set_address').each(function(){

      console.log("height: "+$(this).height());

      if ($(this).height() > shipping_address_height)
      {
        shipping_address_height = $(this).height();
      }

    });

  }

  if (loc.includes("index") || loc == "/cardpine/") { 

    $.post(session_url, {user:"check_session"}).done(function (session_data) {

      if (session_data != 'false') 
      {
        
        $.post(wishlist_url, {action:'getAll',user_email:session_data},function (data) {

          var id;
          for(var i=0;i<data.length;i++)
          {
            id = data[i].card_id;

            $('.wishlist_btn').each(function(){

              var span =$(this).children();
              if ($(this).attr('data') == id)
              {
                span.removeClass('fa-heart-o');
                span.addClass('fa-heart');
              }

            });
          }

        },'json');
        
      }
    });

    $.post(session_url, {user:"check_session"}).done(function (session_data) {

      if (session_data != 'false') 
      {
        
        $.post(cart_url, {action:'getAll',user_email:session_data},function (data) {

          var id;
          for(var i=0;i<data.length;i++)
          {
            id = data[i].card_id;

            $('.aa-add-card-btn').each(function(){

              if ($(this).attr('id') == id)
              {
                $(this).text('Remove From Cart');
              }

            });
          }
        },'json');
        
      }
    });

    

  }

  if (loc.includes('cart')) 
  {
    $('#card_box').hide();
  }


  var auth2;

  gapi.load('auth2', function(){
    // Retrieve the singleton for the GoogleAuth library and set up the client.
    auth2 = gapi.auth2.init({
      client_id: '889653158766-6fhhgojvl9o9ccp21jj5pssgkugskvg8.apps.googleusercontent.com',
      cookiepolicy: 'single_host_origin',
    });
    attachSignin(document.getElementById('gmail_btn'));
  });


  function attachSignin(element) {

    auth2.attachClickHandler(element, {},
        function(googleUser) {

          var profile = googleUser.getBasicProfile();
          var user_name = profile.getName();
          var user_email = profile.getEmail();
          

          $.post(url, {from:"gmail",fullname:user_name,email:user_email}).done(function (data) {

            

              if (data == 'success') 
              {
                $.post(session_url, {user:"gmail",email:user_email}).done(function (session_data) {

                  if (session_data == 'success') 
                  {
                    window.location.reload(true);
                  }
                  else
                  {
                    alert(session_data);
                  }
                });       
              }
              else
              {
               $("#error_message_login").text(data); 
               $("#error_message_login").slideDown();
              }

            });
          
        }, function(error) {
          alert(JSON.stringify(error, undefined, 2));
        });
  }
});


function checkLoginState() {
  FB.getLoginStatus(function(response) {
    if (response.status === 'connected') {
      FB.api('/me?fields=id,name,email', function(response) {

        $.post(url, {from:"facebook",fullname:response.name,email:response.email}).done(function (data) {

            if (data == 'success') 
            {
              $.post(session_url, {user:"facebook",email:response.email}).done(function (session_data) {

                if (session_data == 'success') 
                {
                  window.location.reload(true);
                }
                else
                {
                  alert(session_data);
                }
              }); 
            }
            else
            {
             $("#error_message_login").text(data); 
             $("#error_message_login").slideDown();
            }

          });
      });

    }
  });
}

$('#switchToRegister').click(function(){
  $('#login_div').hide();
  $('#register_div').show();
  $('#reset_div').hide();
});


$('#switchToLogin').click(function(){
  $('#login_div').show();
  $('#register_div').hide();
  $('#reset_div').hide();
});

$('#switchToReset').click(function(){

  $('#reset_div').show();
  $('#login_div').hide();
  $('#register_div').hide();
});

$('#close_login_dialog').click(function(){

  $('#login_div').show();
  $('#register_div').hide();
  $('#reset_div').hide();
});    

$('#submit_login').click(function(){

  if ($('#login_form').parsley().validate())
  {

    $("#error_message_login").hide();

    var formData = $("#login_form").serializeArray();
    $.post(url, formData).done(function (data) {

      if (data == 'success') 
      {
        $.post(session_url, {user:"main",email:formData[1].value}).done(function (session_data) {

          if (session_data == 'success') 
          {
            window.location.reload(true);
          }
          else
          {
            alert(session_data);
          }
        }); 
      }
      else
      {
       $("#error_message_login").text(data); 
       $("#error_message_login").slideDown();
      }

    });
  }
});


$('#submit_register').click(function(){

  if ($('#register_form').parsley().validate())
  {

    $("#error_message_register").hide();

    var formData = $("#register_form").serializeArray();
    $.post(url, formData).done(function (data) {

      if (data == 'success') 
      {
        $.post(session_url, {user:"main",email:formData[1].value}).done(function (session_data) {

          if (session_data == 'success') 
          {
            window.location.reload(true);
          }
          else
          {
            alert(session_data);
          }
        });
      }
      else
      {
        $("#error_message_register").text(data); 
       $("#error_message_register").slideDown();
      }

    });
  }
});

$('#submit_reset').click(function(){

  if ($('#reset_form').parsley().validate())
  {

    $("#error_message_reset").hide();

    var formData = $("#reset_form").serializeArray();
    $.post(url, formData).done(function (data) {

      if (data == 'success') 
      {
        $.post(session_url, {user:"main",email:formData[1].value}).done(function (session_data) {

          if (session_data == 'success') 
          {
            window.location.reload(true);
          }
          else
          {
            alert(session_data);
          }
        });
      }
      else
      {
        $("#error_message_reset").text(data); 
        $("#error_message_reset").slideDown();
      }

    });
  }
});

$('#generateCode').click(function(){


  if ($('#reset_email').parsley().validate() == true)
  {

    $("#error_message_reset").hide();
    $('#code_sent_message').hide();

    var email = document.getElementById('reset_email').value;
    email = $.trim(email);

    if (email == "") 
    {
      $("#error_message_reset").text('please enter email first'); 
      $("#error_message_reset").slideDown();
    }
    else
    {
      $.post(url, {from:'generateCode',user_email:email}).done(function (data) {

        if (data == 'success') 
        {
          $("#code_sent_message").text('Code has been sent to '+email);
          $('#code_sent_message').slideDown();
          $('#submit_reset').prop('disabled', false);
          $('#generateCode').text('RESEND!');
        }
        else
        {
          $("#error_message_reset").text(data); 
          $("#error_message_reset").slideDown();
        }

      });
    }
  }
});


$('.quick_view').click(function(){

 var id = $(this).attr('id');

 $.post('php/get_cards_details.php', {from:'quick_view',card_id:id},function (data) {

  $('#dialog_card_name').text(data[0].card_name);
  $('#dialog_card_description').text(data[0].card_description);
  $('#dialog_card_price').text('Rs. '+data[0].card_price);
  $('#dialog_card_category').text(data[0].card_category);
  $('#add_toCart').attr('data',id);
  $('#dialog_display_image').attr('src','./allow_me/images/cards/tiles/'+data[0].card_image);
  $('#dialog_zoom_image').attr('data-lens-image','./allow_me/images/cards/main/'+data[0].card_image);
  $('#card_link').attr('href','product_detail.php?cid='+id);

 },'json');
});

$('.rate_star').click(function(){

  $('.rate_star').removeClass('fa-star');
  $('.rate_star').removeClass('fa-star-o');


  var star = $(this).attr('id');

  if (star == 'one_star') 
  {
    $('#one_star').addClass('fa-star');
    $('#two_star').addClass('fa-star-o');
    $('#three_star').addClass('fa-star-o');
    $('#four_star').addClass('fa-star-o');
    $('#five_star').addClass('fa-star-o');
    $('#rating').val('1');
  }
  else if(star == 'two_star')
  {
    $('#one_star').addClass('fa-star');
    $('#two_star').addClass('fa-star');
    $('#three_star').addClass('fa-star-o');
    $('#four_star').addClass('fa-star-o');
    $('#five_star').addClass('fa-star-o');
    $('#rating').val('2');
  }
  else if(star == 'three_star')
  {
    $('#one_star').addClass('fa-star');
    $('#two_star').addClass('fa-star');
    $('#three_star').addClass('fa-star');
    $('#four_star').addClass('fa-star-o');
    $('#five_star').addClass('fa-star-o');
    $('#rating').val('3');
  }
  else if(star == 'four_star')
  {
    $('#one_star').addClass('fa-star');
    $('#two_star').addClass('fa-star');
    $('#three_star').addClass('fa-star');
    $('#four_star').addClass('fa-star');
    $('#five_star').addClass('fa-star-o');
    $('#rating').val('4');
  }
  else if(star == 'five_star')
  {
    $('#one_star').addClass('fa-star');
    $('#two_star').addClass('fa-star');
    $('#three_star').addClass('fa-star');
    $('#four_star').addClass('fa-star');
    $('#five_star').addClass('fa-star');
    $('#rating').val('5');
  }
});

$('#logoff_btn').click(function(){

  $.post(session_url, {user:"logout"}).done(function (session_data) {

    if (session_data == 'success') 
    {
      window.location.reload(true);
    }
    else
    {
      alert(session_data);
    }
  }); 
});


$('.wishlist_btn').click(function(){

  var id = $(this).attr('data');

  var span = $(this).children();


  $.post(session_url, {user:"check_session"}).done(function (session_data) {

    if (session_data != 'false') 
    {
      if (span.hasClass('fa-heart-o')) 
      {
        $.post(wishlist_url, {action:'add',card_id:id,user_email:session_data}).done(function (data) {

          if (data == 'success') 
          {
            span.removeClass('fa-heart-o');
            span.addClass('fa-heart');
          }
          else
          {
            alert(data);
          }

        });
      }
      else if (span.hasClass('fa-heart'))
      {
        $.post(wishlist_url, {action:'remove',card_id:id,user_email:session_data}).done(function (data) {

          if (data == 'success') 
          {
            span.removeClass('fa-heart');
            span.addClass('fa-heart-o');
          }
          else
          {
            alert(data);
          }

        });
      }
    }
    else
    {
      $('#login-modal').modal('show');
    }
  });
});

$('.aa-add-card-btn').click(function(){

  var id = $(this).attr('id');
  var button = $(this);

  $.post(session_url, {user:"check_session"}).done(function (session_data) {

    if (session_data != 'false') 
    {

      if (button.text() == "Add To Cart") 
      {
        $.post(cart_url, {action:'add',card_id:id,user_email:session_data}).done(function (data) {

          if (data == 'success') 
          {
            $('#card_box').load('./php/show_cart.php');
            button.text('Remove From Cart');
          }
          else
          {
            alert(data);
          }

        });
      }
      else if (button.text() == "Remove From Cart")
      {
          $.post(cart_url, {action:'remove',card_id:id,user_email:session_data}).done(function (data) {

            if (data == 'success') 
            {
              $('#card_box').load('./php/show_cart.php'); 
              button.text('Add To Cart');  
            }
            else
            {
              alert(data);
            }

          }); 
      }

      
    }
    else
    {
      $('#login-modal').modal('show');
    }
  });
});

$('.remove_wishlist').click(function(){

  var data = $(this).attr('data');
  var array = data.split(',')
  var card_id = array[1];
  var email = array[0];

  $.post(wishlist_url, {action:'remove',card_id:card_id,user_email:email}).done(function (data) {

    if (data == 'success') 
    {
      $('#'+card_id+'_tr').remove();
    }
    else
    {
      alert(data);
    }

  });  
});

$('#main_page_content').on('click','.remove_cart',function(){

  var data = $(this).attr('data');
  var array = data.split(',')
  var card_id = array[1];
  var email = array[0];

  $.post(cart_url, {action:'remove',card_id:card_id,user_email:email}).done(function (data) {

    if (data == 'success') 
    {
      $('#main_page_content').load('./php/main_cart.php');
    }
    else
    {
      alert(data);
    }

  });  
});

$('#card_box').on('click','.remove_cart_dialog',function(){

  var data = $(this).attr('data');
  var array = data.split(',')
  var card_id = array[1];
  var email = array[0];

  $.post(cart_url, {action:'remove',card_id:card_id,user_email:email}).done(function (data) {

    if (data == 'success') 
    {
      $('#card_box').load('./php/show_cart.php');   
    }
    else
    {
      alert(data);
    }

  });  
});

var card_quantity = 0;

$('.card_quantity').focusin(function(){

  card_quantity = $(this).val();
});


$('.card_quantity').on('blur',function(){
  if ($(this).val() != card_quantity) 
  {
    card_quantity = $(this).val();
    var data = $(this).attr('data');
    var array = data.split(',')
    var card_id = array[1];
    var email = array[0];

    $.post(cart_url, {action:'update',card_id:card_id,user_email:email,total_quantity:card_quantity}).done(function (data) {

      if (data != 'success') 
      {
        alert(data);
      }

    });
  }
});

function validateForm(form) {

  var first_name = $('#'+form+'first_name');
  var last_name = $('#'+form+'last_name');
  var company_name = $('#'+form+'company_name');
  var email = $('#'+form+'email');
  var tel = $('#'+form+'tel');
  var address = $('#'+form+'address');
  var city = $('#'+form+'city');
  var appartment = $('#'+form+'appartment');
  var district = $('#'+form+'district');
  var pincode = $('#'+form+'pincode');



  var check_first_name = first_name.parsley().validate() == true;
  var check_last_name = last_name.parsley().validate() == true;
  var check_email = email.parsley().validate() == true;
  var check_tel = tel.parsley().validate() == true;
  var check_address = address.parsley().validate() == true;
  var check_city = city.parsley().validate() == true;
  var check_district = district.parsley().validate() == true;
  var check_pincode = pincode.parsley().validate() == true;


  if (check_first_name && check_last_name && check_email && check_tel && check_address && check_city && check_district && check_pincode) 
  {
    $('#full_'+form+'address').val(first_name.val()+' '+last_name.val()+','+company_name.val()+','+email.val()+','+tel.val()+','+address.val()+','+appartment.val()+','+city.val()+','+district.val()+','+pincode.val());
    return true;
  }
  else
  {
    return false;
  }
}


function populateShippingForm() {

  $('#shipping_first_name').val($('#billing_first_name').val());
  $('#shipping_last_name').val($('#billing_last_name').val());
  $('#shipping_company_name').val($('#billing_company_name').val());
  $('#shipping_email').val($('#billing_email').val());
  $('#shipping_tel').val($('#billing_tel').val());
  $('#shipping_address').val($('#billing_address').val());
  $('#shipping_city').val($('#billing_city').val());
  $('#shipping_appartment').val($('#billing_appartment').val());
  $('#shipping_district').val($('#billing_district').val());
  $('#shipping_pincode').val($('#billing_pincode').val());
}


$('#billing_addresses').on('click','.set_address',function(){

  billing_address = $(this).children('.copy_billing_address').text().split(',');
  names = billing_address[0].split(" ");

  $('#billing_first_name').val(names[0]);
  $('#billing_last_name').val(names[1]);
  $('#billing_company_name').val(billing_address[1]);
  $('#billing_email').val(billing_address[2]);
  $('#billing_tel').val(billing_address[3]);
  $('#billing_address').val(billing_address[4]);
  $('#billing_appartment').val(billing_address[5]);
  $('#billing_city').val(billing_address[6]);
  $('#billing_district').val(billing_address[7]);
  $('#billing_pincode').val(billing_address[8]);
  $('#billing_addresses').hide();
  $('#billing_form').slideDown();
});

$('#billing_addresses').on('click','.add_address',function(){

  $('#billing_addresses').hide();
  $('#billing_form').slideDown();
});


$('#shipping_addresses').on('click','.set_address',function(){

  shipping_address = $(this).children('.copy_shipping_address').text().split(',');
  names = shipping_address[0].split(" ");

  $('#shipping_first_name').val(names[0]);
  $('#shipping_last_name').val(names[1]);
  $('#shipping_company_name').val(shipping_address[1]);
  $('#shipping_email').val(shipping_address[2]);
  $('#shipping_tel').val(shipping_address[3]);
  $('#shipping_address').val(shipping_address[4]);
  $('#shipping_appartment').val(shipping_address[5]);
  $('#shipping_city').val(shipping_address[6]);
  $('#shipping_district').val(shipping_address[7]);
  $('#shipping_pincode').val(shipping_address[8]);
  $('#shipping_addresses').hide();
  $('#shipping_form').slideDown();
});

$('#shipping_addresses').on('click','.add_address',function(){

  $('#shipping_addresses').hide();
  $('#shipping_form').slideDown();
});

$('#account_page').click(function() {

 $.post(session_url, {user:"check_session"}).done(function (session_data) {

  if (session_data != 'false') 
  {
    window.location.href = 'account.php';
  }
  else
  {
    $('#login-modal').modal('show');
  }

 });

});

$('#cart_page').click(function() {
 $.post(session_url, {user:"check_session"}).done(function (session_data) {

  if (session_data != 'false') 
  {
    if ($('.aa-cart-notify').text() > 0) 
    {
      window.location.href = 'cart.php';
    }
    else
    {
      alert('cart is empty.');
    }
  }
  else
  {
    $('#login-modal').modal('show');
  }

 });
});

$('#wishlist_page').click(function() {
 $.post(session_url, {user:"check_session"}).done(function (session_data) {

  if (session_data != 'false') 
  {
    window.location.href = 'wishlist.php';
  }
  else
  {
    $('#login-modal').modal('show');
  }

 });
});

$('#checkout_page').click(function() {
 $.post(session_url, {user:"check_session"}).done(function (session_data) {

  if (session_data != 'false') 
  {
    if ($('.aa-cart-notify').text() > 0) 
    {
      window.location.href = 'checkout.php';
    }
    else
    {
      alert('cart is empty.');
    }
  }
  else
  {
    $('#login-modal').modal('show');
  }

 });
});

$('#add_toCart').click(function() {

  var id = $(this).attr('data');
  var quan = $('#choose_quantity').val();

  $.post(session_url, {user:"check_session"}).done(function (session_data) {

    if (session_data != 'false') 
    {

        $.post(cart_url, {action:'add_bulk',card_id:id,quantity:quan,user_email:session_data}).done(function (data) {

          if (data == 'success') 
          {
            $('#card_box').load('./php/show_cart.php');
          }
          else
          {
            alert(data);
          }

        });      
    }
    else
    {
      $('#login-modal').modal('show');
    }
  });
  
});


$('#add_toWishlist').click(function() {



  var id = $(this).attr('data');
  button = $(this);

  $.post(session_url, {user:"check_session"}).done(function (session_data) {

    if (session_data != 'false') 
    {
      if ($.trim(button.text()) == 'Wishlist') 
      {
        $.post(wishlist_url, {action:'add',card_id:id,user_email:session_data}).done(function (data) {

          if (data == 'success') 
          {
            button.text('Remove From Wishlist');
          }
          else
          {
            alert(data);
          }

        });
      }
      else if ($.trim(button.text()) == 'Remove From Wishlist')
      {
        $.post(wishlist_url, {action:'remove',card_id:id,user_email:session_data}).done(function (data) {

          if (data == 'success') 
          {
            button.text('Wishlist');
          }
          else
          {
            alert(data);
          }

        });
      }
    }
    else
    {
      $('#login-modal').modal('show');
    }
  });
  
});



