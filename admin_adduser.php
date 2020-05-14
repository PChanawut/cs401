<!doctype html>
<html lang="en">

<head>
    <!-- config -->
    <?php include 'component/config.php' ?>
    <?php
        if ($_SESSION["type"] != "admin") {
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
    <?php include 'component/main_admin_adduser.php' ?>
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
                        <select class="custom-select" id="model-admin-adduser-type">
                            <option value="officer" selected>เจ้าหน้าที่</option>
                            <option value="subcommittee">อนุกรรมการ</option>
                        </select>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-admin-adduser-username" class="col-form-label">ชื่อบัญชีผู้ใช้ :</label>
                            <input type="text" class="form-control input-sm" id="model-admin-adduser-username" required>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-admin-adduser-password" class="col-form-label">รหัสผ่าน :</label>
                            <input type="password" class="form-control input-sm" id="model-admin-adduser-password" required
                                autocomplete>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-admin-adduser-repassword" class="col-form-label">ยืนยันรหัสผ่าน :</label>
                            <input type="password" class="form-control input-sm" id="model-admin-adduser-repassword" required
                                autocomplete>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-admin-adduser-firstname" class="col-form-label">ชื่อ :</label>
                            <input type="text" class="form-control input-sm" id="model-admin-adduser-firstname" required>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-admin-adduser-lastname" class="col-form-label">นามสกุล :</label>
                            <input type="text" class="form-control input-sm" id="model-admin-adduser-lastname" required>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-admin-adduser-status" class="col-form-label">ตำแหน่ง :</label>
                            <input type="text" class="form-control input-sm" id="model-admin-adduser-status" required>
                        </div>
                        <!-- checkbox -->
                        <div class="form-group" style="margin-bottom : 3px;" id="admin-officer-check">
                            <label for="model-adduser-username" class="col-form-label">กำหนดสิทธิ์ :</label>
                            <div class="contrainer ml-3">
                                <div class="row">
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input"
                                            id="model-officer-comfirm-register">
                                        <label class="custom-control-label" for="model-officer-comfirm-register"
                                            checked>ยืนยันการสมัครสมาชิก</label>
                                    </div>
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="model-officer-comfirm-request">
                                        <label class="custom-control-label"
                                            for="model-officer-comfirm-request">ยืนยันการขออนุญาต</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="model-officer-dismiss">
                                        <label class="custom-control-label" for="model-officer-dismiss">ยกเลิกใบอนุญาต</label>
                                    </div>
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="model-officer-all">
                                        <label class="custom-control-label" for="model-officer-all">ดูใบอนุญาต</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-group" style="margin-bottom : 3px;" id="admin-subcommittee-check">
                            <label for="model-adduser-username" class="col-form-label">กำหนดสิทธิ์ :</label>
                            <div class="contrainer ml-3">
                                <div class="row">
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input"
                                            id="model-subcommittee-approve">
                                        <label class="custom-control-label" for="model-subcommittee-approve"
                                            checked>อนุมัติใบอนุญาต</label>
                                    </div>
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="model-subcommittee-all">
                                        <label class="custom-control-label"
                                            for="model-subcommittee-all">ดูใบอนุญาต</label>
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
    
    <!-- edit model -->
    <div class="modal fade model-adduser" id="model-edit" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header alert alert-primary">
                    <h5 class="modal-title">แก้ไขสมาชิก</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="edituser_form" method="post" autocomplete="off">
                    <!-- body -->
                    <div class="modal-body" style="margin-top : -25px;">
                        <div class="form-group" style="margin-bottom : 3px;">
                        <select class="custom-select" id="model-edit-admin-adduser-type">
                            <option value="officer">เจ้าหน้าที่</option>
                            <option value="subcommittee">อนุกรรมการ</option>
                        </select>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-admin-edituser-username" class="col-form-label">ชื่อบัญชีผู้ใช้ :</label>
                            <input type="text" class="form-control input-sm" id="model-admin-edituser-username" required>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-admin-edituser-password" class="col-form-label">รหัสผ่าน :</label>
                            <input type="password" class="form-control input-sm" id="model-admin-edituser-password"
                                autocomplete>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-admin-edituser-repassword" class="col-form-label">ยืนยันรหัสผ่าน :</label>
                            <input type="password" class="form-control input-sm" id="model-admin-edituser-repassword"
                                autocomplete>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-admin-edituser-firstname" class="col-form-label">ชื่อ :</label>
                            <input type="text" class="form-control input-sm" id="model-admin-edituser-firstname" required>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-admin-edituser-lastname" class="col-form-label">นามสกุล :</label>
                            <input type="text" class="form-control input-sm" id="model-admin-edituser-lastname" required>
                        </div>
                        <div class="form-group" style="margin-bottom : 3px;">
                            <label for="model-admin-edituser-status" class="col-form-label">ตำแหน่ง :</label>
                            <input type="text" class="form-control input-sm" id="model-admin-edituser-status" required>
                        </div>
                        <!-- checkbox -->
                        <div class="form-group" style="margin-bottom : 3px;" id="admin-edit-officer-check">
                            <label for="model-edituser-username" class="col-form-label">กำหนดสิทธิ์ :</label>
                            <div class="contrainer ml-3">
                                <div class="row">
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input"
                                            id="model-edit-officer-comfirm-register">
                                        <label class="custom-control-label" for="model-edit-officer-comfirm-register"
                                            checked>ยืนยันการสมัครสมาชิก</label>
                                    </div>
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="model-edit-officer-comfirm-request">
                                        <label class="custom-control-label"
                                            for="model-edit-officer-comfirm-request">ยืนยันการขออนุญาต</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="model-edit-officer-dismiss">
                                        <label class="custom-control-label" for="model-edit-officer-dismiss">ยกเลิกใบอนุญาต</label>
                                    </div>
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="model-edit-officer-all">
                                        <label class="custom-control-label" for="model-edit-officer-all">ดูใบอนุญาต</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-group" style="margin-bottom : 3px;" id="admin-edit-subcommittee-check">
                            <label for="model-adduser-username" class="col-form-label">กำหนดสิทธิ์ :</label>
                            <div class="contrainer ml-3">
                                <div class="row">
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input"
                                            id="model-edit-subcommittee-approve">
                                        <label class="custom-control-label" for="model-edit-subcommittee-approve"
                                            checked>อนุมัติใบอนุญาต</label>
                                    </div>
                                    <div class="col custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="model-edit-subcommittee-all">
                                        <label class="custom-control-label"
                                            for="model-edit-subcommittee-all">ดูใบอนุญาต</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="model-admin-edituser-id" value="">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">เพิ่มสมาชิก</button>
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

    <script src="js/admin_adduser.js" crossorigin="anonymous"></script>
</body>

</html>