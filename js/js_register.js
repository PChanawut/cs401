$("#customRadioInline1").click(function() {
    $("#main_register_person").fadeIn(250);
    $("#main_register_company").fadeOut(0);
});
$("#customRadioInline2").click(function() {
    $("#main_register_person").fadeOut(0);
    $("#main_register_company").fadeIn(250);
});
//auto fill
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#person_district'),
    $amphoe: $('#person_amphoe'),
    $province: $('#person_province'),
    $zipcode: $('#person_zipcode'),
});
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#person_storage_district'),
    $amphoe: $('#person_storage_amphoe'),
    $province: $('#person_storage_province'),
    $zipcode: $('#person_storage_zipcode'),
});
$("#person-register").submit(function(e) {
    // if(){

    // }
    // let person_nametitle = $("# person_nametitle").val();
    // let person_firstname = $("#person_firstname").val();
    // let person_lastname = $("#person_lastname").val();

    let person_name = $("# person_nametitle").val()+$("#person_firstname").val()+" "+$("#person_lastname").val();

    let person_birthday = $("#person_birthday").val();
    let person_identification = $("#person_identification").val();
    let person_phonenumber = $("#person_phonenumber").val();
    let person_email = $("#person_email").val();

    let person_address = $("#person_address").val();
    let person_district = $("#person_district").val();
    let person_amphoe = $("#person_amphoe").val();
    let person_province = $("#person_province").val();
    let person_zipcode = $("#person_zipcode").val();

    let person_username = $("#person_username").val();
    let person_password = $("#person_password").val();

    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'php/php_register.php',
        data: {
            person_name: person_name,
            person_firstname: person_firstname,
            person_nametitle: person_nametitle,
            person_nametitle: person_nametitle,
            person_nametitle: person_nametitle,
            person_nametitle: person_nametitle,
            person_nametitle: person_nametitle,
            person_nametitle: person_nametitle,
            person_nametitle: person_nametitle,
            person_nametitle: person_nametitle,
            person_nametitle: person_nametitle,
            person_nametitle: person_nametitle,
            person_nametitle: person_nametitle,
            person_nametitle: person_nametitle,
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