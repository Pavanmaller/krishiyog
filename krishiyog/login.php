<?php
include 'loginScript.php';
if (isset($_SESSION['login_user'])) {
  echo $_SESSION['login_user'];
}
 ?>
 <html lang="en">
   <head>
     <!-- <meta name="google-signin-scope" content="profile email">
     <meta name="google-signin-client_id" content="1047018957941-c99a4imf38mmr0cf6d6l3e53kojti2fs.apps.googleusercontent.com">
     <script src="https://apis.google.com/js/platform.js" async defer></script> -->

   <style media="screen">
   body {
     background: url(grass.JPG) no-repeat center center fixed;
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
     background-size: cover;
   }

   .form-control:focus {
     border-color: green;
     box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(36, 109, 6, 0.6);
   }
   .check
   {
       opacity:0.5;
   	color:#996;
   }
   </style>
   <!-- <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div> -->
   <!-- <script>
     function onSignIn(googleUser) {
       // Useful data for your client-side scripts:
       var profile = googleUser.getBasicProfile();
       console.log("ID: " + profile.getId()); // Don't send this directly to your server!
       console.log('Full Name: ' + profile.getName());
       console.log('Given Name: ' + profile.getGivenName());
       console.log('Family Name: ' + profile.getFamilyName());
       console.log("Image URL: " + profile.getImageUrl());
       console.log("Email: " + profile.getEmail());

       // The ID token you need to pass to your backend:
       var id_token = googleUser.getAuthResponse().id_token;
       console.log("ID Token: " + id_token);
     };
   </script> -->


    <meta charset="utf-8">
    <title>Krishiyog | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="card shadow container" style="width:30%;margin-top:100px;">
      <div class="card-body">
        <div class="card-title">
        <h3>Login</h3>
        </div>
        <form   method="post" action="">
          <div class="form-group">
            <label for="exampleInputEmail1">Contact Number</label>
            <input type="number" name="number" class="form-control form-control-sm" id="number" aria-describedby="number" placeholder="Contact Number">
            <!-- <small id="number" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Password">
          </div>
          <span><?php echo $error; ?></span>
          <button type="submit" name="login" class="btn btn-success">Get-in</button>
          <a href="signup2.php">Register</a>
        </form>
      </div>
    </div>

  </body>
</html>
