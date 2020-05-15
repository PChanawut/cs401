$("#request").submit(function(e){
    e.preventDefault();
    
    let location_materialfive_request = $("#location_materialfive_request").val()
    let material_location = $("#location_materialfive_address").val()+" "+$("#location_materialfive_district").val()+" "+$("#location_materialfive_amphoe").val()+" "+$("#location_materialfive_province").val()+" "+$("#location_materialfive_zipcode").val()
    let location_materialfive_phone = $("#location_materialfive_phone").val()
    let location_materialfive_email = $("#location_materialfive_email").val()
    let type_equipment_five = $("#type_equipment_five").val()
    let make_heat_five = $("#make_heat_five").val()
    let type_five = $("#type_five").val()
    let name_produce_equipment_five = $("#name_produce_equipment_five").val()
    let country_produce_equipment_five = $("#country_produce_equipment_five").val()

    $.ajax({
        url: 'php/php_license_typefive.php',
        type: 'POST',
        data: {
            location_materialfive_request: location_materialfive_request,
            material_location: material_location,
            location_materialfive_phone: location_materialfive_phone,
            location_materialfive_email: location_materialfive_email,
            type_equipment_five: type_equipment_five,
            make_heat_five: make_heat_five,
            type_five: type_five,
            name_produce_equipment_five: name_produce_equipment_five,
            country_produce_equipment_five: country_produce_equipment_five
        },
        success: function(response){
            response = JSON.parse(response);
            console.log(response);
            if(response.success == true){
                console.log('Hello type five');
                document.location = 'license_all.php';
            }else{
                console.log('So sad type five');
            }
        }
    });
});