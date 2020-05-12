$("#request").submit(function(e){
    e.preventDefault();

    // step one
    let material_objective_four = $("#material_objective_four").val()
    let materialtype_allow_four = $("#materialtype_allow_four").val()
    let type_transport_four = $("#type_transport_four").val()
    let material_area_four = $("#material_area_four").val()
    let material_workname_four = $("#material_workname_four").val()
    let material_nolocation_four = $("#material_nolocation_four").val()
    let material_nobatch_four = $("#material_nobatch_four").val()
    let material_number_four = $("#material_number_four").val()
    let material_detail_four = $("#material_detail_four").val()
    let material_type_four = $("#material_type_four").val()
    let material_weight_four = $("#material_weight_four").val()
    let material_unit_four = $("#material_unit_four").val()
    let material_special_weight_four = $("#material_special_weight_four").val()
    let material_code_ozotope_four = $("#material_code_ozotope_four").val()
    let material_code_work_four = $("#material_code_work_four").val()
    let material_workaddress_four = $("#material_workaddress_four").val()
    let material_benefit_four = $("#material_benefit_four").val()
    let material_special_type_four = $("#material_special_type_four").val()
    let weight_kg_four = $("#weight_kg_four").val()
    let nomaterial_four = $("#nomaterial_four").val()
    let workage_four = $("#workage_four").val()
    let addressname_produce_four = $("#addressname_produce_four").val()
    let addressname_sale_four = $("#addressname_sale_four").val()
    
    // step two
    // ผู้แทนจำหน่ายที่ได้รับมอบหมาย
    let sale_name = $("#sale_name_four").val()+" "+$("#sale_lname_four").val()
    let sale_idcard_four = $("#sale_idcard_four").val()
    let sale_age_four = $("#sale_age_four").val()
    let sale_position_four = $("#sale_position_four").val()
    let sale_nationality_four = $("#sale_nationality_four").val()
    let sale_email_four = $("#sale_email_four").val()
    let sale_phone_four = $("#sale_phone_four").val()
    let sale_work_name_four = $("#sale_work_name_four").val()
    let sale_address = $("#sale_work_houseno_four").val()+" "+$("#sale_work_villageno_four").val()+" "+$("#sale_work_alley_four").val()+" "+$("#sale_work_road_four").val()+" "+$("#sale_work_subdistrict_four").val()+" "+$("#sale_work_district_four").val()+" "+$("#sale_work_province_four").val()+" "+$("#sale_work_zipcode_four").val()

    // ผู้ดำเนินการตามพิธรศุลกากร
    let handler_name = $("#handler_name_four").val()+" "+$("#handler_lname_four").val()
    let handler_idcard_four = $("#handler_idcard_four").val()
    let handler_age_four = $("#handler_age_four").val()
    let handler_position_four = $("#handler_position_four").val()
    let handler_nationality_four = $("#handler_nationality_four").val()
    let handler_email_four = $("#handler_email_four").val()
    let handler_phone_four = $("#handler_phone_four").val()
    let handler_work_name_four = $("#handler_work_name_four").val()
    let handler_address = $("#handler_work_houseno_four").val()+" "+$("#handler_work_villageno_four").val()+" "+$("#handler_work_alley_four").val()+" "+$("#handler_work_road_four").val()+" "+$("#handler_work_subdistrict_four").val()+" "+$("#handler_work_district_four").val()+" "+$("#handler_work_province_four").val()+" "+$("#handler_work_zipcode_four").val()

    // ผู้รับปลายทางนำเข้าหรือส่งออก
    let destination_work_name_four = $("#destination_work_name_four").val()
    let destination_address = $("#destination_work_houseno_four").val()+" "+$("#destination_work_road_four").val()+" "+$("#destination_work_city_four").val()+" "+$("#destination_work_country_four").val()
    let destination_work_phone_four = $("#destination_work_phone_four").val()
    let destination_work_email_four = $("#destination_work_email_four").val()

    // การบรรจุหีบห่อ
    let style_four = $("#style_four").val()
    let styletype_four = $("#styletype_four").val()
    let unnumber_four = $("#unnumber_four").val()

    // สถานที่เก็บรักษานำเข้า
    let import_address = $("#import_material_addrress_four").val()+" "+$("#import_material_district_four").val()+" "+$("#import_material_amphoe_four").val()+" "+$("#import_material_province_four").val()+" "+$("#import_material_zipcode_fourimport_material_zipcode_four").val()
    let import_material_phone_four = $("#import_material_phone_four").val()
    let import_material_email_four = $("#import_material_email_four").val()

    // สถานที่เก็บรักษาส่งออก
    let export_address = $("#export_material_address_four").val()+" "+$("#export_material_district_four").val()+" "+$("#export_material_amphoe_four").val()+" "+$("#export_material_province_four").val()+" "+$("#export_material_zipcode_four").val()
    let export_material_phone_four = $("#export_material_phone_four").val()
    let export_material_email_four = $("#export_material_email_four").val()

    $.ajax({
        url: 'php/php_license_typefour.php',
        type: 'POST',
        data: {
            material_objective_four: material_objective_four,
            materialtype_allow_four: materialtype_allow_four,
            type_transport_four: type_transport_four,
            material_area_four: material_area_four,
            material_workname_four: material_workname_four,
            material_nolocation_four: material_nolocation_four,
            material_nobatch_four: material_nobatch_four,
            material_number_four: material_number_four,
            material_detail_four: material_detail_four,
            material_type_four: material_type_four,
            material_weight_four: material_weight_four,
            material_unit_four: material_unit_four,
            material_special_weight_four: material_special_weight_four,
            material_code_ozotope_four: material_code_ozotope_four,
            material_code_work_four: material_code_work_four,
            material_workaddress_four: material_workaddress_four,
            material_benefit_four: material_benefit_four,
            material_special_type_four: material_special_type_four,
            weight_kg_four: weight_kg_four,
            nomaterial_four: nomaterial_four,
            workage_four: workage_four,
            addressname_produce_four: addressname_produce_four,
            addressname_sale_four: addressname_sale_four,
            sale_name: sale_name,
            sale_idcard_four: sale_idcard_four,
            sale_age_four: sale_age_four,
            sale_position_four: sale_position_four,
            sale_nationality_four: sale_nationality_four,
            sale_email_four: sale_email_four,
            sale_phone_four: sale_phone_four,
            sale_work_name_four: sale_work_name_four,
            sale_address: sale_address,
            handler_name: handler_name,
            handler_idcard_four: handler_idcard_four,
            handler_age_four: handler_age_four,
            handler_position_four: handler_position_four,
            handler_nationality_four: handler_nationality_four,
            handler_email_four: handler_email_four,
            handler_phone_four: handler_phone_four,
            handler_work_name_four: handler_work_name_four,
            handler_address: handler_address,
            destination_work_name_four: destination_work_name_four,
            destination_address: destination_address,
            destination_work_phone_four: destination_work_phone_four,
            destination_work_email_four: destination_work_email_four,
            style_four: style_four,
            styletype_four: styletype_four,
            unnumber_four: unnumber_four,
            import_address: import_address,
            import_material_phone_four: import_material_phone_four,
            import_material_email_four: import_material_email_four,
            export_address: export_address,
            export_material_phone_four: export_material_phone_four,
            export_material_email_four: export_material_email_four
        },
        success: function(response){
            response = JSON.parse(response);
            console.log(response);
            if(response.success == true){
                console.log('Hello type four');
            }else{
                console.log('So sad type four');
            }
        }
    });
});