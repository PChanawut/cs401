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
    let sale_address = $("#sale_work_houseno").val()+" "+$("#sale_work_villageno").val()+" "+$("#sale_work_alley").val()+" "+$("#sale_work_road").val()+" "+$("#sale_work_subdistrict").val()+" "+$("#sale_work_district").val()+" "+$("#sale_work_province").val()+" "+$("#sale_work_zipcode").val()

    let handler_name = $("#handler_name").val()+" "+$("#handler_lname").val()
    let handler_idcard = $("#handler_idcard").val()
    let handler_age = $("#handler_age").val()
    let handler_position = $("#handler_position").val()
    let handler_nationality = $("#handler_nationality").val()
    let handler_email = $("#handler_email").val()
    let handler_phone = $("#handler_phone").val()
    let handler_work_name = $("#handler_work_name").val()
    let handler_address = $("#handler_work_houseno").val()+" "+$("#handler_work_villageno").val()+" "+$("#handler_work_alley").val()+" "+$("#handler_work_road").val()+" "+$("#handler_work_subdistrict").val()+" "+$("#handler_work_district").val()+" "+$("#handler_work_province").val()+" "+$("#handler_work_zipcode").val()

    let destination_work_name = $("#destination_work_name").val()
    let destination_address = $("#destination_work_houseno").val()+" "+$("#destination_work_road").val()+" "+$("#destination_work_city").val()+" "+$("#destination_work_country").val()
    let destination_work_phone = $("#destination_work_phone").val()
    let destination_work_email = $("#destination_work_email").val()

    // step four
    let import_address = $("#import_material_addrress_two").val()+" "+$("#import_material_district_two").val()+" "+$("#import_material_amphoe_two").val()+" "+$("#import_material_province_two").val()+" "+$("#import_material_zipcode_two").val()
    let import_material_phone_two = $("#import_material_phone_two").val()
    let import_material_email_two = $("#import_material_email_two").val()

    let export_address = $("#export_material_address_two").val()+" "+$("#export_material_district_two").val()+" "+$("#export_material_amphoe_two").val()+" "+$("#export_material_province_two").val()+" "+$("#export_material_zipcode_two").val()
    let export_material_phone_two = $("#export_material_phone_two").val()
    let export_material_email_two = $("#export_material_email_two").val()

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
            selected: selected
        },
        success: function(response){
            response = JSON.parse(response);
            console.log(response);
            if(response.success == true){
                console.log('Hello type two');
                document.location = 'license_last_request.php';
            }else{
                console.log('So sad type two');
            }
            console.log(selected);
        }
    });
});