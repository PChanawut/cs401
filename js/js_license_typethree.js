// ที่อยู่ของสถานที่จัดเก็บ
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#location_material_district_three'),
    $amphoe: $('#location_material_amphoe_three'),
    $province: $('#location_material_province_three'),
    $zipcode: $('#location_material_zipcode_three'),
});
// ที่อยู่ของเจ้าหน้าที่ความปลอดภัยทางรังสี
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#safe_subdistrict_three'),
    $amphoe: $('#safe_district_three'),
    $province: $('#safe_province_three'),
    $zipcode: $('#safe_zipcode_three'),
});
// ที่อยู่ของผู้ปฏิบัติงานรังสี
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#make_subdistrict_three'),
    $amphoe: $('#make_district_three'),
    $province: $('#make_province_three'),
    $zipcode: $('#make_zipcode_three'),
});
// ที่อยู่ของแพทย์ผู้รับผิดชอบ
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#doctor_subdistrict_three'),
    $amphoe: $('#doctor_district_three'),
    $province: $('#doctor_province_three'),
    $zipcode: $('#doctor_zipcode_three'),
});

$("#request").submit(function(e){
    e.preventDefault();

    // step one
    let material_location = $("#location_material_address_three").val()+" ต."+$("#location_material_district_three").val()+" อ."+$("#location_material_amphoe_three").val()+" จ."+$("#location_material_province_three").val()+" "+$("#location_material_zipcode_three").val()
    let location_material_phone_three = $("#location_material_phone_three").val()
    let location_material_email_three = $("#location_material_email_three").val()
    let location_material_benefit_three = $("#location_material_benefit_three").val()
    let location_material_request_three = $("#location_material_request_three").val()
    let selected_three = "";
    if($("#save_locationthree_stepone").is(':checked')){
        selected_three = "select";
    }else{
        selected_three = "not";
    }

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
    let safe_address = $("#safe_houseno_three").val()+" ม."+$("#safe_villageno_three").val()+" "+$("#safe_alley_three").val()+" "+$("#safe_road_three").val()+" ต."+$("#safe_subdistrict_three").val()+" อ."+$("#safe_district_three").val()+" จ."+$("#safe_province_three").val()+" "+$("#safe_zipcode_three").val()
    let safe_qualification_three = $("#safe_qualification_three").val()
    let safe_number_three = $("#safe_number_three").val()
    let safe_selected_three = "";
    if($("#save_safethree").is(':checked')){
        safe_selected_three = "select";
    }else{
        safe_selected_three = "not";
    }

    // ผู้ปฏิบัติงานรังสี
    let make_name = $("#make_name_three").val()+" "+$("#make_lname_three").val()
    let make_idcard_three = $("#make_idcard_three").val()
    let make_position_three = $("#make_position_three").val()
    let make_age_three = $("#make_age_three").val()
    let make_nationality_three = $("#make_nationality_three").val()
    let make_phone_three = $("#make_phone_three").val()
    let make_email_three = $("#make_email_three").val()
    let make_address = $("#make_houseno_three").val()+" ม."+$("#make_villageno_three").val()+" "+$("#make_alley_three").val()+" "+$("#make_road_three").val()+" ต."+$("#make_subdistrict_three").val()+" อ."+$("#make_district_three").val()+" จ."+$("#make_province_three").val()+" "+$("#make_zipcode_three").val()
    let make_qualification_three = $("#make_qualification_three").val()
    let make_number_three = $("#make_number_three").val()
    let make_selected_three = "";
    if($("#save_makethree").is(':checked')){
        make_selected_three = "select";
    }else{
        make_selected_three = "not";
    }

    // แพทย์ผู้รับผิดชอบ
    let doctor_name = $("#doctor_name_three").val()+" "+$("#doctor_lname_three").val()
    let doctor_idcard_three = $("#doctor_idcard_three").val()
    let doctor_position_three = $("#doctor_position_three").val()
    let doctor_age_three = $("#doctor_age_three").val()
    let doctor_nationality_three = $("#doctor_nationality_three").val()
    let doctor_phone_three = $("#doctor_phone_three").val()
    let doctor_email_three = $("#doctor_email_three").val()
    let doctor_address = $("#doctor_houseno_three").val()+" ม."+$("#doctor_villageno_three").val()+" "+$("#doctor_alley_three").val()+" "+$("#doctor_road_three").val()+" ต."+$("#doctor_subdistrict_three").val()+" อ."+$("#doctor_district_three").val()+" จ."+$("#doctor_province_three").val()+" "+$("#doctor_zipcode_three").val()
    let doctor_hospital_name_three = $("#doctor_hospital_name_three").val()
    let doctor_artlicense_three = $("#doctor_artlicense_three").val()
    let doctor_date_start_three = $("#doctor_date_start_three").val()
    let doctor_selected_three = "";
    if($("#save_doctorthree").is(':checked')){
        doctor_selected_three = "select";
    }else{
        doctor_selected_three = "not";
    }

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
            selected: selected,
            selected_three: selected_three,
            safe_selected_three: safe_selected_three,
            make_selected_three: make_selected_three,
            doctor_selected_three: doctor_selected_three
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
                    $('#show_favthree_location').modal('hide')
                    $('#location_material_address_three').val(response.address.split(" ")[0]+" "+response.address.split(" ")[1])
                    $('#location_material_district_three').val(response.address.split(" ")[2])
                    $('#location_material_amphoe_three').val(response.address.split(" ")[3])
                    $('#location_material_province_three').val(response.address.split(" ")[4])
                    $('#location_material_zipcode_three').val(response.address.split(" ")[5])
                    $('#location_material_phone_three').val(response.phone)
                    $('#location_material_email_three').val(response.email)
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
                $("#select_fav_safethree").click(function(){
                    $('#show_favthree_safe').modal('hide')
                    $('#safe_name_three').val(response.name.split(" ")[0])
                    $('#safe_lname_three').val(response.name.split(" ")[1])
                    $('#safe_idcard_three').val(response.idcard)
                    $('#safe_position_three').val(response.position)
                    $('#safe_age_three').val(response.age)
                    $('#safe_nationality_three').val(response.nationality)
                    $('#safe_phone_three').val(response.phone)
                    $('#safe_email_three').val(response.email)
                    $('#safe_houseno_three').val(response.address.split(" ")[0])
                    $('#safe_villageno_three').val(response.address.split(" ")[1])
                    $('#safe_alley_three').val(response.address.split(" ")[2])
                    $('#safe_road_three').val(response.address.split(" ")[3])
                    $('#safe_subdistrict_three').val(response.address.split(" ")[4])
                    $('#safe_district_three').val(response.address.split(" ")[5])
                    $('#safe_province_three').val(response.address.split(" ")[6])
                    $('#safe_zipcode_three').val(response.address.split(" ")[7])
                    $('#safe_qualification_three').val(response.qualification)
                    $('#safe_number_three').val(response.no_regis)
                });
                $("#select_fav_makethree").click(function(){
                    $('#show_favthree_make').modal('hide')
                    $('#make_name_three').val(response.name.split(" ")[0])
                    $('#make_lname_three').val(response.name.split(" ")[1])
                    $('#make_idcard_three').val(response.idcard)
                    $('#make_position_three').val(response.position)
                    $('#make_age_three').val(response.age)
                    $('#make_nationality_three').val(response.nationality)
                    $('#make_phone_three').val(response.phone)
                    $('#make_email_three').val(response.email)
                    $('#make_houseno_three').val(response.address.split(" ")[0])
                    $('#make_villageno_three').val(response.address.split(" ")[1])
                    $('#make_alley_three').val(response.address.split(" ")[2])
                    $('#make_road_three').val(response.address.split(" ")[3])
                    $('#make_subdistrict_three').val(response.address.split(" ")[4])
                    $('#make_district_three').val(response.address.split(" ")[5])
                    $('#make_province_three').val(response.address.split(" ")[6])
                    $('#make_zipcode_three').val(response.address.split(" ")[7])
                    $('#make_qualification_three').val(response.qualification)
                    $('#make_number_three').val(response.no_regis)
                });
                $("#select_fav_doctorthree").click(function(){
                    $('#show_favthree_doctor').modal('hide')
                    $('#doctor_name_three').val(response.name.split(" ")[0])
                    $('#doctor_lname_three').val(response.name.split(" ")[1])
                    $('#doctor_idcard_three').val(response.idcard)
                    $('#doctor_position_three').val(response.position)
                    $('#doctor_age_three').val(response.age)
                    $('#doctor_nationality_three').val(response.nationality)
                    $('#doctor_phone_three').val(response.phone)
                    $('#doctor_email_three').val(response.email)
                    $('#doctor_houseno_three').val(response.address.split(" ")[0])
                    $('#doctor_villageno_three').val(response.address.split(" ")[1])
                    $('#doctor_alley_three').val(response.address.split(" ")[2])
                    $('#doctor_road_three').val(response.address.split(" ")[3])
                    $('#doctor_subdistrict_three').val(response.address.split(" ")[4])
                    $('#doctor_district_three').val(response.address.split(" ")[5])
                    $('#doctor_province_three').val(response.address.split(" ")[6])
                    $('#doctor_zipcode_three').val(response.address.split(" ")[7])
                    $('#doctor_hospital_name_three').val(response.staff_work_name)
                    $('#doctor_artlicense_three').val(response.art_license)
                    $('#doctor_date_start_three').val(response.start_work)
                });
            }
            console.log(staff_id);
        }
    });
}