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
    let material_location_chemical = $("#location_materialsix_address").val()+" "+$("#location_materialsix_district").val()+" "+$("#location_materialsix_amphoe").val()+" "+$("#location_materialsix_province").val()+" "+$("#location_materialsix_zipcode").val()
    let location_materialsix_phone = $("#location_materialsix_phone").val()
    let location_materialsix_email = $("#location_materialsix_email").val()

    // สถานที่เก็บรักษาวัสดุที่พ้นสภาพแล้ว
    let material_location = $("#location_not_six").val()+" "+$("#location_district_six").val()+" "+$("#location_amphoe_six").val()+" "+$("#location_province_six").val()+" "+$("#location_zipcode_six").val()
    let location_phone_six = $("#location_phone_six").val()
    let location_email_six = $("#location_email_six").val()

    // step three
    let safe_name = $("#safe_name_six").val()+" "+$("#safe_lname_six").val()
    let safe_idcard_six = $("#safe_idcard_six").val()
    let safe_position_six = $("#safe_position_six").val()
    let safe_age_six = $("#safe_age_six").val()
    let safe_nationality_six = $("#safe_nationality_six").val()
    let safe_phone_six = $("#safe_phone_six").val()
    let safe_email_six = $("#safe_email_six").val()
    let safe_address = $("#safe_houseno_six").val()+" "+$("#safe_villageno_six").val()+" "+$("#safe_alley_six").val()+" "+$("#safe_road_six").val()+" "+$("#safe_subdistrict_six").val()+" "+$("#safe_district_six").val()+" "+$("#safe_province_six").val()+" "+$("#safe_zipcode_six").val()
    let safe_qualification_six = $("#safe_qualification_six").val()
    let safe_number_six = $("#safe_number_six").val()

    let make_name = $("#make_name_six").val()+" "+$("#make_lname_six").val()
    let make_idcard_six = $("#make_idcard_six").val()
    let make_position_six = $("#make_position_six").val()
    let make_age_six = $("#make_age_six").val()
    let make_nationality_six = $("#make_nationality_six").val()
    let make_phone_six = $("#make_phone_six").val()
    let make_email_six = $("#make_email_six").val()
    let make_address = $("#make_houseno_six").val()+" "+$("#make_villageno_six").val()+" "+$("#make_alley_six").val()+" "+$("#make_road_six").val()+" "+$("#make_subdistrict_six").val()+" "+$("#make_district_six").val()+" "+$("#make_province_six").val()+" "+$("#make_zipcode_six").val()
    let make_qualification_six = $("#make_qualification_six").val()
    let make_number_six = $("#make_number_six").val()

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
            make_number_six: make_number_six
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