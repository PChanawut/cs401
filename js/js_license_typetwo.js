// ที่อยู่ของสถานที่จัดเก็บ
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#location_materialtwo_district'),
    $amphoe: $('#location_materialtwo_amphoe'),
    $province: $('#location_materialtwo_province'),
    $zipcode: $('#location_materialtwo_zipcode'),
});
// ที่อยู่ผู้แทนจำหน่าย
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#sale_work_subdistrict'),
    $amphoe: $('#sale_work_district'),
    $province: $('#sale_work_province'),
    $zipcode: $('#sale_work_zipcode'),
});
// ที่อยู่ผู้ดำเนินการตามพิธีศุลกากร
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#handler_work_subdistrict'),
    $amphoe: $('#handler_work_district'),
    $province: $('#handler_work_province'),
    $zipcode: $('#handler_work_zipcode'),
});
// ที่อยู่สถานที่เก็บรักษาวัสดุพลอยได้
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#import_material_district_two'),
    $amphoe: $('#import_material_amphoe_two'),
    $province: $('#import_material_province_two'),
    $zipcode: $('#import_material_zipcode_two'),
});
// ที่อยู่สถานที่เก็บรักษาวัสดุพลอยได้ขณะรอดำเนินการ
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#export_material_district_two'),
    $amphoe: $('#export_material_amphoe_two'),
    $province: $('#export_material_province_two'),
    $zipcode: $('#export_material_zipcode_two'),
});

$("#request").submit(function(e){
    e.preventDefault();

    // step one
    let type_request = $("#type_request").val()
    let location_address = $("#location_materialtwo_address").val()+" "+$("#location_materialtwo_district").val()+" "+$("#location_materialtwo_amphoe").val()+" "+$("#location_materialtwo_province").val()+" "+$("#location_materialtwo_zipcode").val()
    let location_materialtwo_phone = $("#location_materialtwo_phone").val()
    let location_materialtwo_email = $("#location_materialtwo_email").val()
    let location_materialtwo_benefit = $("#location_materialtwo_benefit").val()
    let location_materialtwo_vehicle = $("#location_materialtwo_vehicle").val()

    let location_materialtwo_licenseno = $("#location_materialtwo_licenseno").val()
    let location_materialtwo_licensedate = $("#location_materialtwo_licensedate").val()
    let location_materialtwo_startlicense = $("#location_materialtwo_startlicense").val()
    let selected_two = "";
    if($("#save_locationtwo_stepone").is(':checked')){
        selected_two = "select";
    }else{
        selected_two = "not";
    }

    var selected = $("input[name='material_selected']:checked").val()

    // step two
    let no_reference_two = $("#no_reference_two").val()
    let operation_type_two = $("#operation_type_two").val()
    let element_two = $("#element_two").val()
    let product_model_two = $("#product_model_two").val()
    let material_status_two = $("#material_status_two").val()
    let manufacturer_material_two = $("#manufacturer_material_two").val()
    let material_number_two = $("#material_number_two").val()
    let weight_material_two = $("#weight_material_two").val()
    let unit_weight_two = $("#unit_weight_two").val()
    let manufacturer_container_two = $("#manufacturer_container_two").val()
    let material_number_container_two = $("#material_number_container_two").val()
    let container_number_two = $("#container_number_two").val()
    let weight_container_two = $("#weight_container_two").val()
    let unit_container_two = $("#unit_container_two").val()
    let locationname_material_two = $("#locationname_material_two").val()
    let company_sale_two = $("#company_sale_two").val()

    let open_no_reference_two = $("#open_no_reference_two").val()
    let open_operation_type_two = $("#open_operation_type_two").val()
    let open_element_two = $("#open_element_two").val()
    let open_product_model_two = $("#open_product_model_two").val()
    let open_material_status_two = $("#open_material_status_two").val()
    let open_manufacturer_material_two = $("#open_manufacturer_material_two").val()
    let open_weight_material = $("#open_weight_material").val()
    let open_unit_weight_two = $("#open_unit_weight_two").val()
    let open_physical_properties_two = $("#open_physical_properties_two").val()
    let open_locationname_material_two = $("#open_locationname_material_two").val()
    let open_company_sale_two = $("#open_company_sale_two").val()

    // การบรรจุหีบห่อ
    let style_two = $("#style_two").val()
    let styletype_two = $("#styletype_two").val()
    let unnumber_two = $("#unnumber_two").val()

    // step three
    let sale_name = $("#sale_name").val()+" "+$("#sale_lname").val()
    let sale_idcard = $("#sale_idcard").val()
    let sale_age = $("#sale_age").val()
    let sale_position = $("#sale_position").val()
    let sale_nationality = $("#sale_nationality").val()
    let sale_email = $("#sale_email").val()
    let sale_phone = $("#sale_phone").val()
    let sale_work_name = $("#sale_work_name").val()
    let sale_address = $("#sale_work_houseno").val()+" ม."+$("#sale_work_villageno").val()+" "+$("#sale_work_alley").val()+" "+$("#sale_work_road").val()+" ต."+$("#sale_work_subdistrict").val()+" อ."+$("#sale_work_district").val()+" จ."+$("#sale_work_province").val()+" "+$("#sale_work_zipcode").val()
    let sale_location_salework_two = "";
    if($("#save_location_salework_two").is(':checked')){
        sale_location_salework_two = "select";
    }else{
        sale_location_salework_two = "not";
    }

    let handler_name = $("#handler_name").val()+" "+$("#handler_lname").val()
    let handler_idcard = $("#handler_idcard").val()
    let handler_age = $("#handler_age").val()
    let handler_position = $("#handler_position").val()
    let handler_nationality = $("#handler_nationality").val()
    let handler_email = $("#handler_email").val()
    let handler_phone = $("#handler_phone").val()
    let handler_work_name = $("#handler_work_name").val()
    let handler_address = $("#handler_work_houseno").val()+" ต."+$("#handler_work_villageno").val()+" "+$("#handler_work_alley").val()+" "+$("#handler_work_road").val()+" ต."+$("#handler_work_subdistrict").val()+" อ."+$("#handler_work_district").val()+" จ."+$("#handler_work_province").val()+" "+$("#handler_work_zipcode").val()
    let handler_location_handlerwork_two = "";
    if($("#save_location_handlerwork_two").is(':checked')){
        handler_location_handlerwork_two = "select";
    }else{
        handler_location_handlerwork_two = "not";
    }

    let destination_work_name = $("#destination_work_name").val()
    let destination_address = $("#destination_work_houseno").val()+" "+$("#destination_work_road").val()+" "+$("#destination_work_city").val()+" "+$("#destination_work_country").val()
    let destination_work_phone = $("#destination_work_phone").val()
    let destination_work_email = $("#destination_work_email").val()
    let destination_location_destinationwork_two = "";
    if($("#save_location_destinationwork_two").is(':checked')){
        destination_location_destinationwork_two = "select";
    }else{
        destination_location_destinationwork_two = "not";
    }

    // step four
    let import_address = $("#import_material_addrress_two").val()+" "+$("#import_material_district_two").val()+" "+$("#import_material_amphoe_two").val()+" "+$("#import_material_province_two").val()+" "+$("#import_material_zipcode_two").val()
    let import_material_phone_two = $("#import_material_phone_two").val()
    let import_material_email_two = $("#import_material_email_two").val()
    let import_location_two = "";
    if($("#save_location_import_two").is(':checked')){
        import_location_two = "select";
    }else{
        import_location_two = "not";
    }

    let export_address = $("#export_material_address_two").val()+" "+$("#export_material_district_two").val()+" "+$("#export_material_amphoe_two").val()+" "+$("#export_material_province_two").val()+" "+$("#export_material_zipcode_two").val()
    let export_material_phone_two = $("#export_material_phone_two").val()
    let export_material_email_two = $("#export_material_email_two").val()
    let export_location_two = "";
    if($("#save_location_export_two").is(':checked')){
        export_location_two = "select";
    }else{
        export_location_two = "not";
    }

    $.ajax({
        url: 'php/php_license_typetwo.php',
        type: 'POST',
        data: {
            type_request: type_request,
            location_address: location_address,
            location_materialtwo_phone: location_materialtwo_phone,
            location_materialtwo_email: location_materialtwo_email,
            location_materialtwo_benefit: location_materialtwo_benefit,
            location_materialtwo_vehicle: location_materialtwo_vehicle,
            location_materialtwo_licenseno: location_materialtwo_licenseno,
            location_materialtwo_licensedate: location_materialtwo_licensedate,
            location_materialtwo_startlicense: location_materialtwo_startlicense,
            no_reference_two: no_reference_two,
            operation_type_two: operation_type_two,
            element_two: element_two,
            product_model_two: product_model_two,
            material_status_two: material_status_two,
            manufacturer_material_two: manufacturer_material_two,
            material_number_two: material_number_two,
            weight_material_two: weight_material_two,
            unit_weight_two: unit_weight_two,
            manufacturer_container_two: manufacturer_container_two,
            material_number_container_two: material_number_container_two,
            container_number_two: container_number_two,
            weight_container_two: weight_container_two,
            unit_container_two: unit_container_two,
            locationname_material_two: locationname_material_two,
            company_sale_two: company_sale_two,
            open_no_reference_two: open_no_reference_two,
            open_operation_type_two: open_operation_type_two,
            open_element_two: open_element_two,
            open_product_model_two: open_product_model_two,
            open_material_status_two: open_material_status_two,
            open_manufacturer_material_two: open_manufacturer_material_two,
            open_weight_material: open_weight_material,
            open_unit_weight_two: open_unit_weight_two,
            open_physical_properties_two: open_physical_properties_two,
            open_locationname_material_two: open_locationname_material_two,
            open_company_sale_two: open_company_sale_two,
            style_two: style_two,
            styletype_two: styletype_two,
            unnumber_two: unnumber_two,
            sale_name: sale_name,
            sale_idcard: sale_idcard,
            sale_age: sale_age,
            sale_position: sale_position,
            sale_nationality: sale_nationality,
            sale_email: sale_email,
            sale_phone: sale_phone,
            sale_work_name: sale_work_name,
            sale_address: sale_address,
            handler_name: handler_name,
            handler_idcard: handler_idcard,
            handler_age: handler_age,
            handler_position: handler_position,
            handler_nationality: handler_nationality,
            handler_email: handler_email,
            handler_phone: handler_phone,
            handler_work_name: handler_work_name,
            handler_address: handler_address,
            destination_work_name: destination_work_name,
            destination_address: destination_address,
            destination_work_phone: destination_work_phone,
            destination_work_email: destination_work_email,
            import_address: import_address,
            import_material_phone_two: import_material_phone_two,
            import_material_email_two: import_material_email_two,
            export_address: export_address,
            export_material_phone_two: export_material_phone_two,
            export_material_email_two: export_material_email_two,
            selected: selected,
            selected_two: selected_two,
            sale_location_salework_two: sale_location_salework_two,
            handler_location_handlerwork_two: handler_location_handlerwork_two,
            destination_location_destinationwork_two: destination_location_destinationwork_two,
            import_location_two: import_location_two,
            export_location_two: export_location_two
        },
        success: function(response){
            response = JSON.parse(response);
            console.log(response);
            if(response.success == true){
                console.log('Hello type two');
                document.location = 'license_all.php';
            }else{
                console.log('So sad type two');
            }
            console.log(selected);
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
                $("#select_fav_location").click(function(){
                    $('#show_favtwo_location').modal('hide')
                    $('#location_materialtwo_address').val(response.address.split(" ")[0]+" "+response.address.split(" ")[1])
                    $('#location_materialtwo_district').val(response.address.split(" ")[2])
                    $('#location_materialtwo_amphoe').val(response.address.split(" ")[3])
                    $('#location_materialtwo_province').val(response.address.split(" ")[4])
                    $('#location_materialtwo_zipcode').val(response.address.split(" ")[5])
                    $('#location_materialtwo_phone').val(response.phone)
                    $('#location_materialtwo_email').val(response.email)
                    // $('#detail_location').show();
                });
                $("#select_fav_import_two").click(function(){
                    $('#show_two_import').modal('hide')
                    $('#import_material_addrress_two').val(response.address.split(" ")[0]+" "+response.address.split(" ")[1])
                    $('#import_material_district_two').val(response.address.split(" ")[2])
                    $('#import_material_amphoe_two').val(response.address.split(" ")[3])
                    $('#import_material_province_two').val(response.address.split(" ")[4])
                    $('#import_material_zipcode_two').val(response.address.split(" ")[5])
                    $('#import_material_phone_two').val(response.phone)
                    $('#import_material_email_two').val(response.email)
                });
                $("#select_fav_export_two").click(function(){
                    $('#show_two_export').modal('hide')
                    $('#export_material_address_two').val(response.address.split(" ")[0]+" "+response.address.split(" ")[1])
                    $('#export_material_district_two').val(response.address.split(" ")[2])
                    $('#export_material_amphoe_two').val(response.address.split(" ")[3])
                    $('#export_material_province_two').val(response.address.split(" ")[4])
                    $('#export_material_zipcode_two').val(response.address.split(" ")[5])
                    $('#export_material_phone_two').val(response.phone)
                    $('#export_material_email_two').val(response.email)
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
                $("#select_fav_saletwo").click(function(){
                    $('#show_two_sale').modal('hide')
                    $('#sale_name').val(response.name.split(" ")[0])
                    $('#sale_lname').val(response.name.split(" ")[1])
                    $('#sale_idcard').val(response.idcard)
                    $('#sale_position').val(response.position)
                    $('#sale_age').val(response.age)
                    $('#sale_nationality').val(response.nationality)
                    $('#sale_phone').val(response.phone)
                    $('#sale_email').val(response.email)
                    $('#sale_work_name').val(response.staff_work_name)
                    $('#sale_work_houseno').val(response.address.split(" ")[0])
                    $('#sale_work_villageno').val(response.address.split(" ")[1])
                    $('#sale_work_alley').val(response.address.split(" ")[2])
                    $('#sale_work_road').val(response.address.split(" ")[3])
                    $('#sale_work_subdistrict').val(response.address.split(" ")[4])
                    $('#sale_work_district').val(response.address.split(" ")[5])
                    $('#sale_work_province').val(response.address.split(" ")[6])
                    $('#sale_work_zipcode').val(response.address.split(" ")[7])
                });
                $("#select_fav_handlertwo").click(function(){
                    $('#show_two_handler').modal('hide')
                    $('#handler_name').val(response.name.split(" ")[0])
                    $('#handler_lname').val(response.name.split(" ")[1])
                    $('#handler_idcard').val(response.idcard)
                    $('#handler_position').val(response.position)
                    $('#handler_age').val(response.age)
                    $('#handler_nationality').val(response.nationality)
                    $('#handler_phone').val(response.phone)
                    $('#handler_email').val(response.email)
                    $('#handler_work_name').val(response.staff_work_name)
                    $('#handler_work_houseno').val(response.address.split(" ")[0])
                    $('#handler_work_villageno').val(response.address.split(" ")[1])
                    $('#handler_work_alley').val(response.address.split(" ")[2])
                    $('#handler_work_road').val(response.address.split(" ")[3])
                    $('#handler_work_subdistrict').val(response.address.split(" ")[4])
                    $('#handler_work_district').val(response.address.split(" ")[5])
                    $('#handler_work_province').val(response.address.split(" ")[6])
                    $('#handler_work_zipcode').val(response.address.split(" ")[7])
                });
                $("#select_fav_destinationtwo").click(function(){
                    $('#show_two_destination').modal('hide')
                    $('#destination_work_name').val(response.staff_work_name)
                    $('#destination_work_houseno').val(response.address.split(" ")[0])
                    $('#destination_work_road').val(response.address.split(" ")[2])
                    $('#destination_work_city').val(response.address.split(" ")[3])
                    $('#destination_work_country').val(response.address.split(" ")[4])
                    $('#destination_work_phone').val(response.phone)
                    $('#destination_work_email').val(response.email)
                });
            }
        }
    });
}