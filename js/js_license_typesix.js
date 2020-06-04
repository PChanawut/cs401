// สถานที่กระทำด้วยประกาใดๆ แก่วัสดุต้นกำลังให้พ้นสภาพ
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#location_materialsix_district'),
    $amphoe: $('#location_materialsix_amphoe'),
    $province: $('#location_materialsix_province'),
    $zipcode: $('#location_materialsix_zipcode'),
});
// สถานที่เก็บรักษาวัสดุที่พ้นสภาพ
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#location_district_six'),
    $amphoe: $('#location_amphoe_six'),
    $province: $('#location_province_six'),
    $zipcode: $('#location_zipcode_six'),
});
// ที่อยู่เจ้าหน้าที่ความปลอดภัยทางรังสี
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#safe_subdistrict_six'),
    $amphoe: $('#safe_district_six'),
    $province: $('#safe_province_six'),
    $zipcode: $('#safe_zipcode_six'),
});
// ที่อยู่ผู้ปฏิบัติงานทางรังสี
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#make_subdistrict_six'),
    $amphoe: $('#make_district_six'),
    $province: $('#make_province_six'),
    $zipcode: $('#make_zipcode_six'),
});

$("#request").submit(function(e){
    e.preventDefault();

    // step one
    let type_benefit_six = $("#type_benefit_six").val();
    let material_special_six = $("#material_special_six").val();
    let material_num_six = $("#material_num_six").val();
    let unit_six = $("#unit_six").val();
    let changeto_six = $("#changeto_six").val();
    let changeto_num_six = $("#changeto_num_six").val();
    let unit_changeto_six = $("#unit_changeto_six").val();

    // step two
    // สถานที่กระทำด้วยประกาใดๆ แก่วัสดุต้นกำลัง
    let material_location_chemical = $("#location_materialsix_address").val()+","+$("#location_materialsix_district").val()+","+$("#location_materialsix_amphoe").val()+","+$("#location_materialsix_province").val()+","+$("#location_materialsix_zipcode").val()
    let location_materialsix_phone = $("#location_materialsix_phone").val()
    let location_materialsix_email = $("#location_materialsix_email").val()
    var materialsix_location = "";
    if($("#materialsix_location").is(':checked')){
        materialsix_location = "select";
    }else{
        materialsix_location = "not";
    }

    // สถานที่เก็บรักษาวัสดุที่พ้นสภาพแล้ว
    let material_location = $("#location_not_six").val()+","+$("#location_district_six").val()+","+$("#location_amphoe_six").val()+","+$("#location_province_six").val()+","+$("#location_zipcode_six").val()
    let location_phone_six = $("#location_phone_six").val()
    let location_email_six = $("#location_email_six").val()
    var materialsix_location_not = "";
    if($("#materialsix_location_not").is(':checked')){
        materialsix_location_not = "select";
    }else{
        materialsix_location_not = "not";
    }

    // step three
    let safe_name = $("#safe_name_six").val()+" "+$("#safe_lname_six").val()
    let safe_idcard_six = $("#safe_idcard_six").val()
    let safe_position_six = $("#safe_position_six").val()
    let safe_age_six = $("#safe_age_six").val()
    let safe_nationality_six = $("#safe_nationality_six").val()
    let safe_phone_six = $("#safe_phone_six").val()
    let safe_email_six = $("#safe_email_six").val()
    let safe_address = $("#safe_houseno_six").val()+","+$("#safe_villageno_six").val()+","+$("#safe_alley_six").val()+","+$("#safe_road_six").val()+","+$("#safe_subdistrict_six").val()+","+$("#safe_district_six").val()+","+$("#safe_province_six").val()+","+$("#safe_zipcode_six").val()
    let safe_qualification_six = $("#safe_qualification_six").val()
    let safe_number_six = $("#safe_number_six").val()
    let safe_selected_six = "";
    if($("#save_safesix").is(':checked')){
        safe_selected_six = "select";
    }else{
        safe_selected_six = "not";
    }

    let make_name = $("#make_name_six").val()+" "+$("#make_lname_six").val()
    let make_idcard_six = $("#make_idcard_six").val()
    let make_position_six = $("#make_position_six").val()
    let make_age_six = $("#make_age_six").val()
    let make_nationality_six = $("#make_nationality_six").val()
    let make_phone_six = $("#make_phone_six").val()
    let make_email_six = $("#make_email_six").val()
    let make_address = $("#make_houseno_six").val()+","+$("#make_villageno_six").val()+","+$("#make_alley_six").val()+","+$("#make_road_six").val()+","+$("#make_subdistrict_six").val()+","+$("#make_district_six").val()+","+$("#make_province_six").val()+","+$("#make_zipcode_six").val()
    let make_qualification_six = $("#make_qualification_six").val()
    let make_number_six = $("#make_number_six").val()
    let make_selected_six = "";
    if($("#save_makesix").is(':checked')){
        make_selected_six = "select";
    }else{
        make_selected_six = "not";
    }

    $.ajax({
        url: 'php/php_license_typesix.php',
        type: 'POST',
        data: {
            type_benefit_six: type_benefit_six,
            material_special_six: material_special_six,
            material_num_six: material_num_six,
            unit_six: unit_six,
            changeto_six: changeto_six,
            changeto_num_six: changeto_num_six,
            unit_changeto_six: unit_changeto_six,
            material_location_chemical: material_location_chemical,
            location_materialsix_phone: location_materialsix_phone,
            location_materialsix_email: location_materialsix_email,
            material_location: material_location,
            location_phone_six: location_phone_six,
            location_email_six: location_email_six,
            safe_name: safe_name,
            safe_idcard_six: safe_idcard_six,
            safe_position_six: safe_position_six,
            safe_age_six: safe_age_six,
            safe_nationality_six: safe_nationality_six,
            safe_phone_six: safe_phone_six,
            safe_email_six: safe_email_six,
            safe_address: safe_address,
            safe_qualification_six: safe_qualification_six,
            safe_number_six: safe_number_six,
            make_name: make_name,
            make_idcard_six: make_idcard_six,
            make_position_six: make_position_six,
            make_age_six: make_age_six,
            make_nationality_six: make_nationality_six,
            make_phone_six: make_phone_six,
            make_email_six: make_email_six,
            make_address: make_address,
            make_qualification_six: make_qualification_six,
            make_number_six: make_number_six,
            materialsix_location: materialsix_location,
            materialsix_location_not: materialsix_location_not,
            safe_selected_six: safe_selected_six,
            make_selected_six: make_selected_six
        }, 
        success: function(response){
            response = JSON.parse(response);
            console.log(response);
            if(response.success == true){
                console.log('Hello type six');
                document.location = 'license_all.php';
            }else{
                console.log('So sad type six');
            }
        }
    });
});

function select_fav(material_id,row_no){
    $.ajax({
        type: 'POST',
        url: 'php/php_favorite_location.php',
        data: {
            material_id: material_id
        },
        success: function(response){
            response = JSON.parse(response);
            if(response.success){
                $("#select_fav_locationchemical").click(function(){
                    $('#show_chemicalsix_location').modal('hide')
                    $('#location_materialsix_address').val(response.address.split(",")[0])
                    $('#location_materialsix_district').val(response.address.split(",")[1])
                    $('#location_materialsix_amphoe').val(response.address.split(",")[2])
                    $('#location_materialsix_province').val(response.address.split(",")[3])
                    $('#location_materialsix_zipcode').val(response.address.split(",")[4])
                    $('#location_materialsix_phone').val(response.phone)
                    $('#location_materialsix_email').val(response.email)
                    // $('#detail_location').show();
                });
                $("#select_fav_locationnot").click(function(){
                    $('#show_notsix_location').modal('hide')
                    $('#location_not_six').val(response.address.split(",")[0])
                    $('#location_district_six').val(response.address.split(",")[1])
                    $('#location_amphoe_six').val(response.address.split(",")[2])
                    $('#location_province_six').val(response.address.split(",")[3])
                    $('#location_zipcode_six').val(response.address.split(",")[4])
                    $('#location_phone_six').val(response.phone)
                    $('#location_email_six').val(response.email)
                    // $('#detail_location').show();
                });
            }
            console.log(material_id);
        }
    });
}

function select_fav_staff(staff_id,row_no){
    $.ajax({
        type: 'POST',
        url: 'php/php_favorite_staff.php',
        data: {
            staff_id: staff_id
        },
        success: function(response){
            response = JSON.parse(response);
            if(response.success){
                $("#select_fav_safesix").click(function(){
                    $('#show_favsix_safe').modal('hide')
                    $('#safe_name_six').val(response.name.split(" ")[0])
                    $('#safe_lname_six').val(response.name.split(" ")[1])
                    $('#safe_idcard_six').val(response.idcard)
                    $('#safe_position_six').val(response.position)
                    $('#safe_age_six').val(response.age)
                    $('#safe_nationality_six').val(response.nationality)
                    $('#safe_phone_six').val(response.phone)
                    $('#safe_email_six').val(response.email)
                    $('#safe_houseno_six').val(response.address.split(",")[0])
                    $('#safe_villageno_six').val(response.address.split(",")[1])
                    $('#safe_alley_six').val(response.address.split(",")[2])
                    $('#safe_road_six').val(response.address.split(",")[3])
                    $('#safe_subdistrict_six').val(response.address.split(",")[4])
                    $('#safe_district_six').val(response.address.split(",")[5])
                    $('#safe_province_six').val(response.address.split(",")[6])
                    $('#safe_zipcode_six').val(response.address.split(",")[7])
                    $('#safe_qualification_six').val(response.qualification)
                    $('#safe_number_six').val(response.no_regis)
                });
                $("#select_fav_makesix").click(function(){
                    $('#show_favsix_make').modal('hide')
                    $('#make_name_six').val(response.name.split(" ")[0])
                    $('#make_lname_six').val(response.name.split(" ")[1])
                    $('#make_idcard_six').val(response.idcard)
                    $('#make_position_six').val(response.position)
                    $('#make_age_six').val(response.age)
                    $('#make_nationality_six').val(response.nationality)
                    $('#make_phone_six').val(response.phone)
                    $('#make_email_six').val(response.email)
                    $('#make_houseno_six').val(response.address.split(",")[0])
                    $('#make_villageno_six').val(response.address.split(",")[1])
                    $('#make_alley_six').val(response.address.split(",")[2])
                    $('#make_road_six').val(response.address.split(",")[3])
                    $('#make_subdistrict_six').val(response.address.split(",")[4])
                    $('#make_district_six').val(response.address.split(",")[5])
                    $('#make_province_six').val(response.address.split(",")[6])
                    $('#make_zipcode_six').val(response.address.split(",")[7])
                    $('#make_qualification_six').val(response.qualification)
                    $('#make_number_six').val(response.no_regis)
                });
            }
            console.log(staff_id);
        }
    });
}