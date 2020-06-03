// ที่อยู่ของผู้แทนจำหน่าย
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#sale_work_subdistrict_four'),
    $amphoe: $('#sale_work_district_four'),
    $province: $('#sale_work_province_four'),
    $zipcode: $('#sale_work_zipcode_four'),
});
// ที่อยู่ผู้ดำเนินการทางศุลกากร
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#handler_work_subdistrict_four'),
    $amphoe: $('#handler_work_district_four'),
    $province: $('#handler_work_province_four'),
    $zipcode: $('#handler_work_zipcode_four'),
});
// ที่อยู่สถานที่เก็บรักษาวัสดุ
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#import_material_district_four'),
    $amphoe: $('#import_material_amphoe_four'),
    $province: $('#import_material_province_four'),
    $zipcode: $('#import_material_zipcode_four'),
});
// ที่อยู่สถานที่เก็บรักษาขณะรอดำเนินการ
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#export_material_district_four'),
    $amphoe: $('#export_material_amphoe_four'),
    $province: $('#export_material_province_four'),
    $zipcode: $('#export_material_zipcode_four'),
});

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

    let location_material_licenseno_four = $("#location_material_licenseno_four").val()
    let location_material_licensedate_four = $("#location_material_licensedate_four").val()
    let location_material_startlicense_four = $("#location_material_startlicense_four").val()
    
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
    let sale_address = $("#sale_work_houseno_four").val()+","+$("#sale_work_villageno_four").val()+","+$("#sale_work_alley_four").val()+","+$("#sale_work_road_four").val()+","+$("#sale_work_subdistrict_four").val()+","+$("#sale_work_district_four").val()+","+$("#sale_work_province_four").val()+","+$("#sale_work_zipcode_four").val()
    let sale_location_salework_four = "";
    if($("#save_location_salework_four").is(':checked')){
        sale_location_salework_four = "select";
    }else{
        sale_location_salework_four = "not";
    }

    // ผู้ดำเนินการตามพิธรศุลกากร
    let handler_name = $("#handler_name_four").val()+" "+$("#handler_lname_four").val()
    let handler_idcard_four = $("#handler_idcard_four").val()
    let handler_age_four = $("#handler_age_four").val()
    let handler_position_four = $("#handler_position_four").val()
    let handler_nationality_four = $("#handler_nationality_four").val()
    let handler_email_four = $("#handler_email_four").val()
    let handler_phone_four = $("#handler_phone_four").val()
    let handler_work_name_four = $("#handler_work_name_four").val()
    let handler_address = $("#handler_work_houseno_four").val()+","+$("#handler_work_villageno_four").val()+","+$("#handler_work_alley_four").val()+","+$("#handler_work_road_four").val()+","+$("#handler_work_subdistrict_four").val()+","+$("#handler_work_district_four").val()+","+$("#handler_work_province_four").val()+","+$("#handler_work_zipcode_four").val()
    let handler_location_handlerwork_four = "";
    if($("#save_location_handlerwork_four").is(':checked')){
        handler_location_handlerwork_four = "select";
    }else{
        handler_location_handlerwork_four = "not";
    }

    // ผู้รับปลายทางนำเข้าหรือส่งออก
    let destination_work_name_four = $("#destination_work_name_four").val()
    let destination_address = $("#destination_work_houseno_four").val()+","+$("#destination_work_road_four").val()+","+$("#destination_work_city_four").val()+","+$("#destination_work_country_four").val()
    let destination_work_phone_four = $("#destination_work_phone_four").val()
    let destination_work_email_four = $("#destination_work_email_four").val()
    let destination_location_destinationwork_four = "";
    if($("#save_location_destinationwork_four").is(':checked')){
        destination_location_destinationwork_four = "select";
    }else{
        destination_location_destinationwork_four = "not";
    }

    // การบรรจุหีบห่อ
    let style_four = $("#style_four").val()
    let styletype_four = $("#styletype_four").val()
    let unnumber_four = $("#unnumber_four").val()

    // สถานที่เก็บรักษานำเข้า
    let import_address = $("#import_material_addrress_four").val()+","+$("#import_material_district_four").val()+","+$("#import_material_amphoe_four").val()+","+$("#import_material_province_four").val()+","+$("#import_material_zipcode_four").val()
    let import_material_phone_four = $("#import_material_phone_four").val()
    let import_material_email_four = $("#import_material_email_four").val()
    let import_location_four = "";
    if($("#save_location_import_four").is(':checked')){
        import_location_four = "select";
    }else{
        import_location_four = "not";
    }

    // สถานที่เก็บรักษาส่งออก
    let export_address = $("#export_material_address_four").val()+","+$("#export_material_district_four").val()+","+$("#export_material_amphoe_four").val()+","+$("#export_material_province_four").val()+","+$("#export_material_zipcode_four").val()
    let export_material_phone_four = $("#export_material_phone_four").val()
    let export_material_email_four = $("#export_material_email_four").val()
    let export_location_four = "";
    if($("#save_location_export_four").is(':checked')){
        export_location_four = "select";
    }else{
        export_location_four = "not";
    }

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
            location_material_licenseno_four: location_material_licenseno_four,
            location_material_licensedate_four: location_material_licensedate_four,
            location_material_startlicense_four: location_material_startlicense_four,
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
            export_material_email_four: export_material_email_four,
            sale_location_salework_four: sale_location_salework_four,
            handler_location_handlerwork_four: handler_location_handlerwork_four,
            destination_location_destinationwork_four: destination_location_destinationwork_four,
            import_location_four: import_location_four,
            export_location_four: export_location_four
        },
        success: function(response){
            response = JSON.parse(response);
            console.log(response);
            if(response.success == true){
                console.log('Hello type four');
                document.location = 'license_all.php';
            }else{
                console.log('So sad type four');
            }
        }
    });
});

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
                $("#select_fav_salefour").click(function(){
                    $('#show_four_sale').modal('hide')
                    $('#sale_name_four').val(response.name.split(" ")[0])
                    $('#sale_lname_four').val(response.name.split(" ")[1])
                    $('#sale_idcard_four').val(response.idcard)
                    $('#sale_position_four').val(response.position)
                    $('#sale_age_four').val(response.age)
                    $('#sale_nationality_four').val(response.nationality)
                    $('#sale_phone_four').val(response.phone)
                    $('#sale_email_four').val(response.email)
                    $('#sale_work_name_four').val(response.staff_work_name)
                    $('#sale_work_houseno_four').val(response.address.split(",")[0])
                    $('#sale_work_villageno_four').val(response.address.split(",")[1])
                    $('#sale_work_alley_four').val(response.address.split(",")[2])
                    $('#sale_work_road_four').val(response.address.split(",")[3])
                    $('#sale_work_subdistrict_four').val(response.address.split(",")[4])
                    $('#sale_work_district_four').val(response.address.split(",")[5])
                    $('#sale_work_province_four').val(response.address.split(",")[6])
                    $('#sale_work_zipcode_four').val(response.address.split(",")[7])
                });
                $("#select_fav_handlerfour").click(function(){
                    $('#show_four_handler').modal('hide')
                    $('#handler_name_four').val(response.name.split(" ")[0])
                    $('#handler_lname_four').val(response.name.split(" ")[1])
                    $('#handler_idcard_four').val(response.idcard)
                    $('#handler_position_four').val(response.position)
                    $('#handler_age_four').val(response.age)
                    $('#handler_nationality_four').val(response.nationality)
                    $('#handler_phone_four').val(response.phone)
                    $('#handler_email_four').val(response.email)
                    $('#handler_work_name_four').val(response.staff_work_name)
                    $('#handler_work_houseno_four').val(response.address.split(",")[0])
                    $('#handler_work_villageno_four').val(response.address.split(",")[1])
                    $('#handler_work_alley_four').val(response.address.split(",")[2])
                    $('#handler_work_road_four').val(response.address.split(",")[3])
                    $('#handler_work_subdistrict_four').val(response.address.split(",")[4])
                    $('#handler_work_district_four').val(response.address.split(",")[5])
                    $('#handler_work_province_four').val(response.address.split(",")[6])
                    $('#handler_work_zipcode_four').val(response.address.split(",")[7])
                });
                $("#select_fav_destinationfour").click(function(){
                    $('#show_four_destination').modal('hide')
                    $('#destination_work_name_four').val(response.staff_work_name)
                    $('#destination_work_houseno_four').val(response.address.split(",")[0])
                    $('#destination_work_road_four').val(response.address.split(",")[2])
                    $('#destination_work_city_four').val(response.address.split(",")[3])
                    $('#destination_work_country_four').val(response.address.split(",")[4])
                    $('#destination_work_phone_four').val(response.phone)
                    $('#destination_work_email_four').val(response.email)
                });
            }
        }
    });
}

function select_fav(material_id,row_no){
    $.ajax({
        type: 'POST',
        url: 'php/php_favorite_location.php',
        data: {
            material_id: material_id
        },
        success: function(response){
            response = JSON.parse(response);
            console.log(response);
            if(response.success){
                $("#select_fav_import_four").click(function(){
                    $('#show_four_import').modal('hide')
                    $('#import_material_addrress_four').val(response.address.split(",")[0])
                    $('#import_material_district_four').val(response.address.split(",")[1])
                    $('#import_material_amphoe_four').val(response.address.split(",")[2])
                    $('#import_material_province_four').val(response.address.split(",")[3])
                    $('#import_material_zipcode_four').val(response.address.split(",")[4])
                    $('#import_material_phone_four').val(response.phone)
                    $('#import_material_email_four').val(response.email)
                });
                $("#select_fav_export_four").click(function(){
                    $('#show_four_export').modal('hide')
                    $('#export_material_address_four').val(response.address.split(",")[0])
                    $('#export_material_district_four').val(response.address.split(",")[1])
                    $('#export_material_amphoe_four').val(response.address.split(",")[2])
                    $('#export_material_province_four').val(response.address.split(",")[3])
                    $('#export_material_zipcode_four').val(response.address.split(",")[4])
                    $('#export_material_phone_four').val(response.phone)
                    $('#export_material_email_four').val(response.email)
                });
            }
            console.log(material_id);
        }
    });
}