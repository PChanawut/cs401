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
    // if (password == $("#model-adduser-repassword").val()) {
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
                response = JSON.parse(response);
                if (response.success) {
                    // $('#table-adduser').append(
                    //     "<tbody class=\"index\">"
                    //         +"<th class=\"index\" id=\"id-row\" scope=\"row\"></td>"
                    //         +"<td>"+response.name+"</td>"
                    //         +"<td class=\"d-none d-sm-block\">"+response.status+"</td>"
                    //         +"<td>"
                    //             +"<span class=\"badge badge-"+response.permission[0]==1?"success":"secondary"+"\" style=\"background: #2973CB;\">ขอใบอนุญาต</span>"
                    //             +"<span class=\"badge badge-"+response.permission[1]==1?"success":"secondary"+"\" style=\"background: #2973CB;\">ต่อใบอนุญาต</span>"
                    //             +"<span class=\"badge badge-"+response.permission[2]==1?"success":"secondary"+"\" style=\"background: #2973CB;\">ยกเลิกใบอนุญาต</span>"
                    //             +"<span class=\"badge badge-"+response.permission[3]==1?"success":"secondary"+"\" style=\"background: #2973CB;\">ดูใบอนุญาต</span>"
                    //         +"</td>"
                    //         +"<td class=\"text-right\">"
                    //             +"<button type=\"submit\" onclick=\"editUser(<?php echo $user['usercompany_id']; ?>,this)\"class=\"btn btn-warning ml-2\">"
                    //                 +"<i class=\"fa fa-edit\" style=\"font-size:20px;color:white\"></i>"
                    //             +"</button>"
                    //             +"<button type=\"submit\" id=\"removeid\" onclick=\"deleteUser("+response.id+",this)\" class=\"btn btn-danger ml-2\">ลบสมาชิก</button>"      
                    //         +"</td>"
                    //     +"</tbody>"
                    // ); 

                    //close model
                    $('#model-adduser').modal('toggle');
                    location.reload();
                    // setIndex();
                    // $("th.index").each(function(index) {
                    //     $(this).text(++index);
                    // });
                    // setIdTbody();
                    // $("tbody.index").each(function(index) {
                    //     $(this).attr("id",++index);
                    // }); 
                } else {
                    alert(response);
                }
            }
        });
    // } else {
    // check;
    // }
});
function deleteUser(row_userid,row_no){
    $.ajax({
    type: 'POST',
    url: 'php/php_disableuser.php',
    data: {
        row_userid: row_userid
    },
    success: function(response) {
        response = JSON.parse(response);
        if (response.success) {
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
function editUser(usercompany_id,row_no){
    $.ajax({
        type: 'POST',
        url: 'php/php_edituser.php',
        data: {
            usercompany_id: usercompany_id
        },
    success: function(response) {
        response = JSON.parse(response)
        console.log(response)
        if (response.success) {
            $('#model-edituser-username').val(response.usercompany_username)
            $('#model-edituser-firstname').val(response.name.split(" ")[0])
            $('#model-edituser-lastname').val(response.name.split(" ")[1])
            $('#model-edituser-status').val(response.usercompany_status)
            $("#checkPermission-editrequest").prop("checked", response.permission[0] == "1" ? true : false);
            $("#checkPermission-editrenew").prop("checked", response.permission[1] == "1" ? true : false);
            $("#checkPermission-editdismiss").prop("checked", response.permission[2] == "1" ? true : false);
            $("#checkPermission-editall").prop("checked", response.permission[3] == "1" ? true : false);
            $('#model-edituser').modal('show');
        } else {
            
        }
    }
    });
}

function ChangeUser(usercompany_id,row_no){
    $.ajax({
        type: 'POST',
        url: 'php/php_changeuser.php',
        data: {
            usercompany_id: usercompany_id
        },
    success: function(response) {
        response = JSON.parse(response)
        if (response.success) {
            $('#model-edituser-username').val(response.usercompany_username)
            $('#model-edituser-firstname').val(response.name.split(" ")[0])
            $('#model-edituser-lastname').val(response.name.split(" ")[1])
            $('#model-edituser-status').val(response.usercompany_status)
            console.log("pass")
            $("#checkPermission-editrequest").prop("checked", response.permission[0] == "1" ? true : false);
            $("#checkPermission-editrenew").prop("checked", response.permission[1] == "1" ? true : false);
            $("#checkPermission-editdismiss").prop("checked", response.permission[2] == "1" ? true : false);
            $("#checkPermission-editall").prop("checked", response.permission[3] == "1" ? true : false);
            $('#model-edituser').modal('show');
        } else {

        }
    }
    });
}

$(document).ready(function() {
    $(document).ready(function(){
        $("th.index").each(function(index) {
            $(this).text(++index);
        });
        $("tbody.index").each(function(index) {
            $(this).attr("id",++index);
        });
    })
});