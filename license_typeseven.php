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

            $safe_name = explode(" ",$arrayData['safe_name'])[0];
            $safe_lname = explode(" ",$arrayData['safe_name'])[1];

            $safe_address_house = explode(",",$arrayData['safe_address'])[0];
            $safe_address_house1 = explode(",",$arrayData['safe_address'])[1];
            $safe_address_house2 = explode(",",$arrayData['safe_address'])[2];
            $safe_address_house3 = explode(",",$arrayData['safe_address'])[3];
            $safe_address_district = explode(",",$arrayData['safe_address'])[4];
            $safe_address_amphoe = explode(",",$arrayData['safe_address'])[5];
            $safe_address_province = explode(",",$arrayData['safe_address'])[6];
            $safe_address_zipcode = explode(",",$arrayData['safe_address'])[7];

            $make_name = explode(" ",$arrayData['make_name'])[0];
            $make_lname = explode(" ",$arrayData['make_name'])[1];

            $make_address_house = explode(",",$arrayData['make_address'])[0];
            $make_address_house1 = explode(",",$arrayData['make_address'])[1];
            $make_address_house2 = explode(",",$arrayData['make_address'])[2];
            $make_address_house3 = explode(",",$arrayData['make_address'])[3];
            $make_address_district = explode(",",$arrayData['make_address'])[4];
            $make_address_amphoe = explode(",",$arrayData['make_address'])[5];
            $make_address_province = explode(",",$arrayData['make_address'])[6];
            $make_address_zipcode = explode(",",$arrayData['make_address'])[7];

            $doctor_name = explode(" ",$arrayData['doctor_name'])[0];
            $doctor_lname = explode(" ",$arrayData['doctor_name'])[1];

            $doctor_address_house = explode(",",$arrayData['doctor_address'])[0];
            $doctor_address_house1 = explode(",",$arrayData['doctor_address'])[1];
            $doctor_address_house2 = explode(",",$arrayData['doctor_address'])[2];
            $doctor_address_house3 = explode(",",$arrayData['doctor_address'])[3];
            $doctor_address_district = explode(",",$arrayData['doctor_address'])[4];
            $doctor_address_amphoe = explode(",",$arrayData['doctor_address'])[5];
            $doctor_address_province = explode(",",$arrayData['doctor_address'])[6];
            $doctor_address_zipcode = explode(",",$arrayData['doctor_address'])[7];
        }
    ?>
    <form id="request" action="./php/php_license_typeseven.php" method="post">
        <?php include 'component/main_request_typeseven.php' ?>
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

    <script src="js/js_license_typeseven.js" crossorigin="anonymous"></script>
    <script src="js/js_renew.js" crossorigin="anonymous"></script>
</body>

</html>