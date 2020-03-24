<!doctype html>
<html lang="en">
    <head>
        <!-- config -->
        <?php include 'component/config.php' ?>
        <?php
            if (isset($_SESSION["company_id"])) {
              Header("Location: home");
            }
            ?>
        <!-- Custom styles for this template -->
        <link href="css/login.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <form class="form-signin" id="login_form" method="post">
            <!-- <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
            <img class="mb-3" src="asset/config/logo.png" alt="" width="150" height="150">
            <div><h1 class="h4 mb-4 font-weight-normal">สํานักงานปรมาณูเพื่อสันติ</h1></div>  
            <div id='invalid' style="display:none">
                <h6 style="color:red;">*username หรือ password ไม่ถูกต้อง</h6>
            </div>
            <div>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="text" id='username' class="form-control mb-2" placeholder="ชื่อบัญชีผู้ใช้" required>
                <label for="inputPassword" class="sr-only">Password</label>
            </div>
            <div>
                <input type="password" id='password' class="form-control" placeholder="รหัสผ่าน" autocomplete="on" required>    
                <button class="btn btn-lg btn-primary btn-block mt-2" type="submit">เข้าสู่ระบบ</button>
            </div>
        </form>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
        <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
        <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>
        <!-- ajax -->
        <script src="js/index/js_index.js" crossorigin="anonymous"></script>
    </body>
</html>