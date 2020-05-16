$("#request").submit(function(e){
    e.preventDefault();

    // step one
    let material_location = $("#location_material_address_three").val()+" "+$("#location_material_district_three").val()+" "+$("#location_material_amphoe_three").val()+" "+$("#location_material_province_three").val()+" "+$("#location_material_zipcode_three").val()
    let location_material_phone_three = $("#location_material_phone_three").val()
    let location_material_email_three = $("#location_material_email_three").val()
    let location_material_benefit_three = $("#location_material_benefit_three").val()
    let location_material_request_three = $("#location_material_request_three").val()

    var selected = $("input[name='material_selected']:checked").val()

    // step two -- first
    let material_area_three = $("#material_area_three").val()
    let material_workname_three = $("#material_workname_three").val()
    let material_specialtype_three = $("#material_specialtype_three").val()
    let material_nolocation_three = $("#material_nolocation_three").val()
    let material_nobatch_three = $("#material_nobatch_three").val()
    let material_number_three = $("#material_number_three").val()
    let material_detail_three = $("#material_detail_three").val()
    let material_type_three = $("#material_type_three").val()
    let material_weight_three = $("#material_weight_three").val()
    let material_unit_three = $("#material_unit_three").val()
    let material_special_weight_three = $("#material_special_weight_three").val()
    let material_code_ozotope_three = $("#material_code_ozotope_three").val()

    // step two -- second
    let material_code_work_three = $("#material_code_work_three").val()
    let material_workaddress_three = $("#material_workaddress_three").val()
    let material_benefit_three = $("#material_benefit_three").val()
    let material_special_type_three = $("#material_special_type_three").val()
    let weight_kg_three = $("#weight_kg_three").val()
    let nomaterial_three = $("#nomaterial_three").val()
    let workage_three = $("#workage_three").val()
    let addressname_produce_three = $("#addressname_produce_three").val()
    let addressname_sale_three = $("#addressname_sale_three").val()

    // step three
    // เจ้าหน้าที่ความปลอดภัยทางรังสี
    let safe_name = $("#safe_name_three").val()+" "+$("#safe_lname_three").val()
    let safe_idcard_three = $("#safe_idcard_three").val()
    let safe_position_three = $("#safe_position_three").val()
    let safe_age_three = $("#safe_age_three").val()
    let safe_nationality_three = $("#safe_nationality_three").val()
    let safe_phone_three = $("#safe_phone_three").val()
    let safe_email_three = $("#safe_email_three").val()
    let safe_address = $("#safe_houseno_three").val()+" "+$("#safe_villageno_three").val()+" "+$("#safe_alley_three").val()+" "+$("#safe_road_three").val()+" "+$("#safe_subdistrict_three").val()+" "+$("#safe_district_three").val()+" "+$("#safe_province_three").val()+" "+$("#safe_zipcode_three").val()
    let safe_qualification_three = $("#safe_qualification_three").val()
    let safe_number_three = $("#safe_number_three").val()

    // ผู้ปฏิบัติงานรังสี
    let make_name = $("#make_name_three").val()+" "+$("#make_lname_three").val()
    let make_idcard_three = $("#make_idcard_three").val()
    let make_position_three = $("#make_position_three").val()
    let make_age_three = $("#make_age_three").val()
    let make_nationality_three = $("#make_nationality_three").val()
    let make_phone_three = $("#make_phone_three").val()
    let make_email_three = $("#make_email_three").val()
    let make_address = $("#make_houseno_three").val()+" "+$("#make_villageno_three").val()+" "+$("#make_alley_three").val()+" "+$("#make_road_three").val()+" "+$("#make_subdistrict_three").val()+" "+$("#make_district_three").val()+" "+$("#make_province_three").val()+" "+$("#make_zipcode_three").val()
    let make_qualification_three = $("#make_qualification_three").val()
    let make_number_three = $("#make_number_three").val()

    // แพทย์ผู้รับผิดชอบ
    let doctor_name = $("#doctor_name_three").val()+" "+$("#doctor_lname_three").val()
    let doctor_idcard_three = $("#doctor_idcard_three").val()
    let doctor_position_three = $("#doctor_position_three").val()
    let doctor_age_three = $("#doctor_age_three").val()
    let doctor_nationality_three = $("#doctor_nationality_three").val()
    let doctor_phone_three = $("#doctor_phone_three").val()
    let doctor_email_three = $("#doctor_email_three").val()
    let doctor_address = $("#doctor_houseno_three").val()+" "+$("#doctor_villageno_three").val()+" "+$("#doctor_alley_three").val()+" "+$("#doctor_road_three").val()+" "+$("#doctor_subdistrict_three").val()+" "+$("#doctor_district_three").val()+" "+$("#doctor_province_three").val()+" "+$("#doctor_zipcode_three").val()
    let doctor_hospital_name_three = $("#doctor_hospital_name_three").val()
    let doctor_artlicense_three = $("#doctor_artlicense_three").val()
    let doctor_date_start_three = $("#doctor_date_start_three").val()

    $.ajax({
        url: 'php/php_license_typethree.php',
        type: 'POST',
        data: {
            material_location: material_location,
            location_material_phone_three: location_material_phone_three,
            location_material_email_three: location_material_email_three,
            location_material_benefit_three: location_material_benefit_three,
            location_material_request_three: location_material_request_three,
            material_area_three: material_area_three,
            material_workname_three: material_workname_three,
            material_specialtype_three: material_specialtype_three,
            material_nolocation_three: material_nolocation_three,
            material_nobatch_three: material_nobatch_three,
            material_number_three: material_number_three,
            material_detail_three: material_detail_three,
            material_type_three: material_type_three,
            material_weight_three: material_weight_three,
            material_unit_three: material_unit_three,
            material_special_weight_three: material_special_weight_three,
            material_code_ozotope_three: material_code_ozotope_three,
            material_code_work_three: material_code_work_three,
            material_workaddress_three: material_workaddress_three,
            material_benefit_three: material_benefit_three,
            material_special_type_three: material_special_type_three,
            weight_kg_three: weight_kg_three,
            nomaterial_three: nomaterial_three,
            workage_three: workage_three,
            addressname_produce_three: addressname_produce_three,
            addressname_sale_three: addressname_sale_three,
            safe_name: safe_name,
            safe_idcard_three: safe_idcard_three,
            safe_position_three: safe_position_three,
            safe_age_three: safe_age_three,
            safe_nationality_three: safe_nationality_three,
            safe_phone_three: safe_phone_three,
            safe_email_three: safe_email_three,
            safe_address: safe_address,
            safe_qualification_three: safe_qualification_three,
            safe_number_three: safe_number_three,
            make_name: make_name,
            make_idcard_three: make_idcard_three,
            make_position_three: make_position_three,
            make_age_three: make_age_three,
            make_nationality_three: make_nationality_three,
            make_phone_three: make_phone_three,
            make_email_three: make_email_three,
            make_address: make_address,
            make_qualification_three: make_qualification_three,
            make_number_three: make_number_three,
            doctor_name: doctor_name,
            doctor_idcard_three: doctor_idcard_three,
            doctor_position_three: doctor_position_three,
            doctor_age_three: doctor_age_three,
            doctor_nationality_three: doctor_nationality_three,
            doctor_phone_three: doctor_phone_three,
            doctor_email_three: doctor_email_three,
            doctor_address: doctor_address,
            doctor_hospital_name_three: doctor_hospital_name_three,
            doctor_artlicense_three: doctor_artlicense_three,
            doctor_date_start_three: doctor_date_start_three,
            selected: selected
        },
        success: function(response){
            response = JSON.parse(response);
            console.log(response);
            if(response.success == true){
                console.log('Hello type three');
                document.location = 'license_all.php';
            }else{
                console.log('So sad type three');
            }
            // console.log(selected);
        }
    });
});