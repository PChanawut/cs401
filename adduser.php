<!doctype html>
<html lang="en">

<head>
    <!-- config -->
    <?php include 'component/config.php' ?>
    <?php
        if ($_SESSION["permission"][4] != 1 && ($_SESSION["type"] == "company" || $_SESSION["type"] == "usercompany")) {
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
    <?php include 'component/main_adduser.php' ?>
    <!-- footer -->

    <!-- model adduser-->
    <div class="modal fade model-adduser" id="model-adduser" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header alert alert-primary">
                    <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มสมาชิก</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="adduser_form" method="post" autocomplete="off">
                    <!-- body -->
                    <div class="modal-body" style="margin-top : -25px;">
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-adduser-username" class="col-form-label">ชื่อบัญชีผู้ใช้ :</label>
                            <input type="text" class="form-control input-sm" id="model-adduser-username" required>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-adduser-password" class="col-form-label">รหัสผ่าน :</label>
                            <input type="password" class="form-control input-sm" id="model-adduser-password" required
                                autocomplete>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-adduser-repassword" class="col-form-label">ยืนยันรหัสผ่าน :</label>
                            <input type="password" class="form-control input-sm" id="model-adduser-repassword" required
                                autocomplete>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-adduser-firstname" class="col-form-label">ชื่อ :</label>
                            <input type="text" class="form-control input-sm" id="model-adduser-firstname" required>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-adduser-lastname" class="col-form-label">นามสกุล :</label>
                            <input type="text" class="form-control input-sm" id="model-adduser-lastname" required>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-adduser-status" class="col-form-label">ตำแหน่ง :</label>
                            <input type="text" class="form-control input-sm" id="model-adduser-status" required>
                        </div>
                        <!-- checkbox -->
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-adduser-username" class="col-form-label">กำหนดสิทธิ์ :</label>
                            <div class="contrainer ml-3">
                                <div class="row">
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input"
                                            id="checkPermission-request">
                                        <label class="custom-control-label" for="checkPermission-request"
                                            checked>ขอใบอนุญาต</label>
                                    </div>
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="checkPermission-renew">
                                        <label class="custom-control-label"
                                            for="checkPermission-renew">ต่อใบอนุญาต</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input"
                                            id="checkPermission-dismiss">
                                        <label class="custom-control-label"
                                            for="checkPermission-dismiss">ยกเลิกใบอนุญาต</label>
                                    </div>
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="checkPermission-all">
                                        <label class="custom-control-label" for="checkPermission-all">ดูใบอนุญาต</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">เพิ่มสมาชิก</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- model edit-->
    <div class="modal fade model-edituser" id="model-edituser" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header alert alert-primary">
                    <h5 class="modal-title" id="exampleModalLongTitle">แก้ไขสมาชิก</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="edituser" method="post" autocomplete="off">
                    <!-- body -->
                    <div class="modal-body" style="margin-top : -25px;">
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-edituser-username" class="col-form-label">ชื่อบัญชีผู้ใช้ :</label>
                            <input type="text" class="form-control input-sm" id="model-edituser-username" required>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-edituser-password" class="col-form-label">รหัสผ่าน :</label>
                            <input type="password" class="form-control input-sm" id="model-edituser-password">
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-edituser-repassword" class="col-form-label">ยืนยันรหัสผ่าน :</label>
                            <input type="password" class="form-control input-sm" id="model-edituser-repassword">
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-edituser-firstname" class="col-form-label">ชื่อ :</label>
                            <input type="text" class="form-control input-sm" id="model-edituser-firstname" required>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-edituser-lastname" class="col-form-label">นามสกุล :</label>
                            <input type="text" class="form-control input-sm" id="model-edituser-lastname" required>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-edituser-status" class="col-form-label">ตำแหน่ง :</label>
                            <input type="text" class="form-control input-sm" id="model-edituser-status" required>
                        </div>
                        <!-- checkbox -->
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-edituser-username" class="col-form-label">กำหนดสิทธิ์ :</label>
                            <div class="contrainer ml-3">
                                <div class="row">
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input"
                                            id="checkPermission-editrequest">
                                        <label class="custom-control-label" for="checkPermission-editrequest"
                                            checked>ขอใบอนุญาต</label>
                                    </div>
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="checkPermission-editrenew">
                                        <label class="custom-control-label"
                                            for="checkPermission-editrenew">ต่อใบอนุญาต</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input"
                                            id="checkPermission-editdismiss">
                                        <label class="custom-control-label"
                                            for="checkPermission-editdismiss">ยกเลิกใบอนุญาต</label>
                                    </div>
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="checkPermission-editall">
                                        <label class="custom-control-label" for="checkPermission-editall">ดูใบอนุญาต</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="model-edituser-id" value="">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">แก้ไขสมาชิก</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>

    <!-- validated -->
    <script src="js/js_adduser.js" crossorigin="anonymous"></script>
</body>

</html>