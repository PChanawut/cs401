<!doctype html>
<html lang="en">

<head>
    <!-- config -->
    <?php include 'component/config.php' ?>
</head>

<style>
p.choice {
    font-size: 24px;
    text-align: center;
    padding: 70px 0;
    word-spacing: 10px;
}
</style>

<body>
    <!-- header -->
    <?php include 'component/header_notRegister.php' ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h4>สร้างบัญชีผู้ใช้</h4>
            </div>
        </div>

        <hr>

        <p class="choice">
            <i style='font-size:30px' class='fas'>&#xf406;</i>
            <a href="default.asp" target="_blakn">ขอใบอนุญาตสำหรับบุคคลธรรมดา</a>
            <br><br>
            <i style='font-size:30px' class='fas'>&#xf1ad;</i>
            <a href="default.asp" target="_blakn">ขอใบอนุญาตสำหรับนิติบุคคล</a>
        </p>
    </div>


    <!-- footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>

</html>