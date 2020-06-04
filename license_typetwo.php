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
            print_r($arrayData);

            $add_address = explode(",",$arrayData['material_address'])[0];
            $add_district = explode(",",$arrayData['material_address'])[1];
            $add_amphoe = explode(",",$arrayData['material_address'])[2];
            $add_province = explode(",",$arrayData['material_address'])[3];
            $add_zipcode = explode(",",$arrayData['material_address'])[4];
            // echo $add_address;
            
            $sale_name = explode(" ",$arrayData['sale_name'])[0];
            $sale_lname = explode(" ",$arrayData['sale_name'])[1];

            $sale_address_house = explode(",",$arrayData['sale_address'])[0];
            $sale_address_house1 = explode(",",$arrayData['sale_address'])[1];
            $sale_address_house2 = explode(",",$arrayData['sale_address'])[2];
            $sale_address_house3 = explode(",",$arrayData['sale_address'])[3];
            $sale_address_district = explode(",",$arrayData['sale_address'])[4];
            $sale_address_amphoe = explode(",",$arrayData['sale_address'])[5];
            $sale_address_province = explode(",",$arrayData['sale_address'])[6];
            $sale_address_zipcode = explode(",",$arrayData['sale_address'])[7];

            $handler_name = explode(" ",$arrayData['handler_name'])[0];
            $handler_lname = explode(" ",$arrayData['handler_name'])[1];

            $handler_address_house = explode(",",$arrayData['handler_address'])[0];
            $handler_address_house1 = explode(",",$arrayData['handler_address'])[1];
            $handler_address_house2 = explode(",",$arrayData['handler_address'])[2];
            $handler_address_house3 = explode(",",$arrayData['handler_address'])[3];
            $handler_address_district = explode(",",$arrayData['handler_address'])[4];
            $handler_address_amphoe = explode(",",$arrayData['handler_address'])[5];
            $handler_address_province = explode(",",$arrayData['handler_address'])[6];
            $handler_address_zipcode = explode(",",$arrayData['handler_address'])[7];

            $destination_house = explode(",",$arrayData['destination_address'])[0];
            $destination_road = explode(",",$arrayData['destination_address'])[1];
            $destination_city = explode(",",$arrayData['destination_address'])[2];
            $destination_country = explode(",",$arrayData['destination_address'])[3];

            $import_address_house = explode(",",$arrayData['import_material_address'])[0];
            $import_address_district = explode(",",$arrayData['import_material_address'])[1];
            $import_address_amphoe = explode(",",$arrayData['import_material_address'])[2];
            $import_address_province = explode(",",$arrayData['import_material_address'])[3];
            $import_address_zipcode = explode(",",$arrayData['import_material_address'])[4];

            $export_address_house = explode(",",$arrayData['material_address'])[0];
            $export_address_district = explode(",",$arrayData['material_address'])[1];
            $export_address_amphoe = explode(",",$arrayData['material_address'])[2];
            $export_address_province = explode(",",$arrayData['material_address'])[3];
            $export_address_zipcode = explode(",",$arrayData['material_address'])[4];
        }
    ?>
    <form id="request" action="./php/php_license_typetwo.php" method="post">
        <?php include 'component/main_request_typetwo.php' ?>
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

    <script src="js/js_license_typetwo.js" crossorigin="anonymous"></script>
    <script src="js/js_renew.js" crossorigin="anonymous"></script>
</body>

</html>