<!doctype html>
<html lang="en">

<head>
    <!-- config -->
    <?php include 'component/config.php' ?>
    <link rel="stylesheet" href="./js/jquery.Thailand.js/dist/jquery.Thailand.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h4>สร้างบัญชีผู้ใช้</h4>
            </div>
        </div>
        <hr>
        <div class="custom-control custom-radio custom-control-inline col-sm">
            <input type="radio" id="type-person" name="radio-check-register" class="custom-control-input" checked>
            <label class="custom-control-label" for="customRadioInline1">
                <h5>สร้างบัญชีผู้ใช้สำหรับบุคคลธรรมดา</h5>
            </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline col-sm mb-3">
            <input type="radio" id="type-company" name="radio-check-register" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline2">
                <h5>สร้างบัญชีผู้ใช้สำหรับนิติบุคคล</h5>
            </label>
        </div>

        <div class="container">
            <div id='main_register_person'>
                <?php include 'component/main_register_person.php' ?>
            </div>
            <div id='main_register_company' style="display: none;">
                <?php include 'component/main_register_company.php' ?>
            </div>
        </div>
    </div>

    <!-- footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>
    


    <script type="text/javascript" src="./js/jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="./js/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
    <script type="text/javascript" src="./js/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>
    <script type="text/javascript" src="./js/js_register.js"></script>
</body>

</html>