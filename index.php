<?php
  session_start();
  if(isset($_SESSION["u_id"])){  
    Header("Location: license_all");
  }
?>
<!doctype html>
<html lang="en">
  <head>
     <!-- config -->
    <?php include 'component/config.php' ?>

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
  </head>
    <body class="text-center">
        <form class="form-signin" id="login_form" method="post">
          <!-- <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
          <img class="mb-3" src="asset/config/logo.png" alt="" width="150" height="150">
          <h1 class="h4 mb-4 font-weight-normal">Office of Atoms for Peace</h1>
          <div id='invalid' style="display:none"><h6 style="color:red;">*username หรือ password ไม่ถูกต้อง</h6></div>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="text" id='username' class="form-control mb-2" placeholder="username" required autofocus>
          
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id='password' class="form-control" placeholder="password" autocomplete="on" required>
    
          <button class="btn btn-lg btn-primary btn-block mt-2" type="submit">Sign in</button>
        </form>
    </body>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>
    
    <!-- ajax --> 
    <script type="text/javascript">
      $(document).ready(function() {
        $('#login_form').submit(function(e) {
          var username = $("#username").val();
          var password = $("#password").val();
          e.preventDefault();
          $.ajax({
            type: 'POST',
            url: 'php/login.php',
            data: {
              username:username,
              password:password
            },
            success: function(response){
              if (response == 'success') {
                $(document).ajaxStop(function(){
                    // window.location.reload();
                    location.replace("license_all");
                });  
              }
              else {
                $("#invalid").css("display", "block");
                $("#username").val("");
                $("#password").val("");
              }
            }
        });
      });
      });
    </script>
</html>
