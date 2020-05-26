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

    let person_username = $("#person_username").val()
    let person_password = $("#person_password").val()
    let category  = 'personality'

    var file_pdf = $("#filepdf-person-upload").prop('files')[0];
    var formData = new FormData();
    var dataJson = {
        'person_name': person_name,
        'person_identification': person_identification,
        'person_birthday': person_birthday,
        'person_phonenumber': person_phonenumber,
        'person_fax': person_fax,
        'person_email': person_email,
        'person_address': person_address,
        'person_district': person_district,
        'person_amphoe': person_amphoe,
        'person_province': person_province,
        'person_zipcode': person_zipcode,
        'person_username': person_username,
        'person_password': person_password,
        'category': category
    }
    formData.append('file', file_pdf);
    formData.append('data',JSON.stringify(dataJson));
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'php/php_register.php',
        processData:false,
        contentType: false,
        data: formData,
        success: function(response) {
            console.log(response)
            response = JSON.parse(response)
            if(response.success){
                location.href="./"
            }else{
            }
        }
    });
});
$("#company_register").submit(function(e) {
    let company_name = $("#company_name").val()
    let company_no = $("#company_enrollno").val()
    let company_date = $("#company_date_enroll").val()
    let company_phone = $("#company_phone").val()
    let company_fax = $("#company_fax").val()
    let company_email = $('#company_email').val()
    let company_address = $("#company_address").val()
    let company_district = $("#company_district").val()
    let company_amphoe = $("#company_amphoe").val()
    let company_province = $("#company_province").val()
    let company_zipcode = $("#company_zipcode").val()
    let company_username = $("#company_username").val()
    let company_password = $("#company_password").val()
    let category  = 'company'

    var file_pdf = $("#filepdf-upload").prop('files')[0];
    var formData = new FormData();
    var dataJson = {
        'person_name': company_name,
        'person_identification': company_no,
        'person_birthday': company_date,
        'person_phonenumber': company_phone,
        'person_fax': company_fax,
        'person_email': company_email,
        'person_address': company_address,
        'person_district': company_district,
        'person_amphoe': company_amphoe,
        'person_province': company_province,
        'person_zipcode': company_zipcode,
        'person_username': company_username,
        'person_password': company_password,
        'category': category
    }
    formData.append('file', file_pdf);
    formData.append('data',JSON.stringify(dataJson));
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'php/php_register.php',
        processData:false,
        contentType: false,
        data: formData,
        success: function(response) {
            console.log(response)
            response = JSON.parse(response)
            if(response.success){
                location.href="./"
            }else{
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

//company check same storage
$('#check-address-storage-company').click(function(){
    if($(this).prop("checked") == true){
        $("#company_storage_address").val($("#company_address").val())
        $("#company_storage_district").val($("#company_district").val())
        $("#company_storage_amphoe").val($("#company_amphoe").val())
        $("#company_storage_province").val($("#company_province").val())
        $("#company_storage_zipcode").val($("#company_zipcode").val())

        $("#company_storage_address").prop('disabled', true)
        $("#company_storage_district").prop('disabled', true)
        $("#company_storage_amphoe").prop('disabled', true)
        $("#company_storage_province").prop('disabled', true)
        $("#company_storage_zipcode").prop('disabled', true)
    }else{
        $("#company_storage_address").val("")
        $("#company_storage_district").val("")
        $("#company_storage_amphoe").val("")
        $("#company_storage_province").val("")
        $("#company_storage_zipcode").val("")
        $("#company_storage_address").prop('disabled', false)
        $("#company_storage_district").prop('disabled', false)
        $("#company_storage_amphoe").prop('disabled', false)
        $("#company_storage_province").prop('disabled', false)
        $("#company_storage_zipcode").prop('disabled', false)
    }
})

//person check same storage
$('#check-address-storage-person').click(function(){
    if($(this).prop("checked") == true){
        $("#person_storage_address").val($("#person_address").val())
        $("#person_storage_district").val($("#person_district").val())
        $("#person_storage_amphoe").val($("#person_amphoe").val())
        $("#person_storage_province").val($("#person_province").val())
        $("#person_storage_zipcode").val($("#person_zipcode").val())

        $("#person_storage_address").prop('disabled', true)
        $("#person_storage_district").prop('disabled', true)
        $("#person_storage_amphoe").prop('disabled', true)
        $("#person_storage_province").prop('disabled', true)
        $("#person_storage_zipcode").prop('disabled', true)
    }else{
        $("#person_storage_address").val("")
        $("#person_storage_district").val("")
        $("#person_storage_amphoe").val("")
        $("#person_storage_province").val("")
        $("#person_storage_zipcode").val("")
        $("#person_storage_address").prop('disabled', false)
        $("#person_storage_district").prop('disabled', false)
        $("#person_storage_amphoe").prop('disabled', false)
        $("#person_storage_province").prop('disabled', false)
        $("#person_storage_zipcode").prop('disabled', false)
    }
})

//file validate
//https://www.codexworld.com/ajax-file-upload-with-form-data-jquery-php-mysql/
// $("#filepdf-upload").change(function() {
//     var file = this.files[0];
//     var fileType = file.type;
    // var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
//     var match = ['application/pdf'];
//     if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
//         alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
//         $("#file").val('');
//         return false;
//     }
// });


// https://stackoverflow.com/questions/48613992/bootstrap-4-file-input-doesnt-show-the-file-name
$('#filepdf-upload').on('change',function(){
    //get the file name
    var fileName = $(this).val();
    var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(cleanFileName);
})
$('#filepdf-person-upload').on('change',function(){
    //get the file name
    var fileName = $(this).val();
    var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(cleanFileName);
})