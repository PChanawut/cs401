<!doctype html>
<html lang="en">

<head>
    <!-- config -->
    <?php include 'component/config.php' ?>
    <?php
        if ($_SESSION["type"] != "officer") {
            Header("Location: home");
        }
            ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- header -->
    <?php include 'component/header.php' ?>

    <!-- main -->
    <?php include 'component/main_officer_confirm_license.php' ?>

    <!-- footer -->

    <div class="modal fade bd-example-modal-lg" id="detail_license" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header alert-primary">
                    <h5 class="modal-title" id="exampleModalLabel">รายละเอียดใบอนุญาต</h5>
                </div>
                <div class="modal-body">
                    <div class="row-ml-3">
                        <h6>ประเภทใบอนุญาต:</h6>
                        <p id="model_detail_license_licensetype" style="color:Gray;"></p>
                    </div>
                    <div class="row-ml-3">
                        <h6>ชื่อบริษัท / ชื่อ-นามสกุล:</h6>
                        <p id="model_detail_license_company1" style="color:Gray;"></p>
                        <p id="model_detail_license_company2" style="color:Gray;"></p>
                    </div>
                    <div class="row-ml-3" id="model_detail_license_stock">
                        <h6>สถานที่จัดเก็บ:</h6>
                        <div id="model_detail_license_location"></div>
                    </div>
                    <div class="row-ml-3">
                        <h6>รายละเอียดใบอนุญาต:</h6>
                        <div id="model_detail_license_detail"></div>
                    </div>
                    <div class="row-ml-3">
                        <h6>เจ้าหน้าที่:</h6>
                        <div id="model_detail_license_staff"></div>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button type="button" class="btn btn-primary">ยืนยันใบอนุญาต</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/js_officer_confirm_license.js" crossorigin="anonymous"></script>
</body>

</html>