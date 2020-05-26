$('#form_enroll_no').submit(function(e) {
    let id_enroll_no = $("#id_enroll_no").val();
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'php/php_find_register.php',
        data: {
            id_enroll_no2: id_enroll_no
        },
        success: function(response) {
            response = JSON.parse(response);
            if (response.success == true) {
                $('#show_company_id').val(response.company.company_id);
                $('#show_enroll_date').text("วันจดทะเบียน : "+response.company.enroll_start);
                $('#show_enroll_no').text("เลขที่ทะเบียน : "+response.company.enroll_no);
                $('#show_company_name').text(response.company.company_name)
                $('#show_company_address').text(response.company.company_address)
                $('#show_company_email').text(response.company.company_email)
                $('#show_company_phone').text("เบอร์ : "+response.company.company_phone)
                $('#show_company_fax').text("แฟกซ์ : "+response.company.company_fax)
                $('#model-company-detail').modal('show')
            } else {
                
            }
        }
    });
});
$('#form_confirm_register').submit(function(e) {
    let info_register_id = $('#info_register_id').val()
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'php/php_confirm_register.php',
        data: {
            info_register_id: info_register_id
        },
        success: function(response) {
            console.log(response)
            response = JSON.parse(response);
            if (response.success == true) {
                
            } else {
                
            }
        }
    });
});
$('#form_company_id').submit(function(e){
    let id_confirm = $('#show_company_id').val()
    $.ajax({
        type: 'POST',
        url: 'php/php_confirm_register.php',
        data: {
            info_register_id: id_confirm
        },
        success: function(response) {
            response = JSON.parse(response);
            if (response.success == true) {
                $('#model-company-detail').modal('toggle');
                location.reload();
            } else {
                
            }
        }
    });
})
function detailcompany(company_id){
    $.ajax({
        type: 'POST',
        url: 'php/php_find_register.php',
        data: {
            id_enroll_no: company_id
        },
        success: function(response) {
            response = JSON.parse(response);
            console.log(response)
            if (response.success == true) {
                $('#show_company_id').val(response.company.company_id);
                $('#show_enroll_date').text("วันจดทะเบียน : "+response.company.enroll_start);
                $('#show_enroll_no').text("เลขที่ทะเบียน : "+response.company.enroll_no);
                $('#show_company_name').text(response.company.company_name)
                $('#show_company_address').text(response.company.company_address)
                $('#show_company_email').text(response.company.company_email)
                $('#show_company_phone').text("เบอร์ : "+response.company.company_phone)
                $('#show_company_fax').text("แฟกซ์ : "+response.company.company_fax)
                $("#tag").attr("href", response.company.company_file)
                console.log(response.company.company_file)
                $('#model-company-detail').modal('show')
            } else {
                
            }
        }
    });
    
}
$(document).ready(function(){
    $("th.index").each(function(index) {
        $(this).text(++index);
    });
    $("tbody.index").each(function(index) {
        $(this).attr("id",++index);
    });
})