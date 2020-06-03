$(document).ready(function(){
    $(document).ready(function(){
        $("th.index").each(function(index){
            $(this).text(++index);
        });
        $("tbody.index").each(function(index){
            $(this).attr("id",++index);
        });
    });
});

function select_renew(license_id,row_no){
    let id_license = license_id;
    $.ajax({
        type: 'POST',
        url: 'php/php_renew.php',
        data: {
            license_id: license_id,
            id_license: id_license
        },
        success: function(response){
            response = JSON.parse(response);
            if(response.success){
                // var id_license = response.id;
                // console.log(license_id);
                // console.log("5555");
                // console.log(response.id);
                // console.log(".....");
                // console.log(response.type);
                $("#model_edit_license").val("");
                $('#detail_renew').modal('show');
                if(response.id > 0 && response.id <= 9){
                    $("#no_license").text("เลขที่ใบอนุญาต: " + response.number + "-0" + response.type + "-000" + response.id);
                }else if(response.id > 9 && response.id <= 99){
                    $("#no_license").text("เลขที่ใบอนุญาต: " + response.number + "-0" + response.type + "-00" + response.id);
                }else if(response.id > 99 && response.id <= 999){
                    $("#no_license").text("เลขที่ใบอนุญาต: " + response.number + "-0" + response.type + "-0" + response.id);
                }else if(response.id > 999 && response.id <= 9999){
                    $("#no_license").text("เลขที่ใบอนุญาต: " + response.number + "-0" + response.type + "-" + response.id);
                }

                if(response.type == '1'){
                    $("#show_location").text("ขออนุญาตเพื่อ: " + response.type_request + " ประเภทการใช้ประโยชน์: " + response.type_benefit);
                    $("#show_location_name").text("รายละเอียดที่อยู่: " + response.material_address.split(",")[0] + " ต." + response.material_address.split(",")[1] + " อ." + response.material_address.split(",")[2] + " จ." + response.material_address.split(",")[3] + " " + response.material_address.split(",")[4]);
                    $("#show_location_name2").text("หมายเลขโทรศัพท์: " + response.material_phone);

                    $("#show_detail").text("ชนิดวัสดุ: " + response.material_type);
                    $("#show_detail_material").text("ทะเบียนอ้างอิง: " + response.no_reference + " รหัสประเภทการใช้งาน: " + response.operation_type + " ธาตุ-เลขมวล: " + response.element);
                    $("#show_type_material").text("ชื่อสถานที่ติดตั้งหรือใช้งาน: " + response.locationname_material);
                    
                    $("#header_safe").text("เจ้าหน้าที่ความปลอดภัยทางรังสี:");
                    $("#show_detail_safe").text("ชื่อ-นามสกุล: " + response.safe_name + " เลขบัตรประจำตัวประชาชน: " + response.safe_idcard);
                    $("#show_detail_safe2").text("ตำแหน่ง: " + response.safe_position + " หมายเลขทะเบียน: " + response.safe_no_regis);

                    $("#header_make").text("ผู้ปฎิบัติงานทางรังสี:");
                    $("#show_detail_make").text("ชื่อ-นามสกุล: " + response.make_name + " เลขบัตรประจำตัวประชาชน: " + response.make_idcard);
                    $("#show_detail_make2").text("ตำแหน่ง: " + response.make_position + " หมายเลขทะเบียน: " + response.make_no_regis);

                    $("#header_doctor").text("แพทย์ผู้รับผิดชอบ:");
                    $("#show_detail_doctor").text("ชื่อ-นามสกุล: " + response.doctor_name + " เลขบัตรประจำตัวประชาชน: " + response.doctor_idcard);
                    $("#show_detail_doctor2").text("ตำแหน่ง: " + response.doctor_position);
                    $("#show_detail_doctor3").text("ชื่อสถานที่ทำการ: " + response.doctor_work_name);
                }else if(response.type == '2'){
                    $("#show_location").text("ขออนุญาตเพื่อ: " + response.type_request + " ประเภทการใช้ประโยชน์: " + response.type_benefit);
                    $("#show_location_name").text("รายละเอียดที่อยู่: " + response.material_address.split(",")[0] + " ต." + response.material_address.split(",")[1] + " อ." + response.material_address.split(",")[2] + " จ." + response.material_address.split(",")[3] + " " + response.material_address.split(",")[4]);
                    $("#show_location_name2").text("หมายเลขโทรศัพท์: " + response.material_phone);

                    $("#show_detail").text("ชนิดวัสดุ: " + response.material_type);
                    $("#show_detail_material").text("ทะเบียนอ้างอิง: " + response.no_reference + " รหัสประเภทการใช้งาน: " + response.operation_type + " ธาตุ-เลขมวล: " + response.element);
                    $("#show_type_material").text("ชื่อสถานที่ติดตั้งหรือใช้งาน: " + response.locationname_material);

                    $("#header_safe").text("ผู้แทนจำหน่ายที่ได้รับมอบหมายให้นำเข้าหรือส่งออก:");
                    $("#show_detail_safe").text("ชื่อ-นามสกุล: " + response.sale_name + " ตำแหน่ง: " + response.sale_position + " เบอร์โทรศัพท์: " + response.sale_phone);
                    $("#show_detail_safe2").text("E-mail: " + response.sale_email + " ชื่อสถานที่ทำการ: " + response.sale_work_name);

                    $("#header_make").text("ผู้ดำเนินการตามพิธีศุลกากร:");
                    $("#show_detail_make").text("ชื่อ-นามสกุล: " + response.handler_name + " ตำแหน่ง: " + response.handler_position + "เบอร์โทรศัพท์: " + response.handler_phone);
                    $("#show_detail_make2").text("E-mail: " + response.handlrt_email + " ชื่อสถานที่ทำการ: " + response.handler_work_name);

                    $("#header_doctor").text("ผู้รับปลายทางนำเข้าหรือส่งออก:");
                    $("#show_detail_doctor").text("ชื่อสถานที่ทำการ: " + response.destination_work_name);
                    $("#show_detail_doctor2").text("เบอร์โทรศัพท์: " + response.destination_phone + " E-mail: " + response.destination_email);
                }else if(response.type == '3'){
                    $("#show_location").text("ขออนุญาตเพื่อ: " + response.type_request + " ประเภทการใช้ประโยชน์: " + response.type_benefit);
                    $("#show_location_name").text("รายละเอียดที่อยู่: " + response.material_address.split(",")[0] + " ต." + response.material_address.split(",")[1] + " อ." + response.material_address.split(",")[2] + " จ." + response.material_address.split(",")[3] + " " + response.material_address.split(",")[4]);
                    $("#show_location_name2").text("หมายเลขโทรศัพท์: " + response.material_phone);

                    if(response.material_type_special == 'วัสดุนิวเคลียร์พิเศษ'){
                        $("#show_detail").text("ชนิดวัสดุ: " + response.material_type_special);
                        $("#show_detail_material").text("รหัสบริเวณตรวจนับ: " + response.no_check + " ชื่อสถานปฏิบัติการ: " + response.name_work);
                        $("#show_type_material").text("วัสดุนิวเคลียร์พิเศษ ชนิด: " + response.type_nuclear_special + " รายละเอียดวัสดุ: " + response.detail_material + " ประเภทวัสดุ: " + response.type_material + " น้ำหนักวัสดุ: " + response.weight_material + " " + response.unit);
                    }
                    else if(response.type_special == 'วัสดุต้นกำลังซึ่งพ้นสภาพ'){
                        $("#show_detail").text("ชนิดวัสดุ: " + response.type_special);
                        $("#show_detail_material").text("รหัสหน่วยงาน: " + response.code_work + " สถานที่ใช้งาน: " + response.work_address);
                        $("#show_type_material").text("วัสดุนิวเคลียร์พิเศษ ชนิด: " + response.nuclear_special + " การใช้ประโยชน์: " + response.nuclear_benefit + " อายุการใช้งาน: " + response.work_age);
                    }

                    $("#header_safe").text("เจ้าหน้าที่ความปลอดภัยทางรังสี:");
                    $("#show_detail_safe").text("ชื่อ-นามสกุล: " + response.safe_name + " เลขบัตรประจำตัวประชาชน: " + response.safe_idcard);
                    $("#show_detail_safe2").text("ตำแหน่ง: " + response.safe_position + " หมายเลขทะเบียน: " + response.safe_no_regis);

                    $("#header_make").text("ผู้ปฎิบัติงานทางรังสี:");
                    $("#show_detail_make").text("ชื่อ-นามสกุล: " + response.make_name + " เลขบัตรประจำตัวประชาชน: " + response.make_idcard);
                    $("#show_detail_make2").text("ตำแหน่ง: " + response.make_position + " หมายเลขทะเบียน: " + response.make_no_regis);

                    $("#header_doctor").text("แพทย์ผู้รับผิดชอบ:");
                    $("#show_detail_doctor").text("ชื่อ-นามสกุล: " + response.doctor_name + " เลขบัตรประจำตัวประชาชน: " + response.doctor_idcard);
                    $("#show_detail_doctor2").text("ตำแหน่ง: " + response.doctor_position);
                    $("#show_detail_doctor3").text("ชื่อสถานที่ทำการ: " + response.doctor_work_name);
                }else if(response.type == '4'){
                    $("#show_location").text("สถานที่เก็บรักษาวัสดุพลอยได้ที่นำหรือสั่งเข้ามาในราชอาณาจักร: " + response.import_material_address.split(",")[0] + " ต." + response.import_material_address.split(",")[1] + " อ." + response.import_material_address.split(",")[2] + " จ." + response.import_material_address.split(",")[3] + " " + response.import_material_address.split(",")[4]);
                    $("#show_location_name").text("หมายเลขโทรศัพท์: " + response.import_material_phone + " E-mail: " + response.import_material_email);
                    $("#show_location_name2").text("สถานที่เก็บรักษาวัสดุพลอยได้ที่นำหรือส่งออกนอกในราชอาณาจักร: " + response.material_address.split(",")[0] + " ต." + response.material_address.split(",")[1] + " อ." + response.material_address.split(",")[2] + " จ." + response.material_address.split(",")[3] + " " + response.material_address.split(",")[4]);
                    $("#show_location_name3").text("หมายเลขโทรศัพท์: " + response.material_phone + " E-mail: " + response.material_email);

                    $("#show_detail").text("ขออนุญาตเพื่อ: " + response.material_type_special + " วัตถุประสงค์: " + response.nuclear_purpose + " พาหนะสำหรับการขนส่ง: " + response.nuclear_vehicle);
                    $("#show_detail_material").text("รหัสบริเวณตรวจนับ: " + response.no_check + " ชื่อสถานปฏิบัติการ: " + response.name_work + " รหัสตำแหน่ง: " + response.no_location);
                    $("#show_type_material").text("ประเภทวัสดุ: " + response.type_material + " วัสดุนิวเคลียร์พิเศษ ชนิด: " + response.nuclear_special);

                    $("#header_safe").text("ผู้แทนจำหน่ายที่ได้รับมอบหมายให้นำเข้าหรือส่งออก:");
                    $("#show_detail_safe").text("ชื่อ-นามสกุล: " + response.sale_name + " ตำแหน่ง: " + response.sale_position + " เบอร์โทรศัพท์: " + response.sale_phone);
                    $("#show_detail_safe2").text("E-mail: " + response.sale_email + " ชื่อสถานที่ทำการ: " + response.sale_work_name);

                    $("#header_make").text("ผู้ดำเนินการตามพิธีศุลกากร:");
                    $("#show_detail_make").text("ชื่อ-นามสกุล: " + response.handler_name + " ตำแหน่ง: " + response.handler_position + "เบอร์โทรศัพท์: " + response.handler_phone);
                    $("#show_detail_make2").text("E-mail: " + response.handlrt_email + " ชื่อสถานที่ทำการ: " + response.handler_work_name);

                    $("#header_doctor").text("ผู้รับปลายทางนำเข้าหรือส่งออก:");
                    $("#show_detail_doctor").text("ชื่อสถานที่ทำการ: " + response.destination_work_name);
                    $("#show_detail_doctor2").text("เบอร์โทรศัพท์: " + response.destination_phone + " E-mail: " + response.destination_email);
                }else if(response.type == '5'){
                    $("#show_location").text("ขออนุญาตเพื่อ: " + response.type_request);
                    $("#show_location_name").text("รายละเอียดที่อยู่: " + response.material_address.split(",")[0] + " ต." + response.material_address.split(",")[1] + " อ." + response.material_address.split(",")[2] + " จ." + response.material_address.split(",")[3] + " " + response.material_address.split(",")[4]);
                    $("#show_location_name2").text("หมายเลขโทรศัพท์: " + response.material_phone);

                    $("#show_detail").text("ชนิดเครื่องปฏิกรณ์ปรมาณู: " + response.type_atomic);
                    $("#show_detail_material").text("ประเภทของเครื่องปฏิกรณ์ปรมาณู: " + response.type_atomic_reactor + " กำลังผลิตความร้อนสูงสุด: " + response.power_heat);

                    $("#header_safe").text("---- ไม่มีเจ้าหน้าที่ที่เกี่ยวข้อง ----");

                    // var no_license = document.getElementById("no_license").value;
                }else if(response.type == '6'){
                    $("#show_location").text("สถานที่กระทำด้วยประการใดๆ แก่วัสดุต้นกำลัง: " + response.chemical_material_address.split(",")[0] + " ต." + response.chemical_material_address.split(",")[1] + " อ." + response.chemical_material_address.split(",")[2] + " จ." + response.chemical_material_address.split(",")[3] + " " + response.chemical_material_address.split(",")[4]);
                    $("#show_location_name").text("หมายเลขโทรศัพท์: " + response.chemical_material_phone + " E-mail: " + response.chemical_material_email);
                    $("#show_location_name2").text("สถานที่เก็บรักษาวัสดุที่พ้นสภาพแล้ว: " + response.material_address.split(",")[0] + " ต." + response.material_address.split(",")[1] + " อ." + response.material_address.split(",")[2] + " จ." + response.material_address.split(",")[3] + " " + response.material_address.split(",")[4]);
                    $("#show_location_name3").text("หมายเลขโทรศัพท์: " + response.material_phone + " E-mail: " + response.material_email);

                    $("#show_detail").text("ประเภทการใช้ประโยชน์: " + response.type_benefit);
                    $("#show_detail_material").text("วัสดุต้นกำลังชนิด: " + response.material_special + " ปริมาณ: " + response.material_num + " " + response.unit);
                    $("#show_type_material").text("เปลี่ยนสภาพเป็น: " + response.changeto + " ปริมาณ: " + response.changeto_num + " " + response.unit_changeto);

                    $("#header_safe").text("เจ้าหน้าที่ความปลอดภัยทางรังสี:");
                    $("#show_detail_safe").text("ชื่อ-นามสกุล: " + response.safe_name + " เลขบัตรประจำตัวประชาชน: " + response.safe_idcard);
                    $("#show_detail_safe2").text("ตำแหน่ง: " + response.safe_position + " หมายเลขทะเบียน: " + response.safe_no_regis);

                    $("#header_make").text("ผู้ปฎิบัติงานทางรังสี:");
                    $("#show_detail_make").text("ชื่อ-นามสกุล: " + response.make_name + " เลขบัตรประจำตัวประชาชน: " + response.make_idcard);
                    $("#show_detail_make2").text("ตำแหน่ง: " + response.make_position + " หมายเลขทะเบียน: " + response.make_no_regis);
                }else if(response.type == '7'){
                    $("#show_location").text("ประเภทการใช้ประโยชน์: " + response.type_benefit);
                    $("#show_location_name").text("รายละเอียดที่อยู่: " + response.material_address.split(",")[0] + " ต." + response.material_address.split(",")[1] + " อ." + response.material_address.split(",")[2] + " จ." + response.material_address.split(",")[3] + " " + response.material_address.split(",")[4]);
                    $("#show_location_name2").text("หมายเลขโทรศัพท์: " + response.material_phone);

                    $("#show_detail").text("ลักษณะการใช้งาน: " + response.style_work);
                    $("#show_detail_material").text("ทะเบียนอ้างอิง: " + response.no_reference + " รหัสประเภทการใช้งาน: " + response.operation_type);
                    $("#show_type_material").text("ชื่อสถานที่ติดตั้งหรือใช้งาน: " + response.locationname_material);

                    $("#header_safe").text("เจ้าหน้าที่ความปลอดภัยทางรังสี:");
                    $("#show_detail_safe").text("ชื่อ-นามสกุล: " + response.safe_name + " เลขบัตรประจำตัวประชาชน: " + response.safe_idcard);
                    $("#show_detail_safe2").text("ตำแหน่ง: " + response.safe_position + " หมายเลขทะเบียน: " + response.safe_no_regis);

                    $("#header_make").text("ผู้ปฎิบัติงานทางรังสี:");
                    $("#show_detail_make").text("ชื่อ-นามสกุล: " + response.make_name + " เลขบัตรประจำตัวประชาชน: " + response.make_idcard);
                    $("#show_detail_make2").text("ตำแหน่ง: " + response.make_position + " หมายเลขทะเบียน: " + response.make_no_regis);

                    $("#header_doctor").text("แพทย์ผู้รับผิดชอบ:");
                    $("#show_detail_doctor").text("ชื่อ-นามสกุล: " + response.doctor_name + " เลขบัตรประจำตัวประชาชน: " + response.doctor_idcard);
                    $("#show_detail_doctor2").text("ตำแหน่ง: " + response.doctor_position);
                    $("#show_detail_doctor3").text("ชื่อสถานที่ทำการ: " + response.doctor_work_name);
                }

                $("#model_edit_license").val(response.id);
            }
        }
    });
}

function edit_license(license_id,row_no){
    var license_id = $("#model_edit_license").val();
    console.log(license_id);
    $.ajax({
        type: 'POST',
        url: 'php/php_renew.php',
        data: {
            license_id: license_id
        },
        success: function(response){
            response = JSON.parse(response);
            console.log(response);
            console.log(response.type);
            if(response.success){
                if(response.type == '1'){
                    document.location = 'license_typeone.php?data=' + JSON.stringify(response)
                }else if(response.type == '2'){
                    document.location = 'license_typetwo.php?data=' + JSON.stringify(response)
                }else if(response.type == '3'){
                    document.location = 'license_typethree.php?data=' + JSON.stringify(response)
                }else if(response.type == '4'){
                    document.location = 'license_typefour.php?data=' + JSON.stringify(response)
                }else if(response.type == '5'){
                    //https://stackoverflow.com/questions/30498646/how-to-send-json-and-parse-it-on-next-html-page-through-url-in-jquery
                    document.location = 'license_typefive.php?data=' + JSON.stringify(response)
                }else if(response.type == '6'){
                    document.location = 'license_typesix.php?data=' + JSON.stringify(response)
                }else if(response.type == '7'){
                    document.location = 'license_typeseven.php?data=' + JSON.stringify(response)
                }
            }
        }
    });
}