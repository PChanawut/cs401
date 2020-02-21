<!doctype html>
<html lang="en">
    <head>
        <!-- config -->
        <?php include 'component/config.php' ?>
        <?php
            if ($_SESSION["permission"][4] != 1) {
              Header("Location: home");
            }
            ?>
    </head>
    <body>
        <!-- header -->
        <?php include 'component/header.php' ?>
        <!-- main -->
        <?php include 'component/main_adduser.php' ?>
        <!-- footer -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
        <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
        <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>
        <!-- model -->
        <div class="modal fade model-adduser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มสมาชิก</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="adduser_form" method="post" autocomplete="off">
                        <!-- body -->
                        <div class="modal-body">
                            <div class="form-group" style="margin-bottom : 5px;">
                                <label for="model-adduser-username" class="col-form-label">ชื่อบัญชีผู้ใช้ :</label>
                                <input type="text" class="form-control" id="model-adduser-username" required>
                            </div>
                            <div class="form-group" style="margin-bottom : 5px;">
                                <label for="model-adduser-password" class="col-form-label">รหัสผ่าน :</label>
                                <input type="password" class="form-control" id="model-adduser-password" required autocomplete>
                            </div>
                            <div class="form-group" style="margin-bottom : 5px;">
                                <label for="model-adduser-repassword" class="col-form-label" style="margin-bottom : 5px;">ยืนยันรหัสผ่าน :</label>
                                <input type="password" class="form-control" id="model-adduser-repassword" required autocomplete>
                            </div>
                            <div class="form-group" style="margin-bottom : 5px;">
                                <label for="model-adduser-firstname" class="col-form-label">ชื่อ :</label>
                                <input type="text" class="form-control" id="model-adduser-firstname" required>
                            </div>
                            <div class="form-group" style="margin-bottom : 5px;">
                                <label for="model-adduser-lastname" class="col-form-label">นามสกุล :</label>
                                <input type="text" class="form-control" id="model-adduser-lastname" required>
                            </div>
                            <div class="form-group" style="margin-bottom : 5px;">
                                <label for="model-adduser-status" class="col-form-label">ตำแหน่ง :</label>
                                <input type="text" class="form-control" id="model-adduser-status" required>
                            </div>
                            <!-- checkbox -->
                            <div class="form-group" style="margin-bottom : 5px;">
                                <label for="model-adduser-username" class="col-form-label">กำหนดสิทธิ์ :</label>
                                <div class="contrainer ml-3">
                                    <div class="row">
                                        <div class="col custom-control custom-checkbox mr-2">
                                            <input type="checkbox" class="custom-control-input" id="checkPermission-request">
                                            <label class="custom-control-label" for="checkPermission-request">ขอใบอนุญาต</label>
                                        </div>
                                        <div class="col custom-control custom-checkbox mr-2">
                                            <input type="checkbox" class="custom-control-input" id="checkPermission-renew">
                                            <label class="custom-control-label" for="checkPermission-renew">ต่อใบอนุญาต</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col custom-control custom-checkbox mr-2">
                                            <input type="checkbox" class="custom-control-input" id="checkPermission-dismiss">
                                            <label class="custom-control-label" for="checkPermission-dismiss">ยกเลิกใบอนุญาต</label>
                                        </div>
                                        <div class="col custom-control custom-checkbox mr-2">
                                            <input type="checkbox" class="custom-control-input" id="checkPermission-all">
                                            <label class="custom-control-label" for="checkPermission-all">ดูใบอนุญาต</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">เพิ่มสมาชิก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- script -->
        <script type="text/javascript">
            // js veridate
            $(document).ready(function() {
              $('#model-adduser-repassword').focusout(function() {
                if ($('#model-adduser-repassword').val() != $('#model-adduser-password').val()) {
                  $("#model-adduser-password").addClass("is-invalid");
                  $("#model-adduser-repassword").addClass("is-invalid");
                  $("#invalid").css("display", "block");
                }
                if ($('#model-adduser-password').hasClass("is-invalid") && $('#model-adduser-repassword').hasClass("is-invalid")) {
                  if ($('#model-adduser-repassword').val() == $('#model-adduser-password').val()) {
                    $("#model-adduser-password").removeClass("is-invalid");
                    $("#model-adduser-repassword").removeClass("is-invalid");
                    $("#invalid").css("display", "none");
                  }
                }
              })
            });
            
            // ajax
            $(document).ready(function() {
              $('#adduser_form').submit(function(e) {
                let username = $("#model-adduser-username").val();
                let password = $("#model-adduser-password").val();
                let firstname = $("#model-adduser-firstname").val();
                let lastname = $("#model-adduser-lastname").val();
                let status = $("#model-adduser-status").val();
                if (password == $("#model-adduser-repassword").val()) {
                  e.preventDefault();
                  $.ajax({
                    type: 'POST',
                    url: 'php/php_adduser.php',
                    data: {
                      username: username,
                      password: password,
                      firstname: firstname,
                      lastname: lastname,
                      status: status
                    },
                    success: function(response) {
                      if (response == 'success') {
                        // $(document).ajaxStop(function(){
                        alert(response);
                        // window.location.reload();
                        // location.replace("license_all");
                        // });  
                      } else {
                        alert(response);
                      }
                    }
                  });
                } else {
                  // check;
                }
              });
            });
        </script>
    </body>
</html>