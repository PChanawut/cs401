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
        <!-- validated -->
        <script src="js/adduser_php/adduser.js" crossorigin="anonymous"></script>

        <!-- model -->
        <div class="modal fade model-adduser" id="model-adduser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                <input type="password" class="form-control input-sm" id="model-adduser-password" required autocomplete>
                            </div>
                            <div class="form-group" style="margin-bottom : 3px;">
                                <label for="model-adduser-repassword" class="col-form-label">ยืนยันรหัสผ่าน :</label>
                                <input type="password" class="form-control input-sm" id="model-adduser-repassword" required autocomplete>
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
                                            <input type="checkbox" class="custom-control-input" id="checkPermission-request">
                                            <label class="custom-control-label" for="checkPermission-request" checked>ขอใบอนุญาต</label>
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
            $(document).ready(function() {
                <?php include('php/config/database.php'); ?>
                <?php
                    $users = array();
                    $sql = "SELECT * FROM usercompany WHERE company_id=".$_SESSION["company_id"]." AND usercompany_ativate = 'ativate' AND NOT usercompany_id = ".$_SESSION["user_id"]."";  
                    $user_query = mysqli_query($conn,$sql) or die("Query fail: " . mysqli_error($conn));
                    while ($user =  mysqli_fetch_assoc($user_query)){
                    $users[] = $user;
                    }
                    ?>
                <?php
                    $i = 1;
                    if (is_array($users) || is_object($users)){
                        foreach($users as $user){
                    ?>
                    $('#table-adduser').append(
                        "<tbody class=\"index\">"
                            +"<th class=\"index d-none d-sm-block\" id=\"id-row\" scope=\"row\"></td>"
                            +"<td><?php echo $user['usercompany_fname'];echo " ";echo $user['usercompany_lname']; ?></td>"
                            +"<td class=\"d-none d-sm-block\"><?php echo $user['usercompany_status']; ?></td>"
                            +"<td>"
                                //+"<button type=\"button\" class=\"btn btn-primary\">แก้ไข</button>"
                                +"<button type=\"submit\" id=\"removeid\" onclick=\"deleteUser(<?php echo $user['usercompany_id'];?>,this)\" class=\"btn btn-danger ml-2\">ลบสมาชิก</button>"      
                            +"</td>"
                        +"</tbody>"
                    );
                <?php
                        }
                    }
                    mysqli_close($conn);
                    ?>
                $("th.index").each(function(index) {
                    $(this).text(++index);
                });
                $("tbody.index").each(function(index) {
                    $(this).attr("id",++index);
                });
       
            // ajax
            //add user;
                $('#adduser_form').submit(function(e) {
                    let username = $("#model-adduser-username").val();
                    let password = $("#model-adduser-password").val();
                    let firstname = $("#model-adduser-firstname").val();
                    let lastname = $("#model-adduser-lastname").val();
                    let status = $("#model-adduser-status").val();
                    let permission = "";
                    $('#checkPermission-request').is(":checked")?permission += "1":permission += "0";
                    $('#checkPermission-renew').is(":checked")?permission += "1":permission += "0";
                    $('#checkPermission-dismiss').is(":checked")?permission += "1":permission += "0";
                    $('#checkPermission-all').is(":checked")?permission += "1":permission += "0";
                    permission+="0"; //can add user(admin)
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
                                status: status,
                                permission: permission
                            },
                            success: function(response) {
                                console.log(response);
                                if (response != 'error') {
                                    $('#table-adduser').append(
                                        "<tbody class=\"index\">"
                                            +"<th class=\"index d-none d-sm-block\" id=\"id-row\" scope=\"row\"></td>"
                                            +"<td>"+firstname+" "+lastname+"</td>"
                                            +"<td class=\"d-none d-sm-block\">"+status+"</td>"
                                            +"<td>"
                                                //+"<button type=\"button\" class=\"btn btn-primary\">แก้ไข</button>"
                                                +"<button type=\"submit\" id=\"removeid\" onclick=\"deleteUser("+response+",this)\" class=\"btn btn-danger ml-2\">ลบสมาชิก</button>"      
                                            +"</td>"
                                        +"</tbody>"
                                    ); 
                                    // setIndex();
                                    $("th.index").each(function(index) {
                                        $(this).text(++index);
                                    });
                                    // setIdTbody();
                                    $("tbody.index").each(function(index) {
                                        $(this).attr("id",++index);
                                    });
                                    //close model
                                    $('#model-adduser').modal('toggle');
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
            function deleteUser(row_userid,row_no){
                $.ajax({
                type: 'POST',
                url: 'php/php_disableuser.php',
                data: {
                    row_userid: row_userid
                },
                success: function(response) {
                    if (response == 'success') {
                        var row = row_no.parentNode.parentNode;
                        row.parentNode.removeChild(row);

                        // setIndex();
                        $("th.index").each(function(index) {
                            $(this).text(++index);
                        });
                        // setIdTbody();
                        $("tbody.index").each(function(index) {
                        $(this).attr("id",++index);
                    });
                    } else {
                        
                    }
                }
                });
            }
        </script>
    </body>
</html>