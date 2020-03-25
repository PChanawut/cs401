$('#form_enroll_no').submit(function(e) {
    let id_enroll_no = $("#id_enroll_no").val();
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'php/php_officer_confirm_register.php',
        data: {
            id_enroll_no: id_enroll_no
        },
        success: function(response) {
            response = JSON.parse(response);
            if (response.success == true) {
                $('#info_register_namelname').text(response.company.company_name);
                $('#info_register_birthday').text(response.company.enroll_start);
                $('#info_register_citicenid').text(response.company.enroll_no);
                $('#info_register_phonenumber').text(response.company.company_phone);
                $('#info_register_email').text(response.company.company_email);
                $('#info_register_address').text(response.company.company_address);
                $('#info_register_address_storage').text(response.company.company_address_storage);
            } else {

            }
        }
    });
});