
var url = "./php/user_login_register.php";
var session_url = "./php/sessions.php";
var wishlist_url = "./php/wishlist.php";
var cart_url = "./php/cart.php";
var googleUser = {};

$( document ).ready(function() {

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

          alert(user_email +"  "+user_name);

          

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
    alert('inside login');

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

    alert('inside register');

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
    alert('inside reset');

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
  $('#dialog_display_image').attr('src','./allow_me/images/cards/tiles/'+data[0].card_image);
  $('#dialog_zoom_image').attr('data-lens-image','./allow_me/images/cards/main/'+data[0].card_image);

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

  $.post(session_url, {user:"check_session"}).done(function (session_data) {

    if (session_data != 'false') 
    {
      $.post(cart_url, {action:'add',card_id:id,user_email:session_data}).done(function (data) {

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
      $('#card_box').load('./php/show_cart.php');
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

// $('.remove_cart_dialog').click(function(){
// });

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




