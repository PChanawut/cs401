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
                    $('#table-adduser').append(
                        "<tbody class=\"index\">"
                            +"<th class=\"index d-none d-sm-block\" id=\"id-row\" scope=\"row\"></td>"
                            +"<td>"+response.name+"</td>"
                            +"<td class=\"d-none d-sm-block\">"+response.status+"</td>"
                            +"<td>"
                                //+"<button type=\"button\" class=\"btn btn-primary\">แก้ไข</button>"
                                +"<button type=\"submit\" id=\"removeid\" onclick=\"deleteUser("+response.id+",this)\" class=\"btn btn-danger ml-2\">ลบสมาชิก</button>"      
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
$(document).ready(function() {
    // $('#model-adduser-repassword').focusout(function() {
    //     if ($('#model-adduser-repassword').val() != $('#model-adduser-password').val()) {
    //         $("#model-adduser-password").addClass("is-invalid");
    //         $("#model-adduser-repassword").addClass("is-invalid");
    //         $("#invalid").css("display", "block");
    //     }
    //     if ($('#model-adduser-password').hasClass("is-invalid") && $('#model-adduser-repassword').hasClass("is-invalid")) {
    //         if ($('#model-adduser-repassword').val() == $('#model-adduser-password').val()) {
    //             $("#model-adduser-password").removeClass("is-invalid");
    //             $("#model-adduser-repassword").removeClass("is-invalid");
    //             $("#invalid").css("display", "none");
    //         }
    //     }
    // })
    $(document).ready(function(){
        $("th.index").each(function(index) {
            $(this).text(++index);
        });
        $("tbody.index").each(function(index) {
            $(this).attr("id",++index);
        });
    })
});