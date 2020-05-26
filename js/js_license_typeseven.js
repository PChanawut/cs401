// ที่อยู่ของสถานที่จัดเก็บ
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#location_materialseven_district'),
    $amphoe: $('#location_materialseven_amphoe'),
    $province: $('#location_materialseven_province'),
    $zipcode: $('#location_materialseven_zipcode'),
});
// ที่อยู่ของเจ้าหน้าความปลอดภัยทางรังสี
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#safe_subdistrict_seven'),
    $amphoe: $('#safe_district_seven'),
    $province: $('#safe_province_seven'),
    $zipcode: $('#safe_zipcode_seven'),
});
// ที่อยู่ของผู้ปฎิบัติงานทางรังสี
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#make_subdistrict_seven'),
    $amphoe: $('#make_district_seven'),
    $province: $('#make_province_seven'),
    $zipcode: $('#make_zipcode_seven'),
});
// แพทย์ผู้รับผิดชอบ
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#doctor_subdistrict_seven'),
    $amphoe: $('#doctor_district_seven'),
    $province: $('#doctor_province_seven'),
    $zipcode: $('#doctor_zipcode_seven'),
});

$("#request").submit(function(e){
    e.preventDefault();

    // step one
    let material_location = $("#location_materialseven_address").val()+" ต."+$("#location_materialseven_district").val()+" อ."+$("#location_materialseven_amphoe").val()+" จ."+$("#location_materialseven_province").val()+" "+$("#location_materialseven_zipcode").val()
    let location_materialseven_phone = $("#location_materialseven_phone").val()
    let location_materialseven_email = $("#location_materialseven_email").val()
    let location_materialseven_benefit = $("#location_materialseven_benefit").val()
    let selected_seven = "";
    if($("#save_locationseven_stepone").is(':checked')){
        selected_seven = "select";
    }else{
        selected_seven = "not";
    }

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
    let safe_address = $("#safe_houseno_seven").val()+" ม."+$("#safe_villageno_seven").val()+" "+$("#safe_alley_seven").val()+" "+$("#safe_road_seven").val()+" ต."+$("#safe_subdistrict_seven").val()+" อ."+$("#safe_district_seven").val()+" จ."+$("#safe_province_seven").val()+" "+$("#safe_zipcode_seven").val()
    let safe_qualification_seven = $("#safe_qualification_seven").val()
    let safe_number_seven = $("#safe_number_seven").val()
    let safe_selected_seven = "";
    if($("#save_safeseven").is(':checked')){
        safe_selected_seven = "select";
    }else{
        safe_selected_seven = "not";
    }

    // ผู้ปฏิบัติงานทางรังสี
    let make_name = $("#make_name_seven").val()+" "+$("#make_lname_seven").val()
    let make_idcard_seven = $("#make_idcard_seven").val()
    let make_position_seven = $("#make_position_seven").val()
    let make_age_seven = $("#make_age_seven").val()
    let make_nationality_seven = $("#make_nationality_seven").val()
    let make_phone_seven = $("#make_phone_seven").val()
    let make_email_seven = $("#make_email_seven").val()
    let make_address = $("#make_houseno_seven").val()+" ม."+$("#make_villageno_seven").val()+" "+$("#make_alley_seven").val()+" "+$("#make_road_seven").val()+" ต."+$("#make_subdistrict_seven").val()+" อ."+$("#make_district_seven").val()+" จ."+$("#make_province_seven").val()+" "+$("#make_zipcode_seven").val()
    let make_qualification_seven = $("#make_qualification_seven").val()
    let make_number_seven = $("#make_number_seven").val()
    let make_selected_seven = "";
    if($("#save_makeseven").is(':checked')){
        make_selected_seven = "select";
    }else{
        make_selected_seven = "not";
    }

    // แพทย์ผู้รับผิดชอบ
    let doctor_name = $("#doctor_name_seven").val()+" "+$("#doctor_lname_seven").val()
    let doctor_idcard_seven = $("#doctor_idcard_seven").val()
    let doctor_position_seven = $("#doctor_position_seven").val()
    let doctor_age_seven = $("#doctor_age_seven").val()
    let doctor_nationality_seven = $("#doctor_nationality_seven").val()
    let doctor_phone_seven = $("#doctor_phone_seven").val()
    let doctor_email_seven = $("#doctor_email_seven").val()
    let doctor_address = $("#doctor_houseno_seven").val()+" ม."+$("#doctor_villageno_seven").val()+" "+$("#doctor_alley_seven").val()+" "+$("#doctor_road_seven").val()+" ต."+$("#doctor_subdistrict_seven").val()+" อ."+$("#doctor_district_seven").val()+" จ."+$("#doctor_province_seven").val()+" "+$("#doctor_zipcode_seven").val()
    let doctor_hospital_name_seven = $("#doctor_hospital_name_seven").val()
    let doctor_artlicense_seven = $("#doctor_artlicense_seven").val()
    let doctor_date_start_seven = $("#doctor_date_start_seven").val()
    let doctor_selected_seven = "";
    if($("#save_doctorseven").is(':checked')){
        doctor_selected_seven = "select";
    }else{
        doctor_selected_seven = "not";
    }

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
            doctor_date_start_seven: doctor_date_start_seven,
            selected_seven: selected_seven,
            safe_selected_seven: safe_selected_seven,
            make_selected_seven: make_selected_seven,
            doctor_selected_seven: doctor_selected_seven
        },
        success: function(response){
            response = JSON.parse(response);
            console.log(response);
            if(response.success == true){
                console.log('Hello type seven');
                document.location = 'license_last_request.php';
            }else{
                console.log('So sad type seven');
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
            if(material_id != ""){
                $("#select_fav_location").click(function(){
                    $('#show_favseven_location').modal('hide')
                    $('#location_materialseven_address').val(response.address.split(" ")[0]+" "+response.address.split(" ")[1])
                    $('#location_materialseven_district').val(response.address.split(" ")[2])
                    $('#location_materialseven_amphoe').val(response.address.split(" ")[3])
                    $('#location_materialseven_province').val(response.address.split(" ")[4])
                    $('#location_materialseven_zipcode').val(response.address.split(" ")[5])
                    $('#location_materialseven_phone').val(response.phone)
                    $('#location_materialseven_email').val(response.email)
                    // $('#detail_location').show();
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
                $("#select_fav_safeseven").click(function(){
                    $('#show_favseven_safe').modal('hide')
                    $('#safe_name_seven').val(response.name.split(" ")[0])
                    $('#safe_lname_seven').val(response.name.split(" ")[1])
                    $('#safe_idcard_seven').val(response.idcard)
                    $('#safe_position_seven').val(response.position)
                    $('#safe_age_seven').val(response.age)
                    $('#safe_nationality_seven').val(response.nationality)
                    $('#safe_phone_seven').val(response.phone)
                    $('#safe_email_seven').val(response.email)
                    $('#safe_houseno_seven').val(response.address.split(" ")[0])
                    $('#safe_villageno_seven').val(response.address.split(" ")[1])
                    $('#safe_alley_seven').val(response.address.split(" ")[2])
                    $('#safe_road_seven').val(response.address.split(" ")[3])
                    $('#safe_subdistrict_seven').val(response.address.split(" ")[4])
                    $('#safe_district_seven').val(response.address.split(" ")[5])
                    $('#safe_province_seven').val(response.address.split(" ")[6])
                    $('#safe_zipcode_seven').val(response.address.split(" ")[7])
                    $('#safe_qualification_seven').val(response.qualification)
                    $('#safe_number_seven').val(response.no_regis)
                });
                $("#select_fav_makeseven").click(function(){
                    $('#show_favseven_make').modal('hide')
                    $('#make_name_seven').val(response.name.split(" ")[0])
                    $('#make_lname_seven').val(response.name.split(" ")[1])
                    $('#make_idcard_seven').val(response.idcard)
                    $('#make_position_seven').val(response.position)
                    $('#make_age_seven').val(response.age)
                    $('#make_nationality_seven').val(response.nationality)
                    $('#make_phone_seven').val(response.phone)
                    $('#make_email_seven').val(response.email)
                    $('#make_houseno_seven').val(response.address.split(" ")[0])
                    $('#make_villageno_seven').val(response.address.split(" ")[1])
                    $('#make_alley_seven').val(response.address.split(" ")[2])
                    $('#make_road_seven').val(response.address.split(" ")[3])
                    $('#make_subdistrict_seven').val(response.address.split(" ")[4])
                    $('#make_district_seven').val(response.address.split(" ")[5])
                    $('#make_province_seven').val(response.address.split(" ")[6])
                    $('#make_zipcode_seven').val(response.address.split(" ")[7])
                    $('#make_qualification_seven').val(response.qualification)
                    $('#make_number_seven').val(response.no_regis)
                });
                $("#select_fav_doctorseven").click(function(){
                    $('#show_favseven_doctor').modal('hide')
                    $('#doctor_name_seven').val(response.name.split(" ")[0])
                    $('#doctor_lname_seven').val(response.name.split(" ")[1])
                    $('#doctor_idcard_seven').val(response.idcard)
                    $('#doctor_position_seven').val(response.position)
                    $('#doctor_age_seven').val(response.age)
                    $('#doctor_nationality_seven').val(response.nationality)
                    $('#doctor_phone_seven').val(response.phone)
                    $('#doctor_email_seven').val(response.email)
                    $('#doctor_houseno_seven').val(response.address.split(" ")[0])
                    $('#doctor_villageno_seven').val(response.address.split(" ")[1])
                    $('#doctor_alley_seven').val(response.address.split(" ")[2])
                    $('#doctor_road_seven').val(response.address.split(" ")[3])
                    $('#doctor_subdistrict_seven').val(response.address.split(" ")[4])
                    $('#doctor_district_seven').val(response.address.split(" ")[5])
                    $('#doctor_province_seven').val(response.address.split(" ")[6])
                    $('#doctor_zipcode_seven').val(response.address.split(" ")[7])
                    $('#doctor_hospital_name_seven').val(response.staff_work_name)
                    $('#doctor_artlicense_seven').val(response.art_license)
                    $('#doctor_date_start_seven').val(response.start_work)
                });
            }
            console.log(staff_id);
        }
    });
}