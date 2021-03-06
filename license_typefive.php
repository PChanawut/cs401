<!doctype html>
<html lang="en">

<head>
    <!-- config -->
    <?php include 'component/config.php' ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./js/jquery.Thailand.js/dist/jquery.Thailand.min.css">

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
    <!-- header -->
    <?php include 'component/header.php' ?>
    <!-- main -->
    <?php
        if(isset($_GET['data'])){
            $arrayData = json_decode($_GET['data'], true);
            // print_r($arrayData);

            $add_address = explode(",",$arrayData['material_address'])[0];
            $add_district = explode(",",$arrayData['material_address'])[1];
            $add_amphoe = explode(",",$arrayData['material_address'])[2];
            $add_province = explode(",",$arrayData['material_address'])[3];
            $add_zipcode = explode(",",$arrayData['material_address'])[4];
            // echo $add_address;
        }
    ?>
    <form id="request" action="./php/php_license_typeone.php" method="post">
        <?php include 'component/main_request_typefive.php' ?>
    </form>

    <!-- footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="./js/jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="./js/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
    <script type="text/javascript" src="./js/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>

    <script src="js/js_license_typefive.js" crossorigin="anonymous"></script>
    <script src="js/js_renew.js" crossorigin="anonymous"></script>
</body>

</html>