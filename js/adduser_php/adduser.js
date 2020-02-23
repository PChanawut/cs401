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