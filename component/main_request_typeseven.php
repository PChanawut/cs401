<div class="container mt-5">
    <div id="stepone7" class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">รายละเอียดวัสดุที่ขออนุญาต</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">เจ้าหน้าที่ที่เกี่ยวข้องกับวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>สถานที่ใช้และจัดเก็บวัสดุ</h5>
            </div>

            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_address">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_district">ตำบล:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_storage_amphoe">อำเภอ:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_storage_province">จังหวัด:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_storage_zipcode">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_address">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_storage_address">Email:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_nametitle">ประเภทการใช้ประโยชน์:</label>
                    <select class="custom-select">
                        <option value="การแพทย์">การแพทย์</option>
                        <option value="อุตสาหกรรม">อุตสาหกรรม</option>
                        <option value="ศึกษาวิจัย">ศึกษาวิจัย</option>
                        <option value="ระบบรักษาความปลอดภัย">ระบบรักษาความปลอดภัย</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="float-right">
            <button id="nextstepone7" type="button" class="btn btn-primary">ถัดไป</button>
        </div>
    </div>

    <div id="steptwo7" class="container" style="display:none;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">รายละเอียดวัสดุที่ขออนุญาต</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">เจ้าหน้าที่ที่เกี่ยวข้องกับวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>รายละเอียดของชนิดวัสดุที่ขออนุญาต: </h5>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="name">ทะเบียนอ้างอิง:</label>
                    <input type="name" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_nametitle">รหัสประเภทการใช้งาน:</label>
                    <select class="custom-select">
                        <option value="Security X-ray System">01 Security X-ray System</option>
                        <option value="Industrial X-ray">02 Industrial X-ray</option>
                        <option value="Research X-ray">03 Research X-ray</option>
                        <option value="Medical Diagnostic">04 Medical Diagnostic</option>
                        <option value="Radiotherapy X-ray">05 Radiotherapy X-ray</option>
                        <option value="LINAC">06 LINAC</option>
                        <option value="Cyclotron">07 Cyclotron</option>
                        <option value="Synchrotron">08 Synchrotron</option>
                        <option value="อื่นๆ">09 อื่นๆ...</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">ผู้ผลิต:</label>
                    <input type="name" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="name">รุ่น:</label>
                    <input type="name" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">หมายเลขเครื่องกำเนิดรังสี:</label>
                    <input type="name" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_nametitle">ลักษณะการใช้งาน:</label>
                    <select class="custom-select">
                        <option value="Flex">01 Flex ลักษณะการใช้งานติดตั้งถาวร ไม่มีการเคลื่อนย้าย</option>
                        <option value="Mobile">02 Mobile ลักศณะการใช้งานแบบเคลื่อนย้ายได้</option>
                        <option value="Portable">03 Portable ลักษณะการใช้งานแบบหิ้วได้</option>
                        <option value="Stationary">04 Stationary ลักษณะการใช้งานแบบติดตั้งประจำที่</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="name">กำลัง/พลังงานสูงสุด (กิโลโวลต์):</label>
                    <input type="name" class="form-control">
                </div>
                <div class="form-group col-md">
                    <label for="name">กำลัง/พลังงานสูงสุด (เมกกะอิเลคตรอนโวล์):</label>
                    <input type="name" class="form-control">
                </div>
                <div class="form-group col-md">
                    <label for="name">กำลัง/พลังงานสูงสุด (มิลลิแอมแปร์):</label>
                    <input type="name" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="name">ชื่อสถานที่เก็บ ติดตั้งหรือใช้งาน:</label>
                    <input type="name" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="name">ชื่อบริษัทผู้แทนจำหน่าย(ที่อยู่):</label>
                    <input type="name" class="form-control">
                </div>
            </div>
        </div>

        <div class="float-right">
            <button id="backsteptwo7" type="button" class="btn btn-light">ย้อนกลับ</button>
            <button id="nextsteptwo7" type="button" class="btn btn-primary">ถัดไป</button>
        </div>
    </div>

    <div id="stepthree7" class="container" style="display:none;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">รายละเอียดวัสดุที่ขออนุญาต</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">เจ้าหน้าที่ที่เกี่ยวข้องกับวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne7">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                เจ้าหน้าที่ความปลอดภัยทางรังสี
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne7" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="name">ชื่อ:</label>
                                    <input type="name" class="form-control" placeholder="name">
                                </div>
                                <div class="form-group col-md">
                                    <label for="lname">นามสกุล:</label>
                                    <input type="lname" class="form-control" placeholder="lname">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="idcard">เลขประจำตัวประชาชน:</label>
                                    <input type="idcard" class="form-control" placeholder="idcard">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="position">ตำแหน่ง:</label>
                                    <input type="position" class="form-control" placeholder="position">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="age">อายุ:</label>
                                    <input type="age" class="form-control" placeholder="age">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="nationality">สัญชาติ:</label>
                                    <input type="nationality" class="form-control" placeholder="nationality">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="birthday">หมายเลขโทรศัพท์:</label>
                                    <input type="birthday" class="form-control" placeholder="phonenumber">
                                </div>
                                <div class="form-group col-md">
                                    <label for="alley">Email:</label>
                                    <input type="alley" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="houseno">บ้านเลขที่:</label>
                                    <input type="houseno" class="form-control" placeholder="houseno">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="villageno">หมู่:</label>
                                    <input type="villageno" class="form-control" placeholder="villageno">
                                </div>
                                <div class="form-group col-md">
                                    <label for="alley">ตรอก / ซอย:</label>
                                    <input type="alley" class="form-control" placeholder="alley">
                                </div>
                                <div class="form-group col-md">
                                    <label for="road">ถนน:</label>
                                    <input type="road" class="form-control" placeholder="road">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="subdistrict">ตำบล / แขวง:</label>
                                    <input type="subdistrict" class="form-control" placeholder="subdistrict">
                                </div>
                                <div class="form-group col-md">
                                    <label for="district">อำเภอ:</label>
                                    <input type="district" class="form-control" placeholder="district">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="alley">จังหวัด:</label>
                                        <input type="alley" class="form-control" placeholder="จังหวัด">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="road">รหัสไปรษณีย์:</label>
                                        <input type="road" class="form-control" placeholder="รหัสไปรษณีย์">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="alley">คุณวุฒิ:</label>
                                    <input type="alley" class="form-control" placeholder="คุณวุฒิ">
                                </div>
                                <div class="form-group col-md">
                                    <label for="alley">หมายเลขทะเบียน:</label>
                                    <input type="alley" class="form-control" placeholder="หมายเลขทะเบียน">
                                </div>
                            </div>
                            <br>
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
                            </div>

                            <br>
                            <h6>กรณีที่มีเจ้าหน้าที่ความปลอดภัยทางรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                            <button id="addsafety7" type="button" style='font-size:16px'
                                class="btn btn-outline-primary"><i class='fas fa-plus-circle'></i>
                                เพิ่ม</button>
                            <div id="detailsafety7" style="display:none;">
                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="name">ชื่อ:</label>
                                        <input type="name" class="form-control" placeholder="name">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="lname">นามสกุล:</label>
                                        <input type="lname" class="form-control" placeholder="lname">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="idcard">เลขประจำตัวประชาชน:</label>
                                        <input type="idcard" class="form-control" placeholder="idcard">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="position">ตำแหน่ง:</label>
                                        <input type="position" class="form-control" placeholder="position">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="age">อายุ:</label>
                                        <input type="age" class="form-control" placeholder="age">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="nationality">สัญชาติ:</label>
                                        <input type="nationality" class="form-control" placeholder="nationality">
                                    </div>
                                    <div class="form-group col-md">
                                        <!-- Don't forget change type and id -->
                                        <label for="birthday">หมายเลขโทรศัพท์:</label>
                                        <input type="birthday" class="form-control" placeholder="phonenumber">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="alley">Email:</label>
                                        <input type="alley" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="houseno">บ้านเลขที่:</label>
                                        <input type="houseno" class="form-control" placeholder="houseno">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="villageno">หมู่:</label>
                                        <input type="villageno" class="form-control" placeholder="villageno">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="alley">ตรอก / ซอย:</label>
                                        <input type="alley" class="form-control" placeholder="alley">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="road">ถนน:</label>
                                        <input type="road" class="form-control" placeholder="road">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="subdistrict">ตำบล / แขวง:</label>
                                        <input type="subdistrict" class="form-control" placeholder="subdistrict">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="district">อำเภอ:</label>
                                        <input type="district" class="form-control" placeholder="district">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md">
                                            <label for="alley">จังหวัด:</label>
                                            <input type="alley" class="form-control" placeholder="จังหวัด">
                                        </div>
                                        <div class="form-group col-md">
                                            <label for="road">รหัสไปรษณีย์:</label>
                                            <input type="road" class="form-control" placeholder="รหัสไปรษณีย์">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="alley">คุณวุฒิ:</label>
                                        <input type="alley" class="form-control" placeholder="คุณวุฒิ">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="alley">หมายเลขทะเบียน:</label>
                                        <input type="alley" class="form-control" placeholder="หมายเลขทะเบียน">
                                    </div>
                                </div>
                                <br>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo7">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ผู้ปฎิบัติงานรังสี
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="name">ชื่อ:</label>
                                    <input type="name" class="form-control" placeholder="name">
                                </div>
                                <div class="form-group col-md">
                                    <label for="lname">นามสกุล:</label>
                                    <input type="lname" class="form-control" placeholder="lname">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="idcard">เลขประจำตัวประชาชน:</label>
                                    <input type="idcard" class="form-control" placeholder="idcard">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="position">ตำแหน่ง:</label>
                                    <input type="position" class="form-control" placeholder="position">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="age">อายุ:</label>
                                    <input type="age" class="form-control" placeholder="age">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="nationality">สัญชาติ:</label>
                                    <input type="nationality" class="form-control" placeholder="nationality">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="birthday">หมายเลขโทรศัพท์:</label>
                                    <input type="birthday" class="form-control" placeholder="phonenumber">
                                </div>
                                <div class="form-group col-md">
                                    <label for="alley">Email:</label>
                                    <input type="alley" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="houseno">บ้านเลขที่:</label>
                                    <input type="houseno" class="form-control" placeholder="houseno">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="villageno">หมู่:</label>
                                    <input type="villageno" class="form-control" placeholder="villageno">
                                </div>
                                <div class="form-group col-md">
                                    <label for="alley">ตรอก / ซอย:</label>
                                    <input type="alley" class="form-control" placeholder="alley">
                                </div>
                                <div class="form-group col-md">
                                    <label for="road">ถนน:</label>
                                    <input type="road" class="form-control" placeholder="road">
                                </div>

                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="subdistrict">ตำบล / แขวง:</label>
                                    <input type="subdistrict" class="form-control" placeholder="subdistrict">
                                </div>
                                <div class="form-group col-md">
                                    <label for="district">อำเภอ:</label>
                                    <input type="district" class="form-control" placeholder="district">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="alley">จังหวัด:</label>
                                        <input type="alley" class="form-control" placeholder="จังหวัด">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="road">รหัสไปรษณีย์:</label>
                                        <input type="road" class="form-control" placeholder="รหัสไปรษณีย์">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="alley">คุณวุฒิ:</label>
                                    <input type="alley" class="form-control" placeholder="คุณวุฒิ">
                                </div>
                                <div class="form-group col-md">
                                    <label for="alley">หมายเลขทะเบียน:</label>
                                    <input type="alley" class="form-control" placeholder="หมายเลขทะเบียน">
                                </div>
                            </div>
                            <br>
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
                            </div>
                            <br>
                            <h6>กรณีที่มีผู้ปฎิบัติงานรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                            <button id="addmake7" type="button" style='font-size:16px'
                                class="btn btn-outline-primary"><i class='fas fa-plus-circle'></i>
                                เพิ่ม</button>

                            <div id="detailmake7" style="display:none;">
                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="name">ชื่อ:</label>
                                        <input type="name" class="form-control" placeholder="name">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="lname">นามสกุล:</label>
                                        <input type="lname" class="form-control" placeholder="lname">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="idcard">เลขประจำตัวประชาชน:</label>
                                        <input type="idcard" class="form-control" placeholder="idcard">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="position">ตำแหน่ง:</label>
                                        <input type="position" class="form-control" placeholder="position">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="age">อายุ:</label>
                                        <input type="age" class="form-control" placeholder="age">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="nationality">สัญชาติ:</label>
                                        <input type="nationality" class="form-control" placeholder="nationality">
                                    </div>
                                    <div class="form-group col-md">
                                        <!-- Don't forget change type and id -->
                                        <label for="birthday">หมายเลขโทรศัพท์:</label>
                                        <input type="birthday" class="form-control" placeholder="phonenumber">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="alley">Email:</label>
                                        <input type="alley" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="houseno">บ้านเลขที่:</label>
                                        <input type="houseno" class="form-control" placeholder="houseno">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="villageno">หมู่:</label>
                                        <input type="villageno" class="form-control" placeholder="villageno">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="alley">ตรอก / ซอย:</label>
                                        <input type="alley" class="form-control" placeholder="alley">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="road">ถนน:</label>
                                        <input type="road" class="form-control" placeholder="road">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="subdistrict">ตำบล / แขวง:</label>
                                        <input type="subdistrict" class="form-control" placeholder="subdistrict">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="district">อำเภอ:</label>
                                        <input type="district" class="form-control" placeholder="district">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md">
                                            <label for="alley">จังหวัด:</label>
                                            <input type="alley" class="form-control" placeholder="จังหวัด">
                                        </div>
                                        <div class="form-group col-md">
                                            <label for="road">รหัสไปรษณีย์:</label>
                                            <input type="road" class="form-control" placeholder="รหัสไปรษณีย์">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="alley">คุณวุฒิ:</label>
                                        <input type="alley" class="form-control" placeholder="คุณวุฒิ">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="alley">หมายเลขทะเบียน:</label>
                                        <input type="alley" class="form-control" placeholder="หมายเลขทะเบียน">
                                    </div>
                                </div>
                                <br>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree7">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                แพทย์ผู้รับผิดชอบ
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree7" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="name">ชื่อแพทย์ผู้รับผิดชอบ:</label>
                                    <input type="name" class="form-control" placeholder="name">
                                </div>
                                <div class="form-group col-md">
                                    <label for="lname">นามสกุล:</label>
                                    <input type="lname" class="form-control" placeholder="lname">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="idcard">เลขประจำตัวประชาชน:</label>
                                    <input type="idcard" class="form-control" placeholder="idcard">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="position">ตำแหน่ง:</label>
                                    <input type="position" class="form-control" placeholder="position">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="age">อายุ:</label>
                                    <input type="age" class="form-control" placeholder="age">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="nationality">สัญชาติ:</label>
                                    <input type="nationality" class="form-control" placeholder="nationality">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="birthday">หมายเลขโทรศัพท์:</label>
                                    <input type="birthday" class="form-control" placeholder="phonenumber">
                                </div>
                                <div class="form-group col-md">
                                    <label for="alley">Email:</label>
                                    <input type="alley" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="houseno">บ้านเลขที่:</label>
                                    <input type="houseno" class="form-control" placeholder="houseno">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="villageno">หมู่:</label>
                                    <input type="villageno" class="form-control" placeholder="villageno">
                                </div>
                                <div class="form-group col-md">
                                    <label for="alley">ตรอก / ซอย:</label>
                                    <input type="alley" class="form-control" placeholder="alley">
                                </div>
                                <div class="form-group col-md">
                                    <label for="road">ถนน:</label>
                                    <input type="road" class="form-control" placeholder="road">
                                </div>

                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="subdistrict">ตำบล / แขวง:</label>
                                    <input type="subdistrict" class="form-control" placeholder="subdistrict">
                                </div>
                                <div class="form-group col-md">
                                    <label for="district">อำเภอ:</label>
                                    <input type="district" class="form-control" placeholder="district">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="alley">จังหวัด:</label>
                                        <input type="alley" class="form-control" placeholder="จังหวัด">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="road">รหัสไปรษณีย์:</label>
                                        <input type="road" class="form-control" placeholder="รหัสไปรษณีย์">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="name">ชื่อสถานที่ทำการ:</label>
                                    <input type="name" class="form-control" placeholder="ชื่อสถานที่ทำการ">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="alley">ใบอนุญาตประกอบโรคศิลปะเลขที่:</label>
                                    <input type="alley" class="form-control" placeholder="เลขที่ใบอนุญาตประกอบโรค">
                                </div>
                                <div class="form-group col-md">
                                    <label for="birthday">ออกให้ ณ วันที่:</label>
                                    <input type="birthday" class="form-control" placeholder="วว/ดด/ปป">
                                </div>
                            </div>
                            <br>
                            <div class="form-row text-danger">
                                <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, สำเนาใบประกอบโรคศิลปะ และเอกสารอื่นๆ</h6>
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
                            </div>
                            <br>
                            <h6>กรณีที่มีแพทย์ผู้รับผิดชอบมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                            <button id="adddoctor7" type="button" style='font-size:16px'
                                class="btn btn-outline-primary"><i class='fas fa-plus-circle'></i>
                                เพิ่ม</button>

                            <div id="detaildoctor7" style="display:none;">
                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="name">ชื่อแพทย์ผู้รับผิดชอบ:</label>
                                        <input type="name" class="form-control" placeholder="name">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="lname">นามสกุล:</label>
                                        <input type="lname" class="form-control" placeholder="lname">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="idcard">เลขประจำตัวประชาชน:</label>
                                        <input type="idcard" class="form-control" placeholder="idcard">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="position">ตำแหน่ง:</label>
                                        <input type="position" class="form-control" placeholder="position">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="age">อายุ:</label>
                                        <input type="age" class="form-control" placeholder="age">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="nationality">สัญชาติ:</label>
                                        <input type="nationality" class="form-control" placeholder="nationality">
                                    </div>
                                    <div class="form-group col-md">
                                        <!-- Don't forget change type and id -->
                                        <label for="birthday">หมายเลขโทรศัพท์:</label>
                                        <input type="birthday" class="form-control" placeholder="phonenumber">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="alley">Email:</label>
                                        <input type="alley" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="houseno">บ้านเลขที่:</label>
                                        <input type="houseno" class="form-control" placeholder="houseno">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="villageno">หมู่:</label>
                                        <input type="villageno" class="form-control" placeholder="villageno">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="alley">ตรอก / ซอย:</label>
                                        <input type="alley" class="form-control" placeholder="alley">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="road">ถนน:</label>
                                        <input type="road" class="form-control" placeholder="road">
                                    </div>

                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="subdistrict">ตำบล / แขวง:</label>
                                        <input type="subdistrict" class="form-control" placeholder="subdistrict">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="district">อำเภอ:</label>
                                        <input type="district" class="form-control" placeholder="district">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md">
                                            <label for="alley">จังหวัด:</label>
                                            <input type="alley" class="form-control" placeholder="จังหวัด">
                                        </div>
                                        <div class="form-group col-md">
                                            <label for="road">รหัสไปรษณีย์:</label>
                                            <input type="road" class="form-control" placeholder="รหัสไปรษณีย์">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="name">ชื่อสถานที่ทำการ:</label>
                                        <input type="name" class="form-control" placeholder="ชื่อสถานที่ทำการ">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="alley">ใบอนุญาตประกอบโรคศิลปะเลขที่:</label>
                                        <input type="alley" class="form-control" placeholder="เลขที่ใบอนุญาตประกอบโรค">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="birthday">ออกให้ ณ วันที่:</label>
                                        <input type="birthday" class="form-control" placeholder="วว/ดด/ปป">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row text-danger">
                                    <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, สำเนาใบประกอบโรคศิลปะ และเอกสารอื่นๆ
                                    </h6>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div style="float:right;">
                <button id="backstep7" type="button" class="btn btn-light">ย้อนกลับ</button>
                <button id="confirm7" type="submit" class="btn btn-primary right">ยื่นคำขอใบอนุญาต</button>
            </div>
        </div>

        <!-- Modal -->
        <!-- <div class="modal fade" id="exampleModalScrollable7" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">รายละเอียดการยื่นขอใบอนุญาต</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row-ml-3">
                            <h6>ชื่อผู้ขอใบอนุญาต:</h6>
                        </div>
                        <hr>
                        <div class="row-ml-3">
                            <h6>สถานที่ใช้และจัดเก็บวัสดุ:</h6>
                        </div>
                        <hr>
                        <div class="row-ml-3">
                            <h6>รายละเอียดวัสดุที่ขออนุญาต:</h6>
                        </div>
                        <hr>
                        <div class="row-ml-3">
                            <h6>รายละเอียดเจ้าหน้าที่:</h6>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="cancel1" type="button" class="btn btn-secondary"
                            data-dismiss="modal">ยกเลิก</button>
                        <button id="save1" type="submit" class="btn btn-primary">ยืนยันคำขอ</button>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>

<!-- script have or nothave permission -->
<script>
$(document).ready(function() {
    $("#nextstepone7").click(function() {
        $("#stepone7").hide();
        $("#steptwo7").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backsteptwo7").click(function() {
        $("#steptwo7").hide();
        $("#stepone7").show();
    });
    $("#nextsteptwo7").click(function() {
        $("#steptwo7").hide();
        $("#stepthree7").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backstep7").click(function() {
        $("#stepthree7").hide();
        $("#steptwo7").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#addsafety7").click(function() {
        $("#detailsafety7").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#addmake7").click(function() {
        $("#detailmake7").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#adddoctor7").click(function() {
        $("#detaildoctor7").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $('#headingOne7').click(function() {
        $('#collapseTwo7').collapse('hide');
        $('#collapseThree7').collapse('hide');
        $('#collapseOne7').collapse('show');
    });
    $('#headingTwo7').click(function() {
        $('#collapseOne7').collapse('hide');
        $('#collapseThree7').collapse('hide');
        $('#collapseTwo7').collapse('show');
    });
    $('#headingThree7').click(function() {
        $('#collapseOne7').collapse('hide');
        $('#collapseTwo7').collapse('hide');
        $('#collapseThree7').collapse('show');
    });
});
</script>

<!-- <script>
$(document).ready(function() {
    $('#confirm7').click(function() {
        $('#exampleModalScrollable7').modal('show');
    });
});
</script> -->