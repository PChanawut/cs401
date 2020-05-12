$("#request").submit(function(e){
    e.preventDefault();

    // step one
    let material_location = $("#location_materialseven_address").val()+" "+$("#location_materialseven_district").val()+" "+$("#location_materialseven_amphoe").val()+" "+$("#location_materialseven_province").val()+" "+$("#location_materialseven_zipcode").val()
    let location_materialseven_phone = $("#location_materialseven_phone").val()
    let location_materialseven_email = $("#location_materialseven_email").val()
    let location_materialseven_benefit = $("#location_materialseven_benefit").val()

    // step two
    let no_reference_seven = $("#no_reference_seven").val()
    let operation_type_seven = $("#operation_type_seven").val()
    let manufacturer_material_seven = $("#manufacturer_material_seven").val()
    let material_number_seven = $("#material_number_seven").val()
    let number_xray_seven = $("#number_xray_seven").val()
    let work_style_seven = $("#work_style_seven").val()
    let high_power_kgv = $("#high_power_kgv").val()
    let high_power_mgv = $("#high_power_mgv").val()
    let high_power_mma = $("#high_power_mma").val()
    let locationname_material_seven = $("#locationname_material_seven").val()
    let company_sale_seven = $("#company_sale_seven").val()

    // step three
    // เจ้าหน้าที่ทางเทคนิค
    let safe_name = $("#safe_name_seven").val()+" "+$("#safe_lname_seven").val()
    let safe_idcard_seven = $("#safe_idcard_seven").val()
    let safe_position_seven = $("#safe_position_seven").val()
    let safe_age_seven = $("#safe_age_seven").val()
    let safe_nationality_seven = $("#safe_nationality_seven").val()
    let safe_phone_seven = $("#safe_phone_seven").val()
    let safe_email_seven = $("#safe_email_seven").val()
    let safe_address = $("#safe_houseno_seven").val()+" "+$("#safe_villageno_seven").val()+" "+$("#safe_alley_seven").val()+" "+$("#safe_road_seven").val()+" "+$("#safe_subdistrict_seven").val()+" "+$("#safe_district_seven").val()+" "+$("#safe_province_seven").val()+" "+$("#safe_zipcode_seven").val()
    let safe_qualification_seven = $("#safe_qualification_seven").val()
    let safe_number_seven = $("#safe_number_seven").val()

    // ผู้ปฏิบัติงานทางรังสี
    let make_name = $("#make_name_seven").val()+" "+$("#make_lname_seven").val()
    let make_idcard_seven = $("#make_idcard_seven").val()
    let make_position_seven = $("#make_position_seven").val()
    let make_age_seven = $("#make_age_seven").val()
    let make_nationality_seven = $("#make_nationality_seven").val()
    let make_phone_seven = $("#make_phone_seven").val()
    let make_email_seven = $("#make_email_seven").val()
    let make_address = $("#make_houseno_seven").val()+" "+$("#make_villageno_seven").val()+" "+$("#make_alley_seven").val()+" "+$("#make_road_seven").val()+" "+$("#make_subdistrict_seven").val()+" "+$("#make_district_seven").val()+" "+$("#make_province_seven").val()+" "+$("#make_zipcode_seven").val()
    let make_qualification_seven = $("#make_qualification_seven").val()
    let make_number_seven = $("#make_number_seven").val()

    // แพทย์ผู้รับผิดชอบ
    let doctor_name = $("#doctor_name_seven").val()+" "+$("#doctor_lname_seven").val()
    let doctor_idcard_seven = $("#doctor_idcard_seven").val()
    let doctor_position_seven = $("#doctor_position_seven").val()
    let doctor_age_seven = $("#doctor_age_seven").val()
    let doctor_nationality_seven = $("#doctor_nationality_seven").val()
    let doctor_phone_seven = $("#doctor_phone_seven").val()
    let doctor_email_seven = $("#doctor_email_seven").val()
    let doctor_address = $("#doctor_houseno_seven").val()+" "+$("#doctor_villageno_seven").val()+" "+$("#doctor_alley_seven").val()+" "+$("#doctor_road_seven").val()+" "+$("#doctor_subdistrict_seven").val()+" "+$("#doctor_district_seven").val()+" "+$("#doctor_province_seven").val()+" "+$("#doctor_zipcode_seven").val()
    let doctor_hospital_name_seven = $("#doctor_hospital_name_seven").val()
    let doctor_artlicense_seven = $("#doctor_artlicense_seven").val()
    let doctor_date_start_seven = $("#doctor_date_start_seven").val()

    $.ajax({
        url: 'php/php_license_typeseven.php',
        type: 'POST',
        data: {
            material_location: material_location,
            location_materialseven_phone: location_materialseven_phone,
            location_materialseven_email: location_materialseven_email,
            location_materialseven_benefit: location_materialseven_benefit,
            no_reference_seven: no_reference_seven,
            operation_type_seven: operation_type_seven,
            manufacturer_material_seven: manufacturer_material_seven,
            material_number_seven: material_number_seven,
            number_xray_seven: number_xray_seven,
            work_style_seven: work_style_seven,
            high_power_kgv: high_power_kgv,
            high_power_mgv: high_power_mgv,
            high_power_mma: high_power_mma,
            locationname_material_seven: locationname_material_seven,
            company_sale_seven: company_sale_seven,
            safe_name: safe_name,
            safe_idcard_seven: safe_idcard_seven,
            safe_position_seven: safe_position_seven,
            safe_age_seven: safe_age_seven,
            safe_nationality_seven: safe_nationality_seven,
            safe_phone_seven: safe_phone_seven,
            safe_email_seven: safe_email_seven,
            safe_address: safe_address,
            safe_qualification_seven: safe_qualification_seven,
            safe_number_seven: safe_number_seven,
            make_name: make_name,
            make_idcard_seven: make_idcard_seven,
            make_position_seven: make_position_seven,
            make_age_seven: make_age_seven,
            make_nationality_seven: make_nationality_seven,
            make_phone_seven: make_phone_seven,
            make_email_seven: make_email_seven,
            make_address: make_address,
            make_qualification_seven: make_qualification_seven,
            make_number_seven: make_number_seven,
            doctor_name: doctor_name,
            doctor_idcard_seven: doctor_idcard_seven,
            doctor_position_seven: doctor_position_seven,
            doctor_age_seven: doctor_age_seven,
            doctor_nationality_seven: doctor_nationality_seven,
            doctor_phone_seven: doctor_phone_seven,
            doctor_email_seven: doctor_email_seven,
            doctor_address: doctor_address,
            doctor_hospital_name_seven: doctor_hospital_name_seven,
            doctor_artlicense_seven: doctor_artlicense_seven,
            doctor_date_start_seven: doctor_date_start_seven
        },
        success: function(response){
            response = JSON.parse(response);
            console.log(response);
            if(response.success == true){
                console.log('Hello type seven');
            }else{
                console.log('So sad type seven');
            }
        }
    });
});