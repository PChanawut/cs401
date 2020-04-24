<!doctype html>
<html lang="en">

<head>
    <!-- config -->
    <?php include 'component/config.php' ?>
    <?php
        if ($_SESSION["permission"][0] != 1 || ($_SESSION["type"] != "company" || $_SESSION["type"] != "usercompany")) {
            Header("Location: home");
        }
            ?>
</head>

<body>
    <!-- header -->
    <?php include 'component/header.php' ?>

    <!-- main -->
    <?php include 'component/main_request.php' ?>

    <!-- footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>