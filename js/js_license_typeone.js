// ที่อยู่ของสถานที่จัดเก็บ
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#location_materialone_district'),
    $amphoe: $('#location_materialone_amphoe'),
    $province: $('#location_materialone_province'),
    $zipcode: $('#location_materialone_zipcode'),
});
// ที่อยู่ของเจ้าหน้าที่ความปลอดภัยทางรังสี
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#safe_subdistrict'),
    $amphoe: $('#safe_district'),
    $province: $('#safe_province'),
    $zipcode: $('#safe_zipcode'),
});
// ที่อยู่ของผู้ปฎิบัติงานรังสี
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#make_subdistrict'),
    $amphoe: $('#make_district'),
    $province: $('#make_province'),
    $zipcode: $('#make_zipcode'),
});
// ที่อยู่ของแพทย์ผู้รับผิดชอบ
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#doctor_subdistrict'),
    $amphoe: $('#doctor_district'),
    $province: $('#doctor_province'),
    $zipcode: $('#doctor_zipcode'),
});

$("#request").submit(function(e){
    e.preventDefault();
    // step one
    let material_location = $("#location_materialone_address").val()+","+$("#location_materialone_district").val()+","+$("#location_materialone_amphoe").val()+","+$("#location_materialone_province").val()+","+$("#location_materialone_zipcode").val()
    let location_materialone_phone = $("#location_materialone_phone").val()
    let location_materialone_email = $("#location_materialone_email").val()
    let location_materialone_benefit = $("#location_materialone_benefit").val()
    let location_materialone_request = $("#location_materialone_request").val()
    let selected_one = "";
    if($("#save_locationone_stepone").is(':checked')){
        selected_one = "select";
    }else{
        selected_one = "not";
    }

    var selected = $("input[name='material_selected']:checked").val()

    // step two
    let no_reference = $("#no_reference").val()
    let operation_type = $("#operation_type").val()
    let element = $("#element").val()
    let product_model = $("#product_model").val()
    let material_status = $("#material_status").val()
    let manufacturer_material = $("#manufacturer_material").val()
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

    let open_no_reference = $("#open_no_reference").val()
    let open_operation_type = $("#open_operation_type").val()
    let open_element = $("#open_element").val()
    let open_product_model = $("#open_product_model").val()
    let open_material_status = $("#open_material_status").val()
    let open_manufacturer_material = $("#open_manufacturer_material").val()
    let open_weight_material = $("#open_weight_material").val()
    let open_unit_weight = $("#open_unit_weight").val()
    let open_physical_properties = $("#open_physical_properties").val()
    let open_locationname_material = $("#open_locationname_material").val()
    let open_company_sale = $("#open_company_sale").val()

    // เจ้าหน้าที่ความปลอดภัยทางรังสี
    let safe_name = $("#safe_name").val()+" "+$("#safe_lname").val()
    let safe_idcard = $("#safe_idcard").val()
    let safe_position = $("#safe_position").val()
    let safe_age = $("#safe_age").val()
    let safe_nationality = $("#safe_nationality").val()
    let safe_phone = $("#safe_phone").val()
    let safe_email = $("#safe_email").val()
    let safe_address = $("#safe_houseno").val()+","+$("#safe_villageno").val()+","+$("#safe_alley").val()+","+$("#safe_road").val()+","+$("#safe_subdistrict").val()+","+$("#safe_district").val()+","+$("#safe_province").val()+","+$("#safe_zipcode").val()
    let safe_qualification = $("#safe_qualification").val()
    let safe_number = $("#safe_number").val()
    let safe_selected_one = "";
    if($("#save_safeone").is(':checked')){
        safe_selected_one = "select";
    }else{
        safe_selected_one = "not";
    }

    // ผู้ปฏิบัติงานทางรังสี
    let make_name = $("#make_name").val()+" "+$("#make_lname").val()
    let make_idcard = $("#make_idcard").val()
    let make_position = $("#make_position").val()
    let make_age = $("#make_age").val()
    let make_nationality = $("#make_nationality").val()
    let make_phone = $("#make_phone").val()
    let make_email = $("#make_email").val()
    let make_address = $("#make_houseno").val()+","+$("#make_villageno").val()+","+$("#make_alley").val()+","+$("#make_road").val()+","+$("#make_subdistrict").val()+","+$("#make_district").val()+","+$("#make_province").val()+","+$("#make_zipcode").val()
    let make_qualification = $("#make_qualification").val()
    let make_number = $("#make_number").val()
    let make_selected_one = "";
    if($("#save_makeone").is(':checked')){
        make_selected_one = "select";
    }else{
        make_selected_one = "not";
    }

    // แพทย์ผู้รับผิดชอบ
    let doctor_name = $("#doctor_name").val()+" "+$("#doctor_lname").val()
    let doctor_idcard = $("#doctor_idcard").val()
    let doctor_position = $("#doctor_position").val()
    let doctor_age = $("#doctor_age").val()
    let doctor_nationality = $("#doctor_nationality").val()
    let doctor_phone = $("#doctor_phone").val()
    let doctor_email = $("#doctor_email").val()
    let doctor_address =$("#doctor_houseno").val()+","+$("#doctor_villageno").val()+","+$("#doctor_alley").val()+","+$("#doctor_road").val()+","+$("#doctor_subdistrict").val()+","+$("#doctor_district").val()+","+$("#doctor_province").val()+","+$("#doctor_zipcode").val()
    let doctor_hospital_name = $("#doctor_hospital_name").val()
    let doctor_artlicense = $("#doctor_artlicense").val()
    let doctor_date_start = $("#doctor_date_start").val()
    let doctor_selected_one = "";
    if($("#save_doctorone").is(':checked')){
        doctor_selected_one = "select";
    }else{
        doctor_selected_one = "not";
    }

    $.ajax({
        url: 'php/php_license_typeone.php',
        type: 'POST',
        data: {
            material_location: material_location,
            location_materialone_phone: location_materialone_phone,
            location_materialone_email: location_materialone_email,
            location_materialone_benefit: location_materialone_benefit,
            location_materialone_request: location_materialone_request,
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
            company_sale: company_sale,
            open_no_reference: open_no_reference,
            open_operation_type: open_operation_type,
            open_element: open_element,
            open_product_model: open_product_model,
            open_material_status: open_material_status,
            open_manufacturer_material: open_manufacturer_material,
            open_weight_material: open_weight_material,
            open_unit_weight: open_unit_weight,
            open_physical_properties: open_physical_properties,
            open_locationname_material: open_locationname_material,
            open_company_sale: open_company_sale,
            safe_name: safe_name,
            safe_idcard: safe_idcard,
            safe_position: safe_position,
            safe_age: safe_age,
            safe_nationality: safe_nationality,
            safe_phone: safe_phone,
            safe_email: safe_email,
            safe_address: safe_address,
            safe_qualification: safe_qualification,
            safe_number: safe_number,
            make_name: make_name,
            make_idcard: make_idcard,
            make_position: make_position,
            make_age: make_age,
            make_nationality: make_nationality,
            make_phone: make_phone,
            make_email: make_email,
            make_address: make_address,
            make_qualification: make_qualification,
            make_number: make_number,
            doctor_name: doctor_name,
            doctor_idcard: doctor_idcard,
            doctor_position: doctor_position,
            doctor_age: doctor_age,
            doctor_nationality: doctor_nationality,
            doctor_phone: doctor_phone,
            doctor_email: doctor_email,
            doctor_address: doctor_address,
            doctor_hospital_name: doctor_hospital_name,
            doctor_artlicense: doctor_artlicense,
            doctor_date_start: doctor_date_start,
            selected: selected,
            selected_one: selected_one,
            safe_selected_one: safe_selected_one,
            make_selected_one: make_selected_one,
            doctor_selected_one: doctor_selected_one
        },
        success: function(response){
            response = JSON.parse(response);
            console.log(response);
            if(response.success == true){
                console.log('Hello type one');
                document.location = 'license_all.php';
            }else{
                console.log('So sad type one');
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
                    $('#show_favone_location').modal('hide')
                    $('#location_materialone_address').val(response.address.split(",")[0])
                    $('#location_materialone_district').val(response.address.split(",")[1])
                    $('#location_materialone_amphoe').val(response.address.split(",")[2])
                    $('#location_materialone_province').val(response.address.split(",")[3])
                    $('#location_materialone_zipcode').val(response.address.split(",")[4])
                    $('#location_materialone_phone').val(response.phone)
                    $('#location_materialone_email').val(response.email)
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
                $("#select_fav_safeone").click(function(){
                    $('#show_favone_safe').modal('hide')
                    $('#safe_name').val(response.name.split(" ")[0])
                    $('#safe_lname').val(response.name.split(" ")[1])
                    $('#safe_idcard').val(response.idcard)
                    $('#safe_position').val(response.position)
                    $('#safe_age').val(response.age)
                    $('#safe_nationality').val(response.nationality)
                    $('#safe_phone').val(response.phone)
                    $('#safe_email').val(response.email)
                    $('#safe_houseno').val(response.address.split(",")[0])
                    $('#safe_villageno').val(response.address.split(",")[1])
                    $('#safe_alley').val(response.address.split(",")[2])
                    $('#safe_road').val(response.address.split(",")[3])
                    $('#safe_subdistrict').val(response.address.split(",")[4])
                    $('#safe_district').val(response.address.split(",")[5])
                    $('#safe_province').val(response.address.split(",")[6])
                    $('#safe_zipcode').val(response.address.split(",")[7])
                    $('#safe_qualification').val(response.qualification)
                    $('#safe_number').val(response.no_regis)
                });
                $("#select_fav_makeone").click(function(){
                    $('#show_favone_make').modal('hide')
                    $('#make_name').val(response.name.split(" ")[0])
                    $('#make_lname').val(response.name.split(" ")[1])
                    $('#make_idcard').val(response.idcard)
                    $('#make_position').val(response.position)
                    $('#make_age').val(response.age)
                    $('#make_nationality').val(response.nationality)
                    $('#make_phone').val(response.phone)
                    $('#make_email').val(response.email)
                    $('#make_houseno').val(response.address.split(",")[0])
                    $('#make_villageno').val(response.address.split(",")[1])
                    $('#make_alley').val(response.address.split(",")[2])
                    $('#make_road').val(response.address.split(",")[3])
                    $('#make_subdistrict').val(response.address.split(",")[4])
                    $('#make_district').val(response.address.split(",")[5])
                    $('#make_province').val(response.address.split(",")[6])
                    $('#make_zipcode').val(response.address.split(",")[7])
                    $('#make_qualification').val(response.qualification)
                    $('#make_number').val(response.no_regis)
                });
                $("#select_fav_doctorone").click(function(){
                    $('#show_favone_doctor').modal('hide')
                    $('#doctor_name').val(response.name.split(" ")[0])
                    $('#doctor_lname').val(response.name.split(" ")[1])
                    $('#doctor_idcard').val(response.idcard)
                    $('#doctor_position').val(response.position)
                    $('#doctor_age').val(response.age)
                    $('#doctor_nationality').val(response.nationality)
                    $('#doctor_phone').val(response.phone)
                    $('#doctor_email').val(response.email)
                    $('#doctor_houseno').val(response.address.split(",")[0])
                    $('#doctor_villageno').val(response.address.split(",")[1])
                    $('#doctor_alley').val(response.address.split(",")[2])
                    $('#doctor_road').val(response.address.split(",")[3])
                    $('#doctor_subdistrict').val(response.address.split(",")[4])
                    $('#doctor_district').val(response.address.split(",")[5])
                    $('#doctor_province').val(response.address.split(",")[6])
                    $('#doctor_zipcode').val(response.address.split(",")[7])
                    $('#doctor_hospital_name').val(response.staff_work_name)
                    $('#doctor_artlicense').val(response.art_license)
                    $('#doctor_date_start').val(response.start_work)
                });
            }
            console.log(staff_id);
        }
    });
}