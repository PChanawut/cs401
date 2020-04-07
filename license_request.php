<!doctype html>
<html lang="en">

<head>
    <!-- config -->
    <?php include 'component/config.php' ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <!-- header -->
    <?php include 'component/header.php' ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h4>ขอใบอนุญาตสำหรับบุคคลธรรมดา</h4>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="form-row">
                <h5>ขอรับใบอนุญาตประเภท: </h5>
            </div>
            <div class="form-row">
                <div class="col px-md-4">
                    <div class="row">
                        <div id="typeone" class="col px-md-5">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">สำหรับขออนุญาตฯ
                                    วัสดุพลอยได้
                                    (ปส
                                    1ก)</label>
                            </div>
                        </div>
                        <div id="typetwo" class="col px-md-5">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1"
                                    class="custom-control-input">
                                <label class="custom-control-label"
                                    for="customRadioInline2">สำหรับนำเข้า-ส่งออกวัสดุพลอยได้
                                    (ปส
                                    3ก)</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="three" class="col px-md-5">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline3" name="customRadioInline1"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline3">สำหรับขออนุญาตฯ
                                    วัสดุนิวเคลียร์พิเศษ (ปส
                                    1ข)</label>
                            </div>
                        </div>
                        <div id="typefour" class="col px-md-5">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline4" name="customRadioInline1"
                                    class="custom-control-input">
                                <label class="custom-control-label"
                                    for="customRadioInline4">สำหรับนำเข้า-ส่งออกวัสดุนิวเคลียร์-วัสดุต้นกำลัง (ปส
                                    3ข)</label>
                            </div>
                        </div>
                    </div>
                    <div id="typefive" class="row">
                        <div class="col px-md-5">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline5" name="customRadioInline1"
                                    class="custom-control-input">
                                <label class="custom-control-label"
                                    for="customRadioInline5">สำหรับขออนุญาตพลังงานปรมาณูจากเครื่องปฏิกรณ์ปรามาณู (ปส
                                    1ง)</label>
                            </div>
                        </div>
                        <div id="typesix" class="col px-md-5">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline6" name="customRadioInline1"
                                    class="custom-control-input">
                                <label class="custom-control-label"
                                    for="customRadioInline6">สำหรับทำให้วัสดุต้นกำลังพ้นสภาพฯ
                                    (ปส
                                    2)</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="typeseven" class="col px-md-5">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline7" name="customRadioInline1"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline7">สำหรับขออนุญาตฯ
                                    เครื่องกำเนิดรังสี (ปส
                                    1ค)</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main -->
    <?php include 'component/main_request_typeone.php' ?>

    <!-- footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>