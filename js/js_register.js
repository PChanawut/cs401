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
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#company_district'),
    $amphoe: $('#company_amphoe'),
    $province: $('#company_province'),
    $zipcode: $('#company_zipcode'),
});
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#company_storage_district'),
    $amphoe: $('#company_storage_amphoe'),
    $province: $('#company_storage_province'),
    $zipcode: $('#company_storage_zipcode'),
});
$("#person_register").submit(function(e) {
    let person_name = $("#person_nametitle").val()+""+$("#person_firstname").val()+" "+$("#person_lastname").val()
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

    let type;
    if($("#type-person").prop("checked") == true){
        type = 'personality'
    }else{
        type = 'company'
    }
     
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
            response = JSON.parse(response);
            if(response.success){
                location.href="./"
            }else{
                // error
            }
        }
    });
});
$("#company_register").submit(function(e) {
    let company_name = $("#company_name").val()
    let company_office_name = $("#company_office_name").val()
    let company_date_enroll = $("#company_date_enroll").val()
    let company_enrollno = $("#company_enrollno").val()
    let company_phone = $("#company_phone").val()
    let company_fax = $("#company_fax").val()
    let company_email = $('#company_email').val()

    let company_address = $("#company_address").val()
    let company_district = $("#company_district").val()
    let company_amphoe = $("#company_amphoe").val()
    let company_province = $("#company_province").val()
    let company_zipcode = $("#company_zipcode").val()

    let company_storage_address = $("#company_storage_address").val()
    let company_storage_district = $("#company_storage_district").val()
    let company_storage_amphoe = $("#company_storage_amphoe").val()
    let company_storage_province = $("#company_storage_province").val()
    let company_storage_zipcode = $("#company_storage_zipcode").val()

    let company_username = $("#company_username").val()
    let company_password = $("#company_password").val()

    let type;
    if($("#type-person").prop("checked") == true){
        type = 'personality'
    }else{
        type = 'company'
    }
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'php/php_register.php',
        data: {
            person_name: company_name,
            person_position: company_office_name,
            person_birthday: company_date_enroll,
            person_identification: company_enrollno,
            person_phonenumber: company_phone,
            person_fax: company_fax,
            person_email: company_email,

            person_address: company_address,
            person_district: company_district,
            person_amphoe: company_amphoe,
            person_province: company_province,
            person_zipcode: company_zipcode,

            person_storage_address: company_storage_address,
            person_storage_district: company_storage_district,
            person_storage_amphoe: company_storage_amphoe,
            person_storage_province: company_storage_province,
            person_storage_zipcode: company_storage_zipcode,

            person_username: company_username,
            person_password: company_password,

            type: type
        },
        success: function(response) {
            console.log(response)
            response = JSON.parse(response)
            if(response.success){
                location.href="./"
            }else{
                // error
            }
        }
    });
});
$('input[type=radio][name=radio-check-register]').change(function() {
    if($("#type-person").prop("checked") == true){
        type = 'personality'
        $("#main_register_person").show(250);
        $("#main_register_company").hide(250);
    }else{
        $("#main_register_person").hide(250);
        $("#main_register_company").show(250);
    }
});
$("#person_address, #person_district, #person_amphoe, #person_province, #person_zipcode").change(function(){
    if($("#person_address").val() != '' && $("#person_district").val() != '' 
    && $("#person_amphoe").val() != '' && $("#person_province").val() != ''
    && $("#person_zipcode").val() != ''){
        // $("#check-address-storage").removeAttr("disabled");
        // $("#person_storage_address").removeAttr("disabled");
        // $("#person_storage_district").removeAttr("disabled");
        // $("#person_storage_amphoe").removeAttr("disabled");
        // $("#person_storage_province").removeAttr("disabled");
        // $("#person_storage_zipcode").removeAttr("disabled");
    }
});
$("#check-address-storage").click(function(){
    if($(this).prop("checked") == true){
        if($("#person_address").val() != '' && $("#person_district").val() != '' 
        && $("#person_amphoe").val() != '' && $("#person_province").val() != ''
        && $("#person_zipcode").val() != ''){
            $("#person_storage_address").val($("#person_address").val())
            $("#person_storage_district").val($("#person_district").val())
            $("#person_storage_amphoe").val($("#person_amphoe").val())
            $("#person_storage_amphoe").val($("#person_amphoe").val())
            $("#person_storage_province").val($("#person_province").val())
            $("#person_storage_zipcode").val($("#person_zipcode").val())

            // $("#person_storage_address").attr('disabled', true);
            // $("#person_storage_district").attr('disabled', true);
            // $("#person_storage_amphoe").attr('disabled', true);
            // $("#person_storage_province").attr('disabled', true);
            // $("#person_storage_zipcode").attr('disabled', true);
        }
    }else{
        // $("#check-address-storage").removeAttr("disabled");
        // $("#person_storage_address").removeAttr("disabled");
        // $("#person_storage_district").removeAttr("disabled");
        // $("#person_storage_amphoe").removeAttr("disabled");
        // $("#person_storage_province").removeAttr("disabled");
        // $("#person_storage_zipcode").removeAttr("disabled");
    }
})