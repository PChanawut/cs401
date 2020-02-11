<!doctype html>
<html lang="en">
  <head>
    <!-- config -->
    <?php include 'component/config.php' ?>

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
  </head>
    <body class="text-center">
        <form class="form-signin">
          <!-- <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
          <img class="mb-3" src="asset/config/logo.png" alt="" width="150" height="150">
          <h1 class="h4 mb-4 font-weight-normal">Office of Atoms for Peace</h1>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control mb-2" placeholder="Email address" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    
          <button class="btn btn-lg btn-primary btn-block mt-2" type="submit">Sign in</button>
        </form>
    </body>

    <!-- script Block -->
    <script src="js/config.js"></script>
</html>
