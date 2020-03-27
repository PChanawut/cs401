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

$("#person_register").submit(function(e) {
    // if(){

    // }
    let person_name = $("#person_nametitle").val()+$("#person_firstname").val()+" "+$("#person_lastname").val()
    let person_position = $("#person_position").val()
    let person_birthday = $("#person_birthday").val()
    let person_identification = $("#person_identification").val()
    let person_phonenumber = $("#person_phonenumber").val()
    let person_fax = $("#person_fax").val()
    let person_email = $("#person_email").val()

    let person_address = $("#person_address").val()
    let person_district = $("#person_district").val()
    let person_amphoe = $("#person_amphoe").val()
    let person_province = $("#person_province").val()
    let person_zipcode = $("#person_zipcode").val()

    let person_storage_address = $("#person_storage_address").val()
    let person_storage_district = $("#person_storage_district").val()
    let person_storage_amphoe = $("#person_storage_amphoe").val()
    let person_storage_province = $("#person_storage_province").val()
    let person_storage_zipcode = $("#person_storage_zipcode").val()

    let person_username = $("#person_username").val()
    let person_password = $("#person_password").val()

    let type = 'personality'

    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'php/php_register.php',
        data: {
            person_name: person_name,
            person_position: person_position,
            person_birthday: person_birthday,
            person_identification: person_identification,
            person_phonenumber: person_phonenumber,
            person_fax: person_fax,
            person_email: person_email,

            person_address: person_address,
            person_district: person_district,
            person_amphoe: person_amphoe,
            person_province: person_province,
            person_zipcode: person_zipcode,

            person_storage_address: person_storage_address,
            person_storage_district: person_storage_district,
            person_storage_amphoe: person_storage_amphoe,
            person_storage_province: person_storage_province,
            person_storage_zipcode: person_storage_zipcode,

            person_username: person_username,
            person_password: person_password,

            type: type
        },
        success: function(response) {
            console.log(response)
            console.log('---------------------------------------------------')
            // response = JSON.parse(response);
            // if (response.success) {
            //     $(document).ajaxStop(function() {
            //         location.replace("home");
            //     });
            // } else {
            //     $("#invalid").css("display", "block");
            //     $("#username").val("");
            //     $("#username").addClass("is-invalid");
            //     $("#password").val("");
            //     $("#password").addClass("is-invalid");
            // }
        }
    });
});