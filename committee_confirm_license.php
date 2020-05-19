<!doctype html>
<html lang="en">

<head>
    <!-- config -->
    <?php include 'component/config.php' ?>
    <?php
        if ($_SESSION["type"] != "subcommittee") {
            Header("Location: home");
        }
            ?>
</head>

<body>
    <!-- header -->
    <?php include 'component/header.php' ?>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- main -->
    <?php include 'component/main_committee_confirm_license.php' ?>

    <!-- footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-- <script src="js/js_officer_confirm_register.js" crossorigin="anonymous"></script> -->
</body>

</html>