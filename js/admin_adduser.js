$('#adduser_form').submit(function(e) {
    let username = $("#model-admin-adduser-username").val();
    let password = $("#model-admin-adduser-password").val();
    let firstname = $("#model-admin-adduser-firstname").val();
    let lastname = $("#model-admin-adduser-lastname").val();
    let status = $("#model-admin-adduser-status").val();
    let permission = "";
    let type = "";
    if($("#model-admin-adduser-type option:selected").val() == "officer"){
        $('#model-officer-comfirm-register').is(":checked")?permission += "1":permission += "0";
        $('#model-officer-comfirm-request').is(":checked")?permission += "1":permission += "0";
        $('#model-officer-dismiss').is(":checked")?permission += "1":permission += "0";
        $('#model-officer-all').is(":checked")?permission += "1":permission += "0";
        permission+='0';

        type = "officer";
    }else{
        $('#model-subcommittee-approve').is(":checked")?permission += "1":permission += "0";
        $('#model-subcommittee-all').is(":checked")?permission += "1":permission += "0";
        permission+='0';
        permission+='0';
        permission+='0';

        type = "subcommittee";
    }
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'php/php_admin_adduser.php',
        data: {
            username: username,
            password: password,
            firstname: firstname,
            lastname: lastname,
            status: status,
            type: type,
            permission: permission
        },
        success: function(response) {
            response = JSON.parse(response);
            console.log(response)
            if (response.success) {
                $('#model-adduser').modal('toggle');
                window.location.reload(false); 
            } else {
                alert(response);
            }
        }
    });
});

$('#edituser_form').submit(function(e) {
    let username = $("#model-admin-edituser-username").val();
    let password = $("#model-admin-edituser-password").val();
    let firstname = $("#model-admin-edituser-firstname").val();
    let lastname = $("#model-admin-edituser-lastname").val();
    let status = $("#model-admin-edituser-status").val();
    let id = $("#model-admin-edituser-id").val();
    let permission = "";
    let type = "";
    if($("#model-edit-admin-adduser-type option:selected").val() == "officer"){
        $('#model-edit-officer-comfirm-register').is(":checked")?permission += "1":permission += "0";
        $('#model-edit-officer-comfirm-request').is(":checked")?permission += "1":permission += "0";
        $('#model-edit-officer-dismiss').is(":checked")?permission += "1":permission += "0";
        $('#model-edit-officer-all').is(":checked")?permission += "1":permission += "0";
        permission+='0';
        type = "officer";
    }else{
        $('#model-edit-subcommittee-approve').is(":checked")?permission += "1":permission += "0";
        $('#model-edit-subcommittee-all').is(":checked")?permission += "1":permission += "0";
        permission+='0';
        permission+='0';
        permission+='0';

        type = "subcommittee";
    }
    console.log(permission)
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'php/php_changeuser.php',
        data: {
            username: username,
            password: password,
            firstname: firstname,
            lastname: lastname,
            status: status,
            type: type,
            id: id,
            permission: permission
        },
        success: function(response) {
            response = JSON.parse(response);
            console.log(response)
            if (response.success) {
                $('#model-edit').modal('toggle');
                window.location.reload(false); 
            } else {
                alert(response);
            }
        }
    });
});

function editUser(usercompany_id,row_no){
    $.ajax({
        type: 'POST',
        url: 'php/php_edituser.php',
        data: {
            usercompany_id: usercompany_id
        },
    success: function(response) {
        response = JSON.parse(response)
        if (response.success) {
            if(response.type == "officer"){
                $("#model-edit-admin-adduser-type").val("officer").change();

                $("#model-edit-officer-comfirm-register").prop("checked", response.permission[0] == "1" ? true : false);
                $("#model-edit-officer-comfirm-request").prop("checked", response.permission[1] == "1" ? true : false);
                $("#model-edit-officer-dismiss").prop("checked", response.permission[2] == "1" ? true : false);
                $("#model-edit-officer-all").prop("checked", response.permission[3] == "1" ? true : false);

                $("#model-edit-subcommittee-approve").prop("checked", false);
                $("#model-edit-subcommittee-all").prop("checked", false);

                $("#model-admin-edituser-id").val(response.user_id);
                $("#admin-edit-subcommittee-check").hide();
                $("#admin-edit-officer-check").show();
            }else{
                $("#model-edit-admin-adduser-type").val("subcommittee").change();

                $("#model-edit-subcommittee-approve").prop("checked", response.permission[0] == "1" ? true : false);
                $("#model-edit-subcommittee-all").prop("checked", response.permission[1] == "1" ? true : false);

                $("#model-edit-officer-comfirm-register").prop("checked", false);
                $("#model-edit-officer-comfirm-request").prop("checked", false);
                $("#model-edit-officer-dismiss").prop("checked", false);
                $("#model-edit-officer-all").prop("checked", false);

                $("#model-admin-edituser-id").val(response.user_id)
                $("#admin-edit-subcommittee-check").show();
                $("#admin-edit-officer-check").hide();
            }

            $('#model-admin-edituser-username').val(response.usercompany_username)
            $('#model-admin-edituser-firstname').val(response.name.split(" ")[0])
            $('#model-admin-edituser-lastname').val(response.name.split(" ")[1])
            $('#model-admin-edituser-status').val(response.usercompany_status)
            $('#model-edit').modal('show');
        } else {

        }
    }
    });
}

//delete model
function deleteUser(userArray){
    $('#model-confirm-id').val(userArray.usercompany_id)
    $('#model-confirm-name').text(userArray.usercompany_name);
    $('#model-confirm').modal('toggle')
    
}
//delete ajax
$('#model-confirm-form').submit(function(e){
    let id = $('#model-confirm-id').val()
    $.ajax({
        type: 'POST',
        url: 'php/php_disableuser.php',
        data: {
            row_userid: id
        },
        success: function(response) {
            response = JSON.parse(response);
            if (response.success) {
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
})


$( document ).ready(function() {
    $("#admin-subcommittee-check").hide();
    $("#admin-officer-check").show();
});
$("#model-admin-adduser-type").change(function(){
    if($("#model-admin-adduser-type option:selected").val() == "officer"){
        $("#admin-subcommittee-check").hide(300);
        $("#admin-officer-check").show(300);
    }else{
        $("#admin-subcommittee-check").show(300);
        $("#admin-officer-check").hide(300);
    }
});
$("#model-edit-admin-adduser-type").change(function(){
    if($("#model-edit-admin-adduser-type option:selected").val() == "officer"){
        $("#admin-edit-subcommittee-check").hide(300);
        $("#admin-edit-officer-check").show(300);
    }else{
        $("#admin-edit-subcommittee-check").show(300);
        $("#admin-edit-officer-check").hide(300);
    }
});
$(document).ready(function(){
    $("th.index").each(function(index) {
        $(this).text(++index);
    });
    $("tbody.index").each(function(index) {
        $(this).attr("id",++index);
    });
})
    