$('#login_form').submit(function(e) {
    let username = $("#username").val();
    let password = $("#password").val();
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'php/php_login.php',
        data: {
            username: username,
            password: password
        },
        success: function(response) {
            response = JSON.parse(response);
            if (response.success) {
                $(document).ajaxStop(function() {
                    location.replace("home");
                });
            } else {
                $("#invalid").css("display", "block");
                $("#username").val("");
                $("#username").addClass("is-invalid");
                $("#password").val("");
                $("#password").addClass("is-invalid");
            }
        }
    });
});
// $(document).ready(function() {
//     $('#username').click(function() {
//         if (($("#username").hasClass("is-invalid") && $("#username").val() == "") || ($("#password").hasClass("is-invalid") && $("#password").val() == "")) {
//         $("#username").removeClass("is-invalid");
//         $("#password").removeClass("is-invalid");
//         }
//     });
// });