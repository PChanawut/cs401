$('#detail_license').on('hidden.bs.modal', function (e) {
    $('#model_detail_license_staff').empty();
    $('#model_detail_license_detail').empty();
    $('#model_detail_license_location').empty();
    $("#license_id").val(null);
})
function detailLicense(id_license,type_license){
    $.ajax({
        type: 'POST',
        url: 'php/php_license_detail.php',
        data: {
            id_license: id_license,
            type_license: type_license
        },
        success: function(response) {
            response = JSON.parse(response);
            if (response.success) {
                $("#license_id").val(id_license);
                $('#model_detail_license_licensetype').text(response.data.company.license_type)
                
                $('#model_detail_license_company1').text(response.data.company.company_name)
                $('#model_detail_license_company2').text(response.data.company.company_address)

                for(let i in response.data.location){
                    if(response.data.location[i].type_location_material == "IMPORT MATERIAL"){
                        $('#model_detail_license_location').append( "<p style=\"color:Gray;\">สถานที่เก็บนำเข้า : "+response.data.location[i].material_address+"</p>" );
                    }else if(response.data.location[i].type_location_material == "EXPORT MATERIAL"){
                        $('#model_detail_license_location').append( "<p style=\"color:Gray;\">สถานที่เก็บนำส่งออก : "+response.data.location[i].material_address+"</p>" );
                    }else if(response.data.location[i].type_location_material == "CHEMICAL"){
                        $('#model_detail_license_location').append( "<p style=\"color:Gray;\">สถานที่ทำให้วัสดุต้นกำลังให้พ้นจากสภาพที่เป็นอยู่ตามธรรมชาติในทางเคมี : "+response.data.location[i].material_address+"</p>" );
                    }else if(response.data.location[i].type_location_material == "NOT CHEMICAL"){
                        $('#model_detail_license_location').append( "<p style=\"color:Gray;\">สถานที่เก็บรักษาวัสดุที่พ้นสภาพแล้ว : "+response.data.location[i].material_address+"</p>" );
                    }else{
                        $('#model_detail_license_location').append( "<p style=\"color:Gray;\">สถานที่เก็บ : "+response.data.location[i].material_address+"</p>" );
                    }
                    
                }
                
                if(response.data.staff.success){
                    for(let i=0 ; i<Object.keys(response.data.staff.data).length ; i++){
                        if(response.data.staff.data[i].type_authorities != "ผู้รับปลายทางนำเข้าหรือส่งออก"){
                            $('#model_detail_license_staff').append( "<p style=\"color:Gray;\">"+response.data.staff.data[i].type_authorities+" "+response.data.staff.data[i].staff_name+" "+response.data.staff.data[i].staff_position+"</p>" );
                        }
                    }
                }else{
                    $('#model_detail_license_staff').append( "<p style=\"color:Gray;\">"+"-"+"</p>" );
                }
                // https://restfulapi.net/json-array/
                for(let i in response.data.detail){
                    $('#model_detail_license_detail').append( "<p style=\"color:Gray;\">"+response.data.detail[i]+"</p>" );
                }

                // $('#model_detail_license_detail').append( "<p style=\"color:Gray;\">test</p>" );
                // $('#model_detail_license_detail').append( "<p style=\"color:Gray;\">test</p>" );
                // 

                // $('#model_detail_license_companyname').text(response.data.detail.department_name)
                // $('#model_detail_license_companyaddress').text(response.data.detail.company_address)
                
                // $('#model_detail_license_stock_phone').text(response.data.detail.tel)
                // $('#model_detail_license_stock_email').text(response.data.detail.email)
                // $('#model_detail_license_stock_address').text(response.data.detail.address)
            } else {
                
            }
        }
    });
    $("#detail_license").modal('show');
}

$("#confirm_license").click(function(e){
    let license_id = $("#license_id").val()
    let type = "confirm"
    $.ajax({
        type: 'POST',
        url: 'php/php_commit_license.php',
        data: {
            license_id : license_id,
            type : type
        },
        success: function(response) {
            console.log(response)
            response = JSON.parse(response);
            if (response.success) {
                $("#detail_license").modal('hide');
                location.reload();
            } else {
                
            }
        }
    });
})

$("#dismiss_license").click(function(e){
    let license_id = $("#license_id").val()
    let type = "dismiss"
    $.ajax({
        type: 'POST',
        url: 'php/php_commit_license.php',
        data: {
            license_id : license_id,
            type : type
        },
        success: function(response) {
            console.log(response)
            response = JSON.parse(response);
            if (response.success) {
                $("#detail_license").modal('hide');
                location.reload();
            } else {
                
            }
        }
    });
})
$(document).ready(function(){
    $("th.index").each(function(index) {
        $(this).text(++index);
    });
    $("tbody.index").each(function(index) {
        $(this).attr("id",++index);
    });
})