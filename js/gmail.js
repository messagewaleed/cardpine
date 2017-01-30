
function onSignIn(googleUser) {
      var profile = googleUser.getBasicProfile();

      var user_name = profile.getName();
      var user_email = profile.getEmail();

      $.post(url, {from:"gmail",fullname:user_name,email:user_email}).done(function (data) {

          if (data == 'success') 
          {
            <?php $_SESSION['loggedin'] = "gmail_user"; ?>
            window.location.href = "index.php";
          }
          else
          {
           $("#error_message_login").text(data); 
           $("#error_message_login").slideDown();
          }

        });
    }