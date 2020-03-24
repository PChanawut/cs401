<!doctype html>
<html lang="en">

<head>
    <!-- config -->
    <?php include 'component/config.php' ?>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h4>สร้างบัญชีผู้ใช้</h4>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="custom-control custom-radio custom-control-inline col-sm">
                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">
                        <h5>สร้างบัญชีผู้ใช้สำหรับบุคคลธรรมดา</h5>
                    </label>
                </div>
                <div class="custom-control custom-radio custom-control-inline col-sm">
                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">
                        <h5>สร้างบัญชีผู้ใช้สำหรับนิติบุคคล</h5>
                    </label>
                </div>
            </div>
        </div>
        <br>
        <!-- <nav aria-label="breadcrumb" align="center">
            <ol class="breadcrumb bg-light">
                <div class="col-sm">
                    <li class="breadcrumb-item"><a href="#">ข้อมูลส่วนตัว</a></li>
                </div>
                <div class="col-sm">
                    <li class="breadcrumb-item"><a href="#">สร้างบัญชีผู้ใช้</a></li>
                </div>
                <div class="col-sm">
                    <li class="breadcrumb-item active" aria-current="page">เสร็จสิ้น</li>
                </div>
            </ol>
        </nav> -->
    </div>
    <div class="container">
        <div id='headerStep' style='display:none;'>
            <nav aria-label="breadcrumb" align="center">
                <ol class="breadcrumb bg-light">
                    <div class="col-sm">
                        <li class="breadcrumb-item"><a href="#">ข้อมูลส่วนตัว</a></li>
                    </div>
                    <div class="col-sm">
                        <li class="breadcrumb-item"><a href="#">สร้างบัญชีผู้ใช้</a></li>
                    </div>
                    <div class="col-sm">
                        <li class="breadcrumb-item active" aria-current="page">เสร็จสิ้น</li>
                    </div>
                </ol>
            </nav>
        </div>
    </div>
    <div id='displayperson' class="col-sm" style="display: none;">
        <?php include 'component/main_register_person.php' ?>
    </div>
    <div id='displaycompany' class="col-sm" style="display: none;">
        <?php include 'component/main_register_company.php' ?>
    </div>

    <!-- footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
    $(document).ready(function() {
        $("#customRadioInline1").click(function() {
            // $("#displaycompany").hide();
            $("#displaycompany").hide();
            $("#headerStep").show();
            $("#displayperson").show();
        });
        $("#customRadioInline2").click(function() {
            // $("#displayperson").hide();
            $("#displayperson").hide();
            $("#headerStep").show();
            $("#displaycompany").show();
        });
    });
    </script>
</body>

</html>