<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="889653158766-6fhhgojvl9o9ccp21jj5pssgkugskvg8.apps.googleusercontent.com">
	<script type="text/javascript">
		
		function onSignIn(googleUser) {
		  var profile = googleUser.getBasicProfile();
		  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
		  console.log('Name: ' + profile.getName());
		  console.log('Image URL: ' + profile.getImageUrl());
		  console.log('Email: ' + profile.getEmail());
		}

	</script>

</head>
<body>
<div class="g-signin2" data-onsuccess="onSignIn">sign in</div>
</body>
</html>