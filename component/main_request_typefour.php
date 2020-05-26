<div class="container mt-5">
    <div class="row alert alert-light" role="alert" style="height:45px">
        <h5>ใบขออนุญาตประเภท ปส 3ข (สำหรับนำเข้า-ส่งออกวัสดุนิวเคลียร์พิเศษและวัสดุต้นกำลัง)</h5>
    </div>
    <hr>

    <div id="stepone4" class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">ผู้ดำเนินการที่เกี่ยวข้องกับวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">การบรรจุหีบห่อของวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">สถานที่เก็บรักษาวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>รายละเอียดของชนิดวัสดุที่ขออนุญาต: </h5>
            </div>
        </div>

        <div class="row mx-auto">
            <div id="materialopen3" class="col px-md-5">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="material_import" value="นำเข้าราชอาณาจักร" name="material_selected"
                        class="custom-control-input">
                    <label class="custom-control-label" for="material_import">นำหรือสั่งเข้ามาในราชอาณาจักร</label>
                </div>
            </div>
            <div id="materialclose3" class="col px-md-5">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="material_export" value="ส่งออกราชอาณาจักร" name="material_selected"
                        class="custom-control-input">
                    <label class="custom-control-label" for="material_export">นำหรือส่งออกนอกราชอาณาจักร</label>
                </div>
            </div>
        </div>
        <br>

        <div id="closebox4" class="container">
            <div class="form-row">
                <div class="form-group col-3">
                    <label for="material_objective_four">วัตถุประสงค์:</label>
                    <select class="custom-select" id="material_objective_four">
                        <option value="เชื้อเพลิงนิวเคลียร์">เชื้อเพลิงนิวเคลียร์</option>
                        <option value="ศึกษาวิจัย">ศึกษาวิจัย</option>
                        <option value="เครื่องกำบังรังสีทางการแพทย์">เครื่องกำบังรังสีทางการแพทย์</option>
                        <option value="เครื่องกำบังรังสีทางอุตสาหกรรม">เครื่องกำบังรังสีทางอุตสาหกรรม</option>
                        <option value="พัฒนาวัสดุนิวเคลียร์หรือวัสดุต้นกำลัง">พัฒนาวัสดุนิวเคลียร์หรือวัสดุต้นกำลัง
                        </option>
                        <option value="อื่นๆ...">อื่นๆ...</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="materialtype_allow_four">ขออนุญาตวัสดุนิวเคลียร์หรือวัสดุต้นกำลังประเภท:</label>
                    <select class="custom-select" id="materialtype_allow_four">
                        <option value="พลูโตเนียมหรือสารประกอบของพลูโตเนียม">01 พลูโตเนียมหรือสารประกอบของพลูโตเนียม
                        </option>
                        <option value="ยูเรเนียม 233 หรือสารประกอบยูเรเนียม 233">02 ยูเรเนียม 233 หรือสารประกอบยูเรเนียม
                            233</option>
                        <option value="ยูเรเนียม 235 หรือสารประกอบยูเรเนียม 235">03 ยูเรเนียม 235 หรือสารประกอบยูเรเนียม
                            235</option>
                        <option value="วัสดุใดๆ ที่มีวัสดุตามข้อ 01,02 หรือ 03 ผสมกัน">04 วัสดุใดๆ ที่มีวัสดุตามข้อ
                            01,02 หรือ 03 ผสมกัน</option>
                        <option value="ยูเรเนียม">05 ยูเรเนียม</option>
                        <option value="สารประกอบยูเรเนียม">06 สารประกอบยูเรเนียม</option>
                        <option value="ธอเรียม">07 ธอเรียม</option>
                        <option value="สารประกอบธอเรียม">08 สารประกอบธอเรียม</option>
                        <option value="ยูเรเนียมเสื่อมสมรรถนะ">09 ยูเรเนียมเสื่อมสมรรถนะ</option>
                        <option value="ยูเรเนียมหรือสารประกอบยูเรเนียม">10 ยูเรเนียมหรือสารประกอบยูเรเนียม</option>
                        <option value="ธอเรียมหรือสารประกอบธอเรียม">11 ธอเรียมหรือสารประกอบธอเรียม</option>
                        <option value="แร่หรือสินแร่ยูเรเนียมอ๊อกไซด์ตั้งแต่ร้อยละ 15 ขึ้นไป">12
                            แร่หรือสินแร่ยูเรเนียมอ๊อกไซด์ตั้งแต่ร้อยละ 15 ขึ้นไป</option>
                        <option value="แร่หรือสินแร่ธอเรียมอ๊อกไซด์ตั้งแต่ร้อยละ 15 ขึ้นไป">13
                            แร่หรือสินแร่ธอเรียมอ๊อกไซด์ตั้งแต่ร้อยละ 15 ขึ้นไป</option>
                        <option value="แร่หรือสินแร่ยูเรเนียมอ๊อกไซด์และธอเรียมอ๊อกไซด์รวมกันตั้งแต่ร้อยละ 15 ขึ้นไป">14
                            แร่หรือสินแร่ยูเรเนียมอ๊อกไซด์และธอเรียมอ๊อกไซด์รวมกันตั้งแต่ร้อยละ 15
                            ขึ้น</option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="type_transport_four">พาหนะสำหรับการขนส่ง:</label>
                    <select class="custom-select" id="type_transport_four">
                        <option value="เครื่องบิน">เครื่องบิน</option>
                        <option value="เรือ">เรือ</option>
                        <option value="รถยนต์">รถยนต์</option>
                        <option value="รถไฟ">รถไฟ</option>
                        <option value="อื่นๆ...">อื่นๆ...</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="material_area_four">รหัสบริเวณตรวจนับ:</label>
                    <input type="text" class="form-control" id="material_area_four">
                </div>
                <div class="form-group col">
                    <label for="material_workname_four">ชื่อสถานปฏิบัติการ:</label>
                    <input type="text" class="form-control" id="material_workname_four">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="material_nolocation_four">รหัสตำแหน่ง:</label>
                    <input type="text" class="form-control" id="material_nolocation_four">
                </div>
                <div class="form-group col">
                    <label for="material_nobatch_four">ชื่อ/หมายเลข Batch:</label>
                    <input type="text" class="form-control" id="material_nobatch_four">
                </div>
                <div class="form-group col">
                    <label for="material_number_four">จำนวนในรุ่น:</label>
                    <input type="text" class="form-control" id="material_number_four">
                </div>
                <div class="form-group col-4">
                    <label for="material_detail_four">รายละเอียดวัสดุ:</label>
                    <select class="custom-select" id="material_detail_four">
                        <option value="Physical form">Physical form</option>
                        <option value="Chemical form">Chemical form</option>
                        <option value="Containment">Containment</option>
                        <option value="Irradiation status and quality">Irradiation status and quality</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-3">
                    <label for="material_type_four">ประเภทวัสดุ:</label>
                    <select class="custom-select" id="material_type_four">
                        <option value="P สำหรับพลูโตเนียมหรือสารประกอบของพลูโตเนียม">P (รหัสวัสดุ 01)
                            สำหรับพลูโตเนียมหรือสารประกอบของพลูโตเนียม</option>
                        <option value="E สำหรับยูเรเนียมหรือสารประกอบยูเรเนียม 233
                            และ/หรือ 235">E (รหัสวัสดุ 02,03) สำหรับยูเรเนียมหรือสารประกอบยูเรเนียม 233
                            และ/หรือ 235</option>
                        <option value="U สำหรับยูเรเนียมหรือสารประกอบยูเรเนียม">U (รหัสวัสดุ 05,06)
                            สำหรับยูเรเนียมหรือสารประกอบยูเรเนียม</option>
                        <option value="N สำหรับยูเรเนียมธรรมชาติ">N (รหัสวัสดุ 05,06) สำหรับยูเรเนียมธรรมชาติ</option>
                        <option value="T สำหรับธอเรียมหรือสารประกอบธอเรียม">T (รหัสวัสดุ 07,08)
                            สำหรับธอเรียมหรือสารประกอบธอเรียม</option>
                        <option value="D สำหรับยูเรเนียมเสื่อมสมรรถนะ">D (รหัสวัสดุ 09) สำหรับยูเรเนียมเสื่อมสมรรถนะ
                        </option>
                        <option value="รหัสวัสดุ 04 แยกระบุตัวอักษรตามแต่ละชนิดของไอโซโทปที่ผสมกัน">รหัสวัสดุ 04
                            แยกระบุตัวอักษรตามแต่ละชนิดของไอโซโทปที่ผสมกัน
                        </option>
                    </select>
                </div>
                <div class="form-group col-2">
                    <label for="material_weight_four">น้ำหนักของวัสดุ:</label>
                    <input type="text" class="form-control" id="material_weight_four">
                </div>
                <div class="form-group col-1">
                    <label for="material_unit_four">หน่วย:</label>
                    <select class="custom-select" id="material_unit_four">
                        <option value="กิโลกรัม">กิโลกรัม</option>
                        <option value="กรัม">กรัม</option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="material_special_weight_four">น้ำหนักของวัสดุนิวเคลียร์พิเศษ:</label>
                    <input type="text" class="form-control" id="material_special_weight_four">
                </div>
                <div class="form-group col">
                    <label for="material_code_ozotope_four">รหัสไอโซโทป:</label>
                    <select class="custom-select" id="material_code_ozotope_four">
                        <option value="G">G วัสดุนิวเคลียร์พิเศษที่ประกอบด้วยยูเรเนียม 235</option>
                        <option value="J">J วัสดุนิวเคลียร์พิเศษที่ประกอบด้วยยูเรเนียม 235 และ 233</option>
                        <option value="K">K วัสดุนิวเคลียร์พิเศษที่ประกอบด้วยยูเรเนียม 233</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="material_code_work_four">รหัสหน่วยงาน:</label>
                    <input type="text" class="form-control" id="material_code_work_four">
                </div>
                <div class="form-group col-7">
                    <label for="material_workaddress_four">สถานที่ใช้งาน:</label>
                    <input type="text" class="form-control" id="material_workaddress_four">
                </div>
                <div class="form-group col-3">
                    <label for="person_storage_district">การใช้ประโยชน์:</label>
                    <input type="text" class="form-control" id="material_benefit_four">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-4">
                    <label for="material_special_type_four">วัสดุนิวเคลียร์พิเศษ ชนิด:</label>
                    <select class="custom-select" id="material_special_type_four">
                        <option value="ยูเรเนียม">05 ยูเรเนียม</option>
                        <option value="สารประกอบยูเรเนียม">06 สารประกอบยูเรเนียม</option>
                        <option value="ธอเรียม">07 ธอเรียม</option>
                        <option value="สารประกอบธอเรียม">08 สารประกอบธอเรียม</option>
                        <option value="ยูเรเนียมเสื่อมสมรรถนะ">09 ยูเรเนียมเสื่อมสมรรถนะ</option>
                    </select>
                </div>
                <div class="form-group col-2">
                    <label for="weight_kg_four">น้ำหนัก(กิโลกรัม):</label>
                    <input type="text" class="form-control" id="weight_kg_four">
                </div>
                <div class="form-group col">
                    <label for="nomaterial_four">รุ่น/หมายเลขวัสดุ:</label>
                    <input type="text" class="form-control" id="nomaterial_four">
                </div>
                <div class="form-group col">
                    <label for="workage_four">อายุการใช้งาน(ปี):</label>
                    <input type="text" class="form-control" id="workage_four">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="addressname_produce_four">ที่อยู่บริษัทผู้ผลิต:</label>
                    <input type="text" class="form-control" id="addressname_produce_four">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="addressname_sale_four">ที่อยู่บริษัทผู้แทนจำหน่าย:</label>
                    <input type="text" class="form-control" id="addressname_sale_four">
                </div>
            </div>
            <div id="selecthave4" class="row mx-auto">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline18" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline18">มีใบอนุญาตผลิต
                        มีไว้ในครอบครองหรือใช้วัสดุพลอยได้</label>
                </div>
                <hr>
                <div id="detailhave4" class="container" style="display:none;">
                    <div class="row">
                        <form class="form-inline">
                            <div class="form-group col-4">
                                <label for="location_material_licenseno_four">ใบอนุญาตเลขที่:</label>
                                <input type="text" class="form-control mx-sm-3" aria-describedby="passwordHelpInline"
                                    id="location_material_licenseno_four">
                            </div>
                            <div class="form-group col-4">
                                <label for="location_material_licensedate_four">หมดอายุวันที่:</label>
                                <input type="text" class="form-control mx-sm-3" aria-describedby="passwordHelpInline"
                                    id="location_material_licensedate_four">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div id="selectnothave4" class="row mx-auto">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline19" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline19">ไม่มีใบอนุญาตผลิต
                        มีไว้ในครอบครองหรือใช้วัสดุพลอยได้</label>
                </div>
                <div id="detailnothave4" class="container" style="display:none;">
                    <div class="row">
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="location_material_startlicense_four">ยื่นแบบคำขออนุญาตเมื่อวันที่:</label>
                                <input type="text" class="form-control mx-sm-3" aria-describedby="passwordHelpInline"
                                    id="location_material_startlicense_four">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="float-right">
                <button id="nextstepone4" type="button" class="btn btn-primary">ถัดไป</button>
            </div>
        </div>
    </div>

    <div id="steptwo4" class="container" style="display:none;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">ผู้ดำเนินการที่เกี่ยวข้องกับวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">การบรรจุหีบห่อของวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">สถานที่เก็บรักษาวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne4">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                ผู้แทนจำหน่ายที่ได้รับมอบหมายให้นำเข้าหรือส่งออกทั้งในและนอกราชอาณาจักร
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne4" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <button id="fav_four_sale" type="button" class="btn btn-outline-info btn-sm"
                                        style="float:right;"><i class="fas fa-star">
                                            ใช้ข้อมูลจากรายการโปรด</i></button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="sale_name_four">ชื่อ:</label>
                                    <input type="text" class="form-control" id="sale_name_four">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="sale_lname_four">นามสกุล:</label>
                                    <input type="text" class="form-control" id="sale_lname_four">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="sale_idcard_four">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="sale_idcard_four">
                                </div>
                                <div class="form-group col-2">
                                    <label for="sale_age_four">อายุ:</label>
                                    <input type="text" class="form-control" id="sale_age_four">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="sale_position_four">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="sale_position_four">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_nationality_four">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="sale_nationality_four">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_email_four">Email:</label>
                                    <input type="text" class="form-control" id="sale_email_four">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="sale_phone_four">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="sale_phone_four">
                                </div>
                            </div>
                            <!--  -->
                            <div class="container">
                                <div class="row alert alert-light" role="alert" style="height:45px">
                                    <h5>สถานที่ทำการ</h5>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="sale_work_name_four">ชื่อสถานที่ทำการ:</label>
                                    <input type="text" class="form-control" id="sale_work_name_four">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="sale_work_houseno_four">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="sale_work_houseno_four">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="sale_work_villageno_four">หมู่:</label>
                                    <input type="text" class="form-control" id="sale_work_villageno_four">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_work_alley_four">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="sale_work_alley_four">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_work_road_four">ถนน:</label>
                                    <input type="text" class="form-control" id="sale_work_road_four">
                                </div>

                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="sale_work_subdistrict_four">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="sale_work_subdistrict_four">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_work_district_four">อำเภอ:</label>
                                    <input type="text" class="form-control" id="sale_work_district_four">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="sale_work_province_four">จังหวัด:</label>
                                        <input type="text" class="form-control" id="sale_work_province_four">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="sale_work_zipcode_four">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="sale_work_zipcode_four">
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save_location_salework_four">
                                <label class="custom-control-label"
                                    for="save_location_salework_four">จัดเก็บข้อมูลผู้แทนจำหน่ายเป็นรายการโปรด</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo4">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ผู้ดำเนินการตามพิธีศุลกากร
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <button id="fav_four_handler" type="button" class="btn btn-outline-info btn-sm"
                                        style="float:right;"><i class="fas fa-star">
                                            ใช้ข้อมูลจากรายการโปรด</i></button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="handler_name_four">ชื่อ:</label>
                                    <input type="text" class="form-control" id="handler_name_four">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="handler_lname_four">นามสกุล:</label>
                                    <input type="text" class="form-control" id="handler_lname_four">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="handler_idcard_four">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="handler_idcard_four">
                                </div>
                                <div class="form-group col-2">
                                    <label for="handler_age_four">อายุ:</label>
                                    <input type="text" class="form-control" id="handler_age_four">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="handler_position_four">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="handler_position_four">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_nationality_four">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="handler_nationality_four">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_email_four">Email:</label>
                                    <input type="text" class="form-control" id="handler_email_four">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="handler_phone_four">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="handler_phone_four">
                                </div>
                            </div>
                            <!--  -->

                            <div class="container">
                                <div class="row alert alert-light" role="alert" style="height:45px">
                                    <h5>สถานที่ทำการ</h5>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="handler_work_name_four">ชื่อสถานที่ทำการ:</label>
                                    <input type="text" class="form-control" id="handler_work_name_four">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="handler_work_houseno_four">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="handler_work_houseno_four">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="handler_work_villageno_four">หมู่:</label>
                                    <input type="text" class="form-control" id="handler_work_villageno_four">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_work_alley_four">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="handler_work_alley_four">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_work_road_four">ถนน:</label>
                                    <input type="text" class="form-control" id="handler_work_road_four">
                                </div>

                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="handler_work_subdistrict_four">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="handler_work_subdistrict_four">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_work_district_four">อำเภอ:</label>
                                    <input type="text" class="form-control" id="handler_work_district_four">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="handler_work_province_four">จังหวัด:</label>
                                        <input type="text" class="form-control" id="handler_work_province_four">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="handler_work_zipcode_four">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="handler_work_zipcode_four">
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save_location_handlerwork_four">
                                <label class="custom-control-label"
                                    for="save_location_handlerwork_four">จัดเก็บข้อมูลผู้ดำเนินการตามพิธีศุลกากรเป็นรายการโปรด</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree4">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                ผู้รับปลายทาง กรณีนำเข้าหรือส่งออกนอกราชอาณาจักรซึ่งวัสดุพลอยได้
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree4" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <button id="fav_four_destination" type="button" class="btn btn-outline-info btn-sm"
                                        style="float:right;"><i class="fas fa-star">
                                            ใช้ข้อมูลจากรายการโปรด</i></button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="destination_work_name_four">ชื่อสถานที่ทำการ:</label>
                                    <input type="text" class="form-control" id="destination_work_name_four">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="destination_work_houseno_four">เลขที่:</label>
                                    <input type="text" class="form-control" id="destination_work_houseno_four">
                                </div>
                                <div class="form-group col">
                                    <label for="destination_work_road_four">ถนน:</label>
                                    <input type="text" class="form-control" id="destination_work_road_four">
                                </div>
                                <div class="form-group col">
                                    <label for="destination_work_city_four">เมือง/รัฐ:</label>
                                    <input type="text" class="form-control" id="destination_work_city_four">
                                </div>
                                <div class="form-group col">
                                    <label for="destination_work_country_four">ประเทศ:</label>
                                    <input type="text" class="form-control" id="destination_work_country_four">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="destination_work_phone_four">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="destination_work_phone_four">
                                </div>
                                <div class="form-group col">
                                    <label for="destination_work_email_four">Email:</label>
                                    <input type="text" class="form-control" id="destination_work_email_four">
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"
                                    id="save_location_destinationwork_four">
                                <label class="custom-control-label"
                                    for="save_location_destinationwork_four">จัดเก็บข้อมูลผู้รับปลายทางเป็นรายการโปรด</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="container">
            <div class="float-right">
                <button id="backsteptwo4" type="button" class="btn btn-light">ย้อนกลับ</button>
                <button id="nextsteptwo4" type="button" class="btn btn-primary">ถัดไป</button>
            </div>
        </div>
        <br>
    </div>

    <div id="stepthree4" class="container" style="display:none;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">ผู้ดำเนินการที่เกี่ยวข้องกับวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">การบรรจุหีบห่อของวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">สถานที่เก็บรักษาวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>การบรรจุหีบห่อของวัสดุพลอยได้</h5>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="style_four">ลักษณะและขนาดของหีบห่อ:</label>
                    <input type="text" class="form-control" id="style_four">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="styletype_four">ชนิดหีบห่อ:</label>
                    <select class="custom-select" id="styletype_four">
                        <option value="Excepted">Excepted</option>
                        <option value="IP-1">IP-1</option>
                        <option value="IP-2">IP-2</option>
                        <option value="IP-3">IP-3</option>
                        <option value="A">A</option>
                        <option value="B(U)">B(U)</option>
                        <option value="B(M)">B(M)</option>
                        <option value="C">C</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="unnumber_four">หมายเลขสหประชาชาติ (UN number):</label>
                    <input type="text" class="form-control" id="unnumber_four">
                </div>
            </div>
        </div>

        <div class="float-right">
            <button id="backstepthree4" type="button" class="btn btn-light">ย้อนกลับ</button>
            <button id="nextstepthree4" type="button" class="btn btn-primary">ถัดไป</button>
        </div>
    </div>

    <div id="stepfour4" class="container" style="display:none;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">ผู้ดำเนินการที่เกี่ยวข้องกับวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">การบรรจุหีบห่อของวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">สถานที่เก็บรักษาวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>สถานที่เก็บรักษาวัสดุพลอยได้ที่นำหรือสั่งเข้ามาในราชอาณาจักร</h5>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <button id="fav_importfour_location" type="button" class="btn btn-outline-info btn-sm"
                        style="float:right;"><i class="fas fa-star">
                            ใช้ข้อมูลจากรายการโปรด</i></button>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="import_material_addrress_four">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="import_material_addrress_four">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="import_material_district_four">ตำบล:</label>
                    <input type="text" class="form-control" id="import_material_district_four">
                </div>
                <div class="form-group col">
                    <label for="import_material_amphoe_four">อำเภอ:</label>
                    <input type="text" class="form-control" id="import_material_amphoe_four">
                </div>
                <div class="form-group col">
                    <label for="import_material_province_four">จังหวัด:</label>
                    <input type="text" class="form-control" id="import_material_province_four">
                </div>
                <div class="form-group col">
                    <label for="import_material_zipcode_four">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="import_material_zipcode_four">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="import_material_phone_four">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="import_material_phone_four">
                </div>
                <div class="form-group col">
                    <label for="import_material_email_four">Email:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="import_material_email_four">
                </div>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save_location_import_four">
                <label class="custom-control-label"
                    for="save_location_import_four">จัดเก็บข้อมูลสถานที่เก็บรักษานำเข้าหรือส่งออกเป็นรายการโปรด</label>
            </div>
            <br>
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>สถานที่เก็บรักษาวัสดุพลอยได้ขณะรอดำเนินการนำหรือส่งออกนอกราชอาณาจักร</h5>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <button id="fav_exportfour_location" type="button" class="btn btn-outline-info btn-sm"
                        style="float:right;"><i class="fas fa-star">
                            ใช้ข้อมูลจากรายการโปรด</i></button>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="export_material_address_four">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="export_material_address_four">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="export_material_district_four">ตำบล:</label>
                    <input type="text" class="form-control" id="export_material_district_four">
                </div>
                <div class="form-group col">
                    <label for="export_material_amphoe_four">อำเภอ:</label>
                    <input type="text" class="form-control" id="export_material_amphoe_four">
                </div>
                <div class="form-group col">
                    <label for="export_material_province_four">จังหวัด:</label>
                    <input type="text" class="form-control" id="export_material_province_four">
                </div>
                <div class="form-group col">
                    <label for="export_material_zipcode_four">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="export_material_zipcode_four">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="export_material_phone_four">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="export_material_phone_four">
                </div>
                <div class="form-group col">
                    <label for="export_material_email_four">Email:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="export_material_email_four">
                </div>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save_location_export_four">
                <label class="custom-control-label"
                    for="save_location_export_four">จัดเก็บข้อมูลสถานที่เก็บรักษาขณะรอดำเนินการเป็นรายการโปรด</label>
            </div>
        </div>
        <div class="container">
            <div style="float:right;">
                <button id="backstep4" type="button" class="btn btn-light">ย้อนกลับ</button>
                <button id="confirm4" type="button" class="btn btn-primary right">ยื่นคำขอใบอนุญาต</button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="pageConfirm4" tabindex="-1" role="dialog"
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
                            <p id="show_location_name" style="color:Gray;"></p>
                        </div>
                        <hr>
                        <div class="row-ml-3">
                            <h6>รายละเอียดวัสดุที่ขออนุญาต:</h6>
                            <p id="show_imorex_material" style="color:Gray;"></p>
                            <p id="show_detail_material" style="color:Gray;"></p>
                            <p id="show_transport_material" style="color:Gray;"></p>
                            <p id="show_detail_of_material" style="color:Gray;"></p>
                            <p id="show_type_material" style="color:Gray;"></p>
                            <p id="show_weight_material" style="color:Gray;"></p>
                        </div>
                        <hr>
                        <div class="row-ml-3">
                            <h6>รายละเอียดเจ้าหน้าที่:</h6>
                            <p id="show_safe_name" style="color:Gray;"></p>
                            <p id="show_handler_name" style="color:Gray;"></p>
                            <p id="show_destination_name" style="color:Gray;"></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        <button id="confirm4" type="submit" class="btn btn-primary">ยืนยันคำขอ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ผู้แทนจำหน่ายให้นำเข้าหรือส่งออก -->
    <div class="modal fade" id="show_four_sale" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดผู้แทนจำหน่ายนำเข้าหรือส่งออก</h5>
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
                                <th scope="col">สถานที่ทำการ</th>
                                <th scope="col">รายละเอียดที่อยู่</th>
                            </tr>
                        </thead>
                        <?php
                            include('php/config/database.php');
                            $requests1 = array();

                            $sql1 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_work_name, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE place_id = ".$_SESSION["company_id"]." AND type_authorities = 'ผู้แทนจำหน่ายที่ได้รับมอบหมายให้นำเข้าหรือส่งออก' AND fav_staff = 'select'";
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
                                            id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                        </label>
                                    </div>
                                </th>
                                <td>
                                    <?php 
                                        echo $request1['staff_name']; 
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $request1['staff_work_name'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $request1['staff_address'];
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
                    <button type="button" class="btn btn-primary">เลือก</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ผู้ดำเนินการตามพิธีศุลกากร -->
    <div class="modal fade" id="show_four_handler" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดผู้ดำเนินตามพิธีศุลกากร</h5>
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
                            $requests2 = array();

                            $sql2 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_work_name, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE place_id = ".$_SESSION["company_id"]." AND type_authorities = 'ผู้ดำเนินการตามพิธีศุลกากร' AND fav_staff = 'select'";
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
                                            id="exampleRadios1" value="option1" checked>
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
                                        echo $request2['staff_work_name'];
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
                    <button type="button" class="btn btn-primary">เลือก</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ผู้รับปลายทาง -->
    <div class="modal fade" id="show_four_destination" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดผู้รับปลายทาง</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">ชื่อสถานที่ทำการ</th>
                                <th scope="col">รายละเอียดที่อยู่</th>
                                <th scope="col">หมายเลขโทรศัพท์</th>
                            </tr>
                        </thead>
                        <?php
                            include('php/config/database.php');
                            $requests3 = array();

                            $sql3 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_work_name, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities, companystaff.staff_phone
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE place_id = ".$_SESSION["company_id"]." AND type_authorities = 'ผู้รับปลายทางนำเข้าหรือส่งออก' AND fav_staff = 'select'";
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
                                            id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                        </label>
                                    </div>
                                </th>
                                <td>
                                    <?php 
                                        echo $request3['staff_work_name']; 
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $request3['staff_address'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $request3['staff_phone'];
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
                    <button type="button" class="btn btn-primary">เลือก</button>
                </div>
            </div>
        </div>
    </div>

    <!-- import -->
    <div class="modal fade" id="show_four_import" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดสถานที่เก็บรักษาวัสดุนำเข้า</h5>
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
                            $requests4 = array();

                            $sql4 = "SELECT license.license_id, license.place_id, materiallocation.material_address, materiallocation.material_phone, materiallocation.material_email, materiallocation.fav_location, materiallocation.type_location_material
                                    FROM license INNER JOIN materiallocation ON license.license_id = materiallocation.license_id WHERE place_id = ".$_SESSION["company_id"]." AND fav_location = 'select' AND type_location_material = 'IMPORT MATERIAL'";
                            $query4 = mysqli_query($conn,$sql4) or die ("Query fail: " . mysqli_error($conn));

                            while($request4 = mysqli_fetch_assoc($query4)){
                                $requests4[] = $request4;
                            }
                                $i = 1;
                                if(is_array($requests4) || is_object($requests4)){
                                    foreach($requests4 as $request4){
                        ?>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                        </label>
                                    </div>
                                </th>
                                <td>
                                    <?php 
                                        echo $request4['material_address']; 
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $request4['material_phone'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $request4['material_email'];
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
                    <button type="button" class="btn btn-primary">เลือก</button>
                </div>
            </div>
        </div>
    </div>

    <!-- export -->
    <div class="modal fade" id="show_four_export" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดสถานที่เก็บรักษาวัสดุส่งออก</h5>
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
                            $requests5 = array();

                            $sql5 = "SELECT license.license_id, license.place_id, materiallocation.material_address, materiallocation.material_phone, materiallocation.material_email, materiallocation.fav_location, materiallocation.type_location_material
                                    FROM license INNER JOIN materiallocation ON license.license_id = materiallocation.license_id WHERE place_id = ".$_SESSION["company_id"]." AND fav_location = 'select' AND type_location_material = 'EXPORT MATERIAL'";
                            $query5 = mysqli_query($conn,$sql5) or die ("Query fail: " . mysqli_error($conn));

                            while($request5 = mysqli_fetch_assoc($query5)){
                                $requests5[] = $request5;
                            }
                                $i = 1;
                                if(is_array($requests5) || is_object($requests5)){
                                    foreach($requests5 as $request5){
                        ?>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                        </label>
                                    </div>
                                </th>
                                <td>
                                    <?php 
                                        echo $request5['material_address']; 
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $request5['material_phone'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $request5['material_email'];
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
                    <button type="button" class="btn btn-primary">เลือก</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- script have or nothave permission -->
<script>
$(document).ready(function() {
    $("#nextstepone4").click(function() {
        $("#stepone4").hide();
        $("#steptwo4").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backsteptwo4").click(function() {
        $("#steptwo4").hide();
        $("#stepone4").show();
    });
    $("#nextsteptwo4").click(function() {
        $("#steptwo4").hide();
        $("#stepthree4").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backstepthree4").click(function() {
        $("#stepthree4").hide();
        $("#steptwo4").show();
    });
    $("#nextstepthree4").click(function() {
        $("#stepthree4").hide();
        $("#stepfour4").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backstep4").click(function() {
        $("#stepfour4").hide();
        $("#stepthree4").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#selecthave4").click(function() {
        $("#detailnothave4").hide();
        $("#detailhave4").show();
    });
    $("#selectnothave4").click(function() {
        $("#detailhave4").hide();
        $("#detailnothave4").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $('#headingOne4').click(function() {
        $('#collapseTwo4').collapse('hide');
        $('#collapseThree4').collapse('hide');
        $('#collapseOne4').collapse('show');
    });
    $('#headingTwo4').click(function() {
        $('#collapseOne4').collapse('hide');
        $('#collapseThree4').collapse('hide');
        $('#collapseTwo4').collapse('show');
    });
    $('#headingThree4').click(function() {
        $('#collapseOne4').collapse('hide');
        $('#collapseTwo4').collapse('hide');
        $('#collapseThree4').collapse('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#confirm4').click(function() {
        $('#pageConfirm4').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_four_sale').click(function() {
        $('#show_four_sale').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_four_handler').click(function() {
        $('#show_four_handler').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_four_destination').click(function() {
        $('#show_four_destination').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_importfour_location').click(function() {
        $('#show_four_export').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_exportfour_location').click(function() {
        $('#show_four_import').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#confirm4').click(function() {
        var material_workname_four = document.getElementById("material_workname_four").value;
        document.getElementById("show_location_name").innerHTML = "ชื่อสถานปฏิบัติการ: " +
            material_workname_four;

        var select_import = document.getElementById('material_selected');
        var select_export = document.getElementById('material_selected');

        if (document.getElementById('material_import').checked) {
            select_import = document.getElementById('material_import').value;
            document.getElementById("show_imorex_material").innerHTML = "ขออนุญาตเพื่อ: " +
                select_import;
        } else if (document.getElementById('material_export').checked) {
            select_export = document.getElementById('material_export').value;
            document.getElementById("show_imorex_material").innerHTML = "ขออนุญาตเพื่อ: " +
                select_export;
        }

        var materialtype_allow_four = document.getElementById("materialtype_allow_four").value;
        var type_transport_four = document.getElementById("type_transport_four").value;
        var material_detail_four = document.getElementById("material_detail_four").value;
        var material_type_four = document.getElementById("material_type_four").value;
        var material_weight_four = document.getElementById("material_weight_four").value;
        var material_unit_four = document.getElementById("material_unit_four").value;
        document.getElementById("show_detail_material").innerHTML =
            "ขออนุญาตวัสดุนิวเคลียร์หรือวัสดุต้นกำลังประเภท: " + materialtype_allow_four;
        document.getElementById("show_transport_material").innerHTML = "พาหนะสำหรับการขนส่ง: " +
            type_transport_four;
        document.getElementById("show_detail_of_material").innerHTML = "รายละเอียดวัสดุ: " +
            material_detail_four;
        document.getElementById("show_type_material").innerHTML = "ประเภทวัสดุ: " + material_type_four;
        document.getElementById("show_weight_material").innerHTML = "น้ำหนักของวัตถุ: " +
            material_weight_four + " " + material_unit_four;

        var sale_name_four = document.getElementById("sale_name_four").value;
        var sale_lname_four = document.getElementById("sale_lname_four").value;
        var sale_work_name_four = document.getElementById("sale_work_name_four").value;
        var handler_name_four = document.getElementById("handler_name_four").value;
        var handler_lname_four = document.getElementById("handler_lname_four").value;
        var handler_work_name_four = document.getElementById("handler_work_name_four").value;
        var destination_work_name_four = document.getElementById("destination_work_name_four").value;
        document.getElementById("show_safe_name").innerHTML = "ผู้แทนจำหน่ายให้นำเข้าหรือส่งออก: " +
            sale_name_four + " " + sale_lname_four + " ชื่อสถานที่ทำการ: " + sale_work_name_four;
        document.getElementById("show_handler_name").innerHTML = "ผู้ดำเนินการตามพิธีศุลกากร: " +
            handler_name_four + " " + handler_lname_four + " ชื่อสถานที่ทำการ: " +
            handler_work_name_four;
        document.getElementById("show_destination_name").innerHTML = "ผู้รับปลายทาง: " +
            destination_work_name_four;
    });
});
</script>