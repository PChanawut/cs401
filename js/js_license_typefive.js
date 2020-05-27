// ที่อยู่ของสถานที่จัดเก็บ
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#location_materialfive_district'),
    $amphoe: $('#location_materialfive_amphoe'),
    $province: $('#location_materialfive_province'),
    $zipcode: $('#location_materialfive_zipcode'),
});

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
    var selected_five = "";
    if($("#save_locationfive_stepone").is(':checked')){
        selected_five = "select";
    }else{
        selected_five = "not";
    }

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
            country_produce_equipment_five: country_produce_equipment_five,
            selected_five: selected_five
        },
        success: function(response){
            console.log(response)
            response = JSON.parse(response);
            console.log(response);
            if(response.success == true){
                console.log('Hello type five');
                document.location = 'license_last_request.php';
            }else{
                console.log('So sad type five');
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
                    $("#select_fav_location").click(function(){
                        $('#show_favfive_location').modal('hide')
                        $('#location_materialfive_address').val(response.address.split(" ")[0]+" "+response.address.split(" ")[1])
                        $('#location_materialfive_district').val(response.address.split(" ")[2])
                        $('#location_materialfive_amphoe').val(response.address.split(" ")[3])
                        $('#location_materialfive_province').val(response.address.split(" ")[4])
                        $('#location_materialfive_zipcode').val(response.address.split(" ")[5])
                        $('#location_materialfive_phone').val(response.phone)
                        $('#location_materialfive_email').val(response.email)
                        // $('#detail_location').show();
                    });
                }
                console.log(material_id);
            }
        });
}