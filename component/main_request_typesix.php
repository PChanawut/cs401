<div class="container mt-5">
    <div class="row alert alert-light" role="alert" style="height:45px">
        <h5>ใบขออนุญาตประเภท ปส 2 (สำหรับทำให้วัสดุต้นกำลังพ้นสภาพฯ)</h5>
    </div>
    <hr>

    <div id="stepone6" class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active">รายละเอียดวัสดุพ้นสภาพ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">เจ้าหน้าที่ที่เกี่ยวข้องกับวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>ขออนุญาตกระทำให้วัสดุต้นกำลังพ้นจากสภาพที่เป็นอยู่ตามธรรมชาติในทางเคมี</h5>
            </div>
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="type_benefit_six">ประเภทการใช้ประโยชน์:</label>
                    <select class="custom-select" id="type_benefit_six">
                        <option value="ศึกษาวิจัย">ศึกษาวิจัย</option>
                        <option value="พัฒนาวัสดุนิวเคลียร์">พัฒนาวัสดุนิวเคลียร์</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="material_special_six">วัสดุต้นกำลังชนิด:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="material_special_six">
                </div>
                <div class="form-group col-2">
                    <label for="material_num_six">ปริมาณ:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="material_num_six">
                </div>
                <div class="form-group col-2">
                    <label for="unit_six">หน่วย:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="unit_six">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="changeto_six">เปลี่ยนสภาพเป็น:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="changeto_six">
                </div>
                <div class="form-group col-2">
                    <label for="changeto_num_six">ปริมาณ:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="changeto_num_six">
                </div>
                <div class="form-group col-2">
                    <label for="unit_changeto_six">หน่วย:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="unit_changeto_six">
                </div>
            </div>
        </div>
        <div class="float-right">
            <button id="nextstepone6" type="button" class="btn btn-primary">ถัดไป</button>
        </div>
    </div>

    <div id="steptwo6" class="container" style="display:none;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link">รายละเอียดวัสดุพ้นสภาพ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">เจ้าหน้าที่ที่เกี่ยวข้องกับวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>สถานที่กระทำด้วยประการใดๆ แก่วัสดุต้นกำลังให้พ้นจากสภาพที่เป็นอยู่ตามธรรมชาติในทางเคมี</h5>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <button id="fav_chemicalsix_location" type="button" class="btn btn-outline-info btn-sm"
                        style="float:right;"><i class="fas fa-star">
                            ใช้ข้อมูลจากรายการโปรด</i></button>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_materialsix_address">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="location_materialsix_address">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_materialsix_district">ตำบล:</label>
                    <input type="text" class="form-control" id="location_materialsix_district">
                </div>
                <div class="form-group col">
                    <label for="location_materialsix_amphoe">อำเภอ:</label>
                    <input type="text" class="form-control" id="location_materialsix_amphoe">
                </div>
                <div class="form-group col">
                    <label for="location_materialsix_province">จังหวัด:</label>
                    <input type="text" class="form-control" id="location_materialsix_province">
                </div>
                <div class="form-group col">
                    <label for="location_materialsix_zipcode">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="location_materialsix_zipcode">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_materialsix_phone">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="location_materialsix_phone">
                </div>
                <div class="form-group col">
                    <label for="location_materialsix_email">Email:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="location_materialsix_email">
                </div>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="materialsix_location">
                <label class="custom-control-label"
                    for="materialsix_location">จัดเก็บข้อมูลสถานที่เป็นรายการโปรด</label>
            </div>
            <br>
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>สถานที่เก็บรักษาวัสดุที่พ้นสภาพแล้ว</h5>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <button id="fav_notsix_location" type="button" class="btn btn-outline-info btn-sm"
                        style="float:right;"><i class="fas fa-star">
                            ใช้ข้อมูลจากรายการโปรด</i></button>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_not_six">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="location_not_six">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_district_six">ตำบล:</label>
                    <input type="text" class="form-control" id="location_district_six">
                </div>
                <div class="form-group col">
                    <label for="location_amphoe_six">อำเภอ:</label>
                    <input type="text" class="form-control" id="location_amphoe_six">
                </div>
                <div class="form-group col">
                    <label for="location_province_six">จังหวัด:</label>
                    <input type="text" class="form-control" id="location_province_six">
                </div>
                <div class="form-group col">
                    <label for="location_zipcode_six">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="location_zipcode_six">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_phone_six">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="location_phone_six">
                </div>
                <div class="form-group col">
                    <label for="location_email_six">Email:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="location_email_six">
                </div>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="materialsix_location_not">
                <label class="custom-control-label"
                    for="materialsix_location_not">จัดเก็บข้อมูลสถานที่เป็นรายการโปรด</label>
            </div>
        </div>

        <div class="float-right">
            <button id="backsteptwo6" type="button" class="btn btn-light">ย้อนกลับ</button>
            <button id="nextsteptwo6" type="button" class="btn btn-primary">ถัดไป</button>
        </div>
    </div>

    <div id="stepthree6" class="container" style="display:none;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link">รายละเอียดวัสดุพ้นสภาพ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">เจ้าหน้าที่ที่เกี่ยวข้องกับวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne6">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                เจ้าหน้าที่ความปลอดภัยทางรังสี
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne6" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <button id="fav_six_safe" type="button" class="btn btn-outline-info btn-sm"
                                        style="float:right;"><i class="fas fa-star">
                                            ใช้ข้อมูลจากรายการโปรด</i></button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_name_six">ชื่อ:</label>
                                    <input type="text" class="form-control" id="safe_name_six">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_lname_six">นามสกุล:</label>
                                    <input type="text" class="form-control" id="safe_lname_six">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="safe_idcard_six">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="safe_idcard_six">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_position_six">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="safe_position_six">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="safe_age_six">อายุ:</label>
                                    <input type="text" class="form-control" id="safe_age_six">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="safe_nationality_six">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="safe_nationality_six">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="safe_phone_six">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="safe_phone_six">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_email_six">Email:</label>
                                    <input type="text" class="form-control" id="safe_email_six">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="safe_houseno_six">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="safe_houseno_six">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="safe_villageno_six">หมู่:</label>
                                    <input type="text" class="form-control" id="safe_villageno_six">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_alley_six">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="safe_alley_six">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_road_six">ถนน:</label>
                                    <input type="text" class="form-control" id="safe_road_six">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_subdistrict_six">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="safe_subdistrict_six">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_district_six">อำเภอ:</label>
                                    <input type="text" class="form-control" id="safe_district_six">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="safe_province_six">จังหวัด:</label>
                                        <input type="text" class="form-control" id="safe_province_six">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="safe_zipcode_six">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="safe_zipcode_six">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_qualification_six">คุณวุฒิ:</label>
                                    <input type="text" class="form-control" id="safe_qualification_six">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_number_six">หมายเลขทะเบียน:</label>
                                    <input type="text" class="form-control" id="safe_number_six">
                                </div>
                            </div>
                            <!-- <br>
                            <div class="form-row text-danger">
                                <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, หนังสือมอบอำนาจ และเอกสารอื่นๆ</h6>
                            </div>
                            <div class="form-row col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input"
                                            aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div> -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save_safesix">
                                <label class="custom-control-label"
                                    for="save_safesix">จัดเก็บข้อมูลเจ้าหน้าที่ความปลอดภัยทางรังสีเป็นรายการโปรด</label>
                            </div>
                            <br>
                            <h6>กรณีที่มีเจ้าหน้าที่ความปลอดภัยทางรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                            <button id="addsafety6" type="button" style='font-size:16px'
                                class="btn btn-outline-primary"><i class='fas fa-plus-circle'></i>
                                เพิ่ม</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo6">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ผู้ปฎิบัติงานรังสี
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo6" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <button id="fav_six_make" type="button" class="btn btn-outline-info btn-sm"
                                        style="float:right;"><i class="fas fa-star">
                                            ใช้ข้อมูลจากรายการโปรด</i></button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_name_six">ชื่อ:</label>
                                    <input type="text" class="form-control" id="make_name_six">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_lname_six">นามสกุล:</label>
                                    <input type="text" class="form-control" id="make_lname_six">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="make_idcard_six">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="make_idcard_six">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_position_six">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="make_position_six">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="make_age_six">อายุ:</label>
                                    <input type="text" class="form-control" id="make_age_six">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="make_nationality_six">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="make_nationality_six">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="make_phone_six">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="make_phone_six">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_email_six">Email:</label>
                                    <input type="text" class="form-control" id="make_email_six">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="make_houseno_six">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="make_houseno_six">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="make_villageno_six">หมู่:</label>
                                    <input type="text" class="form-control" id="make_villageno_six">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_alley_six">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="make_alley_six">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_road_six">ถนน:</label>
                                    <input type="text" class="form-control" id="make_road_six">
                                </div>

                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_subdistrict_six">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="make_subdistrict_six">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_district_six">อำเภอ:</label>
                                    <input type="text" class="form-control" id="make_district_six">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="make_province_six">จังหวัด:</label>
                                        <input type="text" class="form-control" id="make_province_six">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="make_zipcode_six">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="make_zipcode_six">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_qualification_six">คุณวุฒิ:</label>
                                    <input type="text" class="form-control" id="make_qualification_six">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_number_six">หมายเลขทะเบียน:</label>
                                    <input type="text" class="form-control" id="make_number_six">
                                </div>
                            </div>
                            <!-- <br>
                            <div class="form-row text-danger">
                                <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, หนังสือมอบอำนาจ และเอกสารอื่นๆ</h6>
                            </div>
                            <div class="form-row col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input"
                                            aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div> -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save_makesix">
                                <label class="custom-control-label"
                                    for="save_makesix">จัดเก็บข้อมูลผู้ปฏิบัติงานทางรังสีเป็นรายการโปรด</label>
                            </div>
                            <br>
                            <h6>กรณีที่มีผู้ปฎิบัติงานรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                            <button id="addmake6" type="button" style='font-size:16px'
                                class="btn btn-outline-primary"><i class='fas fa-plus-circle'></i>
                                เพิ่ม</button>
                        </div>
                    </div>
                </div>
                <br>

                <div class="container">
                    <div style="float:right;">
                        <button id="backstep6" type="button" class="btn btn-light">ย้อนกลับ</button>
                        <button id="confirm6" type="button" class="btn btn-primary right">ยื่นคำขอใบอนุญาต</button>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="pageConfirm6" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">รายละเอียดการยื่นขอใบอนุญาต
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row-ml-3">
                                    <h6>ชื่อผู้ขอใบอนุญาต:</h6>
                                    <p id="show_person_request" style="color:Gray;">
                                        <?php
                                            $usercompany_name = $_SESSION["name"];
                                            echo ($usercompany_name);
                                        ?>
                                    </p>
                                </div>
                                <hr>
                                <div class="row-ml-3">
                                    <h6>สถานที่ใช้และจัดเก็บวัสดุ:</h6>
                                    <p id="show_chemical_name" style="color:Gray;"></p>
                                    <p id="show_notchemical_name" style="color:Gray;"></p>
                                </div>
                                <hr>
                                <div class="row-ml-3">
                                    <h6>รายละเอียดวัสดุที่ขออนุญาต:</h6>
                                    <p id="show_benefit_material" style="color:Gray;"></p>
                                    <p id="show_vehicle_material" style="color:Gray;"></p>
                                    <p id="show_detail_of_material" style="color:Gray;"></p>
                                    <p id="show_status_material" style="color:Gray;"></p>
                                </div>
                                <hr>
                                <div class="row-ml-3">
                                    <h6>รายละเอียดเจ้าหน้าที่:</h6>
                                    <p id="show_safe_name" style="color:Gray;"></p>
                                    <p id="show_make_name" style="color:Gray;"></p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                <button id="confirm6" type="submit" class="btn btn-primary">ยืนยันคำขอ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- สถานที่กระทำด้วยประการใดๆ -->
    <div class="modal fade" id="show_chemicalsix_location" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดสถานที่กระทำวัสดุทางเคมี</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">รายละเอียดที่อยู่</th>
                                <th scope="col">เบอร์โทรศัพท์</th>
                                <th scope="col">E-mail</th>
                            </tr>
                        </thead>
                        <?php
                            include('php/config/database.php');
                            $requests = array();

                            $sql = "SELECT license.license_id, license.place_id, materiallocation.material_address, materiallocation.material_phone, materiallocation.material_email, materiallocation.fav_location, materiallocation.type_location_material, materiallocation.company_id, materiallocation.material_id
                                    FROM license INNER JOIN materiallocation ON license.license_id = materiallocation.license_id WHERE company_id = ".$_SESSION["company_id"]." AND fav_location = 'select' AND type_location_material = 'CHEMICAL'";
                            $query = mysqli_query($conn,$sql) or die ("Query fail: " . mysqli_error($conn));

                            while($request = mysqli_fetch_assoc($query)){
                                $requests[] = $request;
                            }
                                $i = 1;
                                if(is_array($requests) || is_object($requests)){
                                    foreach($requests as $request){
                        ?>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1"
                                            onclick="select_fav(<?php echo $request['material_id']; ?>,this)">
                                        <label class="form-check-label" for="exampleRadios1">
                                        </label>
                                    </div>
                                </th>
                                <td>
                                    <?php 
                                        echo $request['material_address']; 
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $request['material_phone'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $request['material_email'];
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                                }
                            }
                        ?>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button id="select_fav_locationchemical" type="button" class="btn btn-primary">เลือก</button>
                </div>
            </div>
        </div>
    </div>

    <!-- สถานที่เก็บรักษาวัสดุที่พ้นสภาพแล้ว -->
    <div class="modal fade" id="show_notsix_location" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดสถานที่เก็บรักษาวัสดุที่พ้นสภาพ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">รายละเอียดที่อยู่</th>
                                <th scope="col">เบอร์โทรศัพท์</th>
                                <th scope="col">E-mail</th>
                            </tr>
                        </thead>
                        <?php
                            include('php/config/database.php');
                            $requests = array();

                            $sql1 = "SELECT license.license_id, license.place_id, materiallocation.material_address, materiallocation.material_phone, materiallocation.material_email, materiallocation.fav_location, materiallocation.type_location_material, materiallocation.company_id, materiallocation.material_id
                                    FROM license INNER JOIN materiallocation ON license.license_id = materiallocation.license_id WHERE company_id = ".$_SESSION["company_id"]." AND fav_location = 'select' AND type_location_material = 'NOT CHEMICAL'";
                            $query1 = mysqli_query($conn,$sql1) or die ("Query fail: " . mysqli_error($conn));

                            while($request1 = mysqli_fetch_assoc($query1)){
                                $requests1[] = $request1;
                            }
                                $i = 1;
                                if(is_array($requests1) || is_object($requests1)){
                                    foreach($requests1 as $request1){
                        ?>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1"
                                            onclick="select_fav(<?php echo $request1['material_id']; ?>,this)">
                                        <label class="form-check-label" for="exampleRadios1">
                                        </label>
                                    </div>
                                </th>
                                <td>
                                    <?php 
                                        echo $request1['material_address']; 
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $request1['material_phone'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $request1['material_email'];
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                                }
                            }
                        ?>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button id="select_fav_locationnot" type="button" class="btn btn-primary">เลือก</button>
                </div>
            </div>
        </div>
    </div>

    <!-- รายการโปรดเจ้าหน้าที่ทางรังสี -->
    <div class="modal fade" id="show_favsix_safe" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดเจ้าหน้าที่ทางรังสี</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">ชื่อ-นามสกุล</th>
                                <th scope="col">ตำแหน่ง</th>
                                <th scope="col">รายละเอียดที่อยู่</th>
                            </tr>
                        </thead>
                        <?php
                            include('php/config/database.php');
                            $requests2 = array();

                            $sql2 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_position, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities, companystaff.company_id, companystaff.staff_id
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE company_id = ".$_SESSION["company_id"]." AND type_authorities = 'เจ้าหน้าที่ความปลอดภัยทางรังสี' AND fav_staff = 'select'";
                            $query2 = mysqli_query($conn,$sql2) or die ("Query fail: " . mysqli_error($conn));

                            while($request2 = mysqli_fetch_assoc($query2)){
                                $requests2[] = $request2;
                            }
                                $i = 1;
                                if(is_array($requests2) || is_object($requests2)){
                                    foreach($requests2 as $request2){
                        ?>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1"
                                            onclick="select_fav_staff(<?php echo $request2['staff_id']; ?>,this)">
                                        <label class="form-check-label" for="exampleRadios1">
                                        </label>
                                    </div>
                                </th>
                                <td>
                                    <?php 
                                        echo $request2['staff_name']; 
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $request2['staff_position'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $request2['staff_address'];
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                                }
                            }
                        ?>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button id="select_fav_safesix" type="button" class="btn btn-primary">เลือก</button>
                </div>
            </div>
        </div>
    </div>

    <!-- รายการโปรดผู้ปฏิบัติงานทางรังสี -->
    <div class="modal fade" id="show_favsix_make" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดผู้ปฎิบัติงานทางรังสี</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">ชื่อ-นามสกุล</th>
                                <th scope="col">ตำแหน่ง</th>
                                <th scope="col">รายละเอียดที่อยู่</th>
                            </tr>
                        </thead>
                        <?php
                            include('php/config/database.php');
                            $requests3 = array();

                            $sql3 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_position, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities, companystaff.staff_id, companystaff.company_id
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE company_id = ".$_SESSION["company_id"]." AND type_authorities = 'ผู้ปฏิบัติงานทางรังสี' AND fav_staff = 'select'";
                            $query3 = mysqli_query($conn,$sql3) or die ("Query fail: " . mysqli_error($conn));

                            while($request3 = mysqli_fetch_assoc($query3)){
                                $requests3[] = $request3;
                            }
                                $i = 1;
                                if(is_array($requests3) || is_object($requests3)){
                                    foreach($requests3 as $request3){
                        ?>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1"
                                            onclick="select_fav_staff(<?php echo $request3['staff_id']; ?>,this)">
                                        <label class="form-check-label" for="exampleRadios1">
                                        </label>
                                    </div>
                                </th>
                                <td>
                                    <?php 
                                        echo $request3['staff_name']; 
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $request3['staff_position'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $request3['staff_address'];
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                                }
                            }
                        ?>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button id="select_fav_makesix" type="button" class="btn btn-primary">เลือก</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- script have or nothave permission -->
<script>
$(document).ready(function() {
    $("#nextstepone6").click(function() {
        $("#stepone6").hide();
        $("#steptwo6").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backsteptwo6").click(function() {
        $("#steptwo6").hide();
        $("#stepone6").show();
    });
    $("#nextsteptwo6").click(function() {
        $("#steptwo6").hide();
        $("#stepthree6").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backstep6").click(function() {
        $("#stepthree6").hide();
        $("#steptwo6").show();
    });
});
</script>

<!-- <script>
$(document).ready(function() {
    $("#addsafety6").click(function() {
        $("#detailsafety6").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#addmake6").click(function() {
        $("#detailmake6").show();
    });
});
</script> -->

<script>
$(document).ready(function() {
    $('#headingOne6').click(function() {
        $('#collapseTwo6').collapse('hide');
        $('#collapseOne6').collapse('show');
    });
    $('#headingTwo6').click(function() {
        $('#collapseOne6').collapse('hide');
        $('#collapseTwo6').collapse('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#confirm6').click(function() {
        $('#pageConfirm6').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_chemicalsix_location').click(function() {
        $('#show_chemicalsix_location').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_notsix_location').click(function() {
        $('#show_notsix_location').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_six_safe').click(function() {
        $('#show_favsix_safe').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_six_make').click(function() {
        $('#show_favsix_make').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#confirm6').click(function() {
        var materialsix_address = document.getElementById("location_materialsix_address").value;
        var materialsix_district = document.getElementById("location_materialsix_district").value;
        var materialsix_amphoe = document.getElementById("location_materialsix_amphoe").value;
        var materialsix_province = document.getElementById("location_materialsix_province").value;
        var materialsix_zipcode = document.getElementById("location_materialsix_zipcode").value;
        document.getElementById("show_chemical_name").innerHTML =
            "สถานที่กระทำให้วัสดุพ้นสภาพจากสภาพตามธรรมชาติ: " + materialsix_address + " ต." +
            materialsix_district + " อ." + materialsix_amphoe + " จ." + materialsix_province + " " +
            materialsix_zipcode;

        var location_not_six = document.getElementById("location_not_six").value;
        var location_district_six = document.getElementById("location_district_six").value;
        var location_amphoe_six = document.getElementById("location_amphoe_six").value;
        var location_province_six = document.getElementById("location_province_six").value;
        var location_zipcode_six = document.getElementById("location_zipcode_six").value;
        document.getElementById("show_notchemical_name").innerHTML =
            "สถานที่เก็บรักษาวัสดุที่พ้นสภาพ: " + location_not_six + " ต." + location_district_six +
            " อ." + location_amphoe_six + " จ." + location_province_six + " " + location_zipcode_six;

        var type_benefit_six = document.getElementById("type_benefit_six").value;
        document.getElementById("show_benefit_material").innerHTML = "ประเภทการใช้ประโยชน์: " +
            type_benefit_six;

        var safe_name_six = document.getElementById("safe_name_six").value;
        var safe_lname_six = document.getElementById("safe_lname_six").value;
        var make_name_six = document.getElementById("make_name_six").value;
        var make_lname_six = document.getElementById("make_lname_six").value;
        document.getElementById("show_safe_name").innerHTML = "เจ้าหน้าที่ความปลอดภัยทางรังสี: " +
            safe_name_six + " " + safe_lname_six;
        document.getElementById("show_make_name").innerHTML = "ผู้ปฏิบัติงานรังสี: " + make_name_six +
            " " + make_lname_six;
    });
});
</script>