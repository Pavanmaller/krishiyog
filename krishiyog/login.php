<?php
   include 'db_connect.php';
   function Validate($data){
     $data= trim($data);
     $data = stripslashes($data);
     $data=htmlspecialchars($data);
     return $data;
   }
   session_start();
   $error='';
   $count=0;
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // username and password sent from form
      $number = Validate($_POST['number']);
      $password = md5($_POST['password']);
      if(isset($_POST['category']))
      {
        $category=$_POST['category'];
      }
      if($category == 'buyerdb')
      {
        $sql = "SELECT *
        FROM buyerdb
        WHERE buyerdb.bMobNo='$number' AND buyerdb.password='$password'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['id'];
        $count = mysqli_num_rows($result);
        $_SESSION['category']=$category;
        if($count <= 1)
        {
           $_SESSION['login_user'] = $number;
           header("Location: index.php");
        }
      }
      if($category == 'communorg')
      {
        $sql = "SELECT *
        FROM communorg
        WHERE communorg.mbNo='$number' AND communorg.password='$password'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['id'];
        $count = mysqli_num_rows($result);
        $_SESSION['category']=$category;
        if($count == 1)
        {

           $_SESSION['login_user'] = $number;
           header("Location: index.php");
        }
      }
      if($category == 'aggregator')
      {
        $sql = "SELECT *
        FROM aggregator
        WHERE aggregator.bMobNo='$number' AND aggregator.password='$password'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['id'];
        $count = mysqli_num_rows($result);
        $_SESSION['category']=$category;
        if($count == 1)
        {

           $_SESSION['login_user'] = $number;
           header("Location: index.html");
        }
      }
      if($category == 'medexpertdb')
      {
        $sql = "SELECT *
        FROM medexpertdb
        WHERE medexpertdb.mbNo='$number' AND medexpertdb.password='$password'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['id'];
        $count = mysqli_num_rows($result);
        $_SESSION['category']=$category;
        if($count == 1)
        {

           $_SESSION['login_user'] = $number;
           header("Location: index.php");
        }
      }
      if($category == 'sellerdb')
      {
        $sql = "SELECT *
        FROM sellerdb
        WHERE sellerdb.sMobNo='$number' AND sellerdb.password='$password'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['id'];
        $count = mysqli_num_rows($result);
        $_SESSION['category']=$category;
        if($count == 1)
        {

           $_SESSION['login_user'] = $number;
           header("Location: index.html");
        }
      }
      /*$result = mysqli_query($connection,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['id'];
      $count = mysqli_num_rows($result);
      $_SESSION['category']=$category;*/
      // If result matched $number and $mypassword, table row must be 1 row

      /*if($count == 1)
      {

         $_SESSION['login_user'] = $number;
         header("Location: index.html");
      }*/
      if($count<=0)
      {
         $error = "Your Login Name or Password is invalid";
      }
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
    <div class="card shadow container" style="width:32%;margin-top:50px;">
      <div class="card-body">
        <div class="card-title">
        <h3>Login</h3>
        </div>
        <form  method="post" action="">
          <div class="form-group">
            <label for="exampleInputEmail1">Contact Number</label>
            <input type="number" name="number" class="form-control form-control-sm" id="number" aria-describedby="number" placeholder="Contact Number">
            <!-- <small id="number" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control form-control-sm" id="password" placeholder="Password">
          </div>
          <div class="form-group">
            <b>Farmer/Producer/Processor</b>
            <input type="radio" class="form-control form-control-sm"name="category" value="sellerdb" required>
            <b>Buyer/Consumer</b>
            <input type="radio" class="form-control form-control-sm" name="category" value="buyerdb" required>
            <b>Aggregator</b>
            <input type="radio" class="form-control form-control-sm" name="category" value="aggregator"required >
            <b>Community</b>
            <input type="radio" class="form-control form-control-sm"name="category" value="communorg"required>
            <b>Wellness Advisor</b>
            <input type="radio" class="form-control form-control-sm" name="category" value="medexpertdb"required>
            <!-- <small id="number" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <span><?php echo $error; ?></span>
          <button type="submit" name="login" class="btn btn-success">Get-in</button>
          <a href="signup2.php">Register</a>
        </form>
      </div>
    </div>

  </body>
</html>
