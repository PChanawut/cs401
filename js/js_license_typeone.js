$("#request").submit(function(e){
    e.preventDefault();
    // material location table
    let material_location = $("#location_materialone_address").val()+""+$("#location_materialone_district").val()+""+$("#location_materialone_amphoe").val()+""+$("#location_materialone_province").val()+""+$("#location_materialone_zipcode").val()
    let location_materialone_phone = $("#location_materialone_phone").val()
    let location_materialone_email = $("#location_materialone_email").val()
    let location_materialone_benefit = $("#location_materialone_benefit").val()
    let location_materialone_request = $("#location_materialone_request").val()

    // material request table
    let material_close = $("#material_close").val()
    let no_reference = $("#no_reference").val()
    let operation_type = $("#operation_type").val()
    let element = $("#element").val()
    let product_model = $("#product_model").val()
    let material_status = $("#material_status").val()
    let manufacturer_material = $("#manufacturer_material").val();
    let material_number = $("#material_number").val()
    let weight_material = $("#weight_material").val()
    let unit_weight = $("#unit_weight").val()
    let manufacturer_container = $("#manufacturer_container").val()
    let material_number_container = $("#material_number_container").val()
    let container_number = $("#container_number").val()
    let weight_container = $("#weight_container").val()
    let unit_container = $("#unit_container").val()
    let locationname_material = $("#locationname_material").val()
    let company_sale = $("#company_sale").val()

    e.preventDefault();
    $.ajax({
        url: 'php/php_license_typeone.php',
        type: 'POST',
        data: {
            material_location: material_location,
            location_materialone_phone: location_materialone_phone,
            location_materialone_email: location_materialone_email,
            location_materialone_benefit: location_materialone_benefit,
            location_materialone_request: location_materialone_request,
            material_close: material_close,
            no_reference: no_reference,
            operation_type: operation_type,
            element: element,
            product_model: product_model,
            material_status: material_status,
            manufacturer_material: manufacturer_material,
            material_number: material_number,
            weight_material: weight_material,
            unit_weight: unit_weight,
            manufacturer_container: manufacturer_container,
            material_number_container: material_number_container,
            container_number: container_number,
            weight_container: weight_container,
            unit_container: unit_container,
            locationname_material: locationname_material,
            company_sale: company_sale
        },
        success: function(response){
            console.log('...');
            response = JSON.parse(response);
            if(response.success == true){
                console.log('Hello if');
            }else{
                console.log('Hello else');
            }
        }
    });
});