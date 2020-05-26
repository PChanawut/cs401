<!doctype html>
<html lang="en">

<head>
    <!-- config -->
    <?php include 'component/config.php' ?>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
        if ($_SESSION["type"] != "officer") {
            Header("Location: home");
        }
            ?>
</head>

<body>
    <!-- header -->
    <?php include 'component/header.php' ?>

    <!-- main -->
    <?php include 'component/main_officer_confirm_register.php' ?>

    <!-- model -->
    <div class="modal fade model-adduser" id="model-company-detail" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header alert-primary">
                    <h5 class="modal-title">ยืนยันการสมัครสมาชิก</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row-ml-3">
                        <h6>เลขที่ใบอนุญาต / เลขบัตรประชาชน:</h6>
                        <p id="show_enroll_date" style="color:Gray;"></p>
                        <p id="show_enroll_no" style="color:Gray;"></p>
                    </div>
                    <hr>
                    <div class="row-ml-3">
                        <h6>ชื่อบริษัท / ชื่อนิติบุคคล:</h6>
                        <p id="show_company_name" style="color:Gray;"></p>
                    </div>
                    <hr>
                    <div class="row-ml-3">
                        <h6>ข้อมูลที่อยู่:</h6>
                        <p id="show_company_address" style="color:Gray;"></p>
                    </div>
                    <hr>
                    <div class="row-ml-3">
                        <h6>อีเมล:</h6>
                        <p id="show_company_email" style="color:Gray;"></p>
                    </div>
                    <hr>
                    <div class="row-ml-3">
                        <h6>เบอร์โทรศัพท์ / แฟกซ์:</h6>
                        <p id="show_company_phone" style="color:Gray;"></p>
                        <p id="show_company_fax" style="color:Gray;"></p>
                    </div>
                    <hr>
                    <div class="row-ml-3">
                    <i class="fa fa-file-pdf-o" style="font-size:36px;color:#EB5D3E"></i>
                    <!-- https://www.thesitewizard.com/html-tutorial/open-links-in-new-window-or-tab.shtml -->
                    <a href="php/php_filedownload.php" style="color:Gray;" id="tag" target="_blank">ใบอนุญาต / บัตรประจำตัวประชาชน</a>
                    </div>
                    
                </div>
                <form id="form_company_id">
                    <input type="hidden" id="show_company_id">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        <button id="confirm4" type="submit" class="btn btn-primary">ยืนยันคำขอ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/js_officer_confirm_register.js" crossorigin="anonymous"></script>
</body>

</html>