<div class="container mt-5">
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
                    <label for="person_nametitle">ประเภทการใช้ประโยชน์:</label>
                    <select class="custom-select" id="person_nametitle">
                        <option value="ศึกษาวิจัย">ศึกษาวิจัย</option>
                        <option value="ศึกษาวิจัย">พัฒนาวัสดุนิวเคลียร์</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="person_storage_address">วัสดุต้นกำลังชนิด:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="person_storage_address">
                </div>
                <div class="form-group col-2">
                    <label for="person_storage_address">ปริมาณ:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="person_storage_address">
                </div>
                <div class="form-group col-2">
                    <label for="person_storage_address">หน่วย:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="person_storage_address">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_address">เปลี่ยนสภาพเป็น:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="person_storage_address">
                </div>
                <div class="form-group col-2">
                    <label for="person_storage_address">ปริมาณ:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="person_storage_address">
                </div>
                <div class="form-group col-2">
                    <label for="person_storage_address">หน่วย:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="person_storage_address">
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
                    <label for="person_storage_address">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="person_storage_address">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_district">ตำบล:</label>
                    <input type="text" class="form-control" id="person_storage_district">
                </div>
                <div class="form-group col">
                    <label for="person_storage_amphoe">อำเภอ:</label>
                    <input type="text" class="form-control" id="person_storage_amphoe">
                </div>
                <div class="form-group col">
                    <label for="person_storage_province">จังหวัด:</label>
                    <input type="text" class="form-control" id="person_storage_province">
                </div>
                <div class="form-group col">
                    <label for="person_storage_zipcode">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="person_storage_zipcode">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_address">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="person_storage_address">
                </div>
                <div class="form-group col">
                    <label for="person_storage_address">Email:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="person_storage_address">
                </div>
            </div>

            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>สถานที่เก็บรักษาวัสดุที่พ้นสภาพแล้ว</h5>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_address">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="person_storage_address">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_district">ตำบล:</label>
                    <input type="text" class="form-control" id="person_storage_district">
                </div>
                <div class="form-group col">
                    <label for="person_storage_amphoe">อำเภอ:</label>
                    <input type="text" class="form-control" id="person_storage_amphoe">
                </div>
                <div class="form-group col">
                    <label for="person_storage_province">จังหวัด:</label>
                    <input type="text" class="form-control" id="person_storage_province">
                </div>
                <div class="form-group col">
                    <label for="person_storage_zipcode">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="person_storage_zipcode">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_address">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="person_storage_address">
                </div>
                <div class="form-group col">
                    <label for="person_storage_address">Email:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="person_storage_address">
                </div>
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
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>รายละเอียดเจ้าหน้าที่ความปลอดภัยทางรังสี</h5>
            </div>
            <div class="row alert alert-light" role="alert" style="height:45px">
                <h5>เจ้าหน้าที่ความปลอดภัยทางรังสี</h5>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="name">ชื่อ:</label>
                    <input type="name" class="form-control" id="name" placeholder="name">
                </div>
                <div class="form-group col-md">
                    <label for="lname">นามสกุล:</label>
                    <input type="lname" class="form-control" id="lname" placeholder="lname">
                </div>
                <div class="form-group col-md-5">
                    <label for="idcard">เลขประจำตัวประชาชน:</label>
                    <input type="idcard" class="form-control" id="idcard" placeholder="idcard">
                </div>
            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="position">ตำแหน่ง:</label>
                    <input type="position" class="form-control" id="position" placeholder="position">
                </div>
                <div class="form-group col-md-1">
                    <label for="age">อายุ:</label>
                    <input type="age" class="form-control" id="age" placeholder="age">
                </div>
                <div class="form-group col-md-2">
                    <label for="nationality">สัญชาติ:</label>
                    <input type="nationality" class="form-control" id="nationality" placeholder="nationality">
                </div>
                <div class="form-group col-md">
                    <!-- Don't forget change type and id -->
                    <label for="birthday">หมายเลขโทรศัพท์:</label>
                    <input type="birthday" class="form-control" id="birthday" placeholder="phonenumber">
                </div>
                <div class="form-group col-md">
                    <label for="alley">Email:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="Email">
                </div>
            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="houseno">บ้านเลขที่:</label>
                    <input type="houseno" class="form-control" id="houseno" placeholder="houseno">
                </div>
                <div class="form-group col-md-2">
                    <label for="villageno">หมู่:</label>
                    <input type="villageno" class="form-control" id="villageno" placeholder="villageno">
                </div>
                <div class="form-group col-md">
                    <label for="alley">ตรอก / ซอย:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="alley">
                </div>
                <div class="form-group col-md">
                    <label for="road">ถนน:</label>
                    <input type="road" class="form-control" id="road" placeholder="road">
                </div>
            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="subdistrict">ตำบล / แขวง:</label>
                    <input type="subdistrict" class="form-control" id="subdistrict" placeholder="subdistrict">
                </div>
                <div class="form-group col-md">
                    <label for="district">อำเภอ:</label>
                    <input type="district" class="form-control" id="district" placeholder="district">
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="alley">จังหวัด:</label>
                        <input type="alley" class="form-control" id="alley" placeholder="จังหวัด">
                    </div>
                    <div class="form-group col-md">
                        <label for="road">รหัสไปรษณีย์:</label>
                        <input type="road" class="form-control" id="road" placeholder="รหัสไปรษณีย์">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="alley">คุณวุฒิ:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="คุณวุฒิ">
                </div>
                <div class="form-group col-md">
                    <label for="alley">หมายเลขทะเบียน:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="หมายเลขทะเบียน">
                </div>
            </div>
            <div class="form-row text-danger">
                <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, หนังสือมอบอำนาจ และเอกสารอื่นๆ</h6>
            </div>
            <div class="form-row col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
            <br>
            <h6>กรณีที่มีเจ้าหน้าที่ความปลอดภัยทางรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
            <button id="addsafety6" type="button" style='font-size:16px' class="btn btn-outline-primary"><i
                    class='fas fa-plus-circle'></i>
                เพิ่ม</button>
            <div id="detailsafety6" style="display:none;">
                <br>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="name">ชื่อ:</label>
                        <input type="name" class="form-control" id="name" placeholder="name">
                    </div>
                    <div class="form-group col-md">
                        <label for="lname">นามสกุล:</label>
                        <input type="lname" class="form-control" id="lname" placeholder="lname">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="idcard">เลขประจำตัวประชาชน:</label>
                        <input type="idcard" class="form-control" id="idcard" placeholder="idcard">
                    </div>
                </div>
                <!--  -->
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="position">ตำแหน่ง:</label>
                        <input type="position" class="form-control" id="position" placeholder="position">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="age">อายุ:</label>
                        <input type="age" class="form-control" id="age" placeholder="age">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="nationality">สัญชาติ:</label>
                        <input type="nationality" class="form-control" id="nationality" placeholder="nationality">
                    </div>
                    <div class="form-group col-md">
                        <!-- Don't forget change type and id -->
                        <label for="birthday">หมายเลขโทรศัพท์:</label>
                        <input type="birthday" class="form-control" id="birthday" placeholder="phonenumber">
                    </div>
                    <div class="form-group col-md">
                        <label for="alley">Email:</label>
                        <input type="alley" class="form-control" id="alley" placeholder="Email">
                    </div>
                </div>
                <!--  -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="houseno">บ้านเลขที่:</label>
                        <input type="houseno" class="form-control" id="houseno" placeholder="houseno">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="villageno">หมู่:</label>
                        <input type="villageno" class="form-control" id="villageno" placeholder="villageno">
                    </div>
                    <div class="form-group col-md">
                        <label for="alley">ตรอก / ซอย:</label>
                        <input type="alley" class="form-control" id="alley" placeholder="alley">
                    </div>
                    <div class="form-group col-md">
                        <label for="road">ถนน:</label>
                        <input type="road" class="form-control" id="road" placeholder="road">
                    </div>
                </div>
                <!--  -->
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="subdistrict">ตำบล / แขวง:</label>
                        <input type="subdistrict" class="form-control" id="subdistrict" placeholder="subdistrict">
                    </div>
                    <div class="form-group col-md">
                        <label for="district">อำเภอ:</label>
                        <input type="district" class="form-control" id="district" placeholder="district">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="alley">จังหวัด:</label>
                            <input type="alley" class="form-control" id="alley" placeholder="จังหวัด">
                        </div>
                        <div class="form-group col-md">
                            <label for="road">รหัสไปรษณีย์:</label>
                            <input type="road" class="form-control" id="road" placeholder="รหัสไปรษณีย์">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="alley">คุณวุฒิ:</label>
                        <input type="alley" class="form-control" id="alley" placeholder="คุณวุฒิ">
                    </div>
                    <div class="form-group col-md">
                        <label for="alley">หมายเลขทะเบียน:</label>
                        <input type="alley" class="form-control" id="alley" placeholder="หมายเลขทะเบียน">
                    </div>
                </div>
                <br>
                <div class="form-row text-danger">
                    <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, หนังสือมอบอำนาจ และเอกสารอื่นๆ</h6>
                </div>
                <div class="form-row col-md-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row alert alert-light" role="alert" style="height:45px">
                <h5>ผู้ปฎิบัติงานรังสี</h5>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="name">ชื่อ:</label>
                    <input type="name" class="form-control" id="name" placeholder="name">
                </div>
                <div class="form-group col-md">
                    <label for="lname">นามสกุล:</label>
                    <input type="lname" class="form-control" id="lname" placeholder="lname">
                </div>
                <div class="form-group col-md-5">
                    <label for="idcard">เลขประจำตัวประชาชน:</label>
                    <input type="idcard" class="form-control" id="idcard" placeholder="idcard">
                </div>
            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="position">ตำแหน่ง:</label>
                    <input type="position" class="form-control" id="position" placeholder="position">
                </div>
                <div class="form-group col-md-1">
                    <label for="age">อายุ:</label>
                    <input type="age" class="form-control" id="age" placeholder="age">
                </div>
                <div class="form-group col-md-2">
                    <label for="nationality">สัญชาติ:</label>
                    <input type="nationality" class="form-control" id="nationality" placeholder="nationality">
                </div>
                <div class="form-group col-md">
                    <!-- Don't forget change type and id -->
                    <label for="birthday">หมายเลขโทรศัพท์:</label>
                    <input type="birthday" class="form-control" id="birthday" placeholder="phonenumber">
                </div>
                <div class="form-group col-md">
                    <label for="alley">Email:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="Email">
                </div>
            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="houseno">บ้านเลขที่:</label>
                    <input type="houseno" class="form-control" id="houseno" placeholder="houseno">
                </div>
                <div class="form-group col-md-2">
                    <label for="villageno">หมู่:</label>
                    <input type="villageno" class="form-control" id="villageno" placeholder="villageno">
                </div>
                <div class="form-group col-md">
                    <label for="alley">ตรอก / ซอย:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="alley">
                </div>
                <div class="form-group col-md">
                    <label for="road">ถนน:</label>
                    <input type="road" class="form-control" id="road" placeholder="road">
                </div>

            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="subdistrict">ตำบล / แขวง:</label>
                    <input type="subdistrict" class="form-control" id="subdistrict" placeholder="subdistrict">
                </div>
                <div class="form-group col-md">
                    <label for="district">อำเภอ:</label>
                    <input type="district" class="form-control" id="district" placeholder="district">
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="alley">จังหวัด:</label>
                        <input type="alley" class="form-control" id="alley" placeholder="จังหวัด">
                    </div>
                    <div class="form-group col-md">
                        <label for="road">รหัสไปรษณีย์:</label>
                        <input type="road" class="form-control" id="road" placeholder="รหัสไปรษณีย์">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="alley">คุณวุฒิ:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="คุณวุฒิ">
                </div>
                <div class="form-group col-md">
                    <label for="alley">หมายเลขทะเบียน:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="หมายเลขทะเบียน">
                </div>
            </div>

            <br>
            <div class="form-row text-danger">
                <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, หนังสือมอบอำนาจ และเอกสารอื่นๆ</h6>
            </div>
            <div class="form-row col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
            <br>
            <h6>กรณีที่มีผู้ปฎิบัติงานรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
            <button id="addmake6" type="button" style='font-size:16px' class="btn btn-outline-primary"><i
                    class='fas fa-plus-circle'></i>
                เพิ่ม</button>

            <div id="detailmake6" style="display:none;">
                <br>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="name">ชื่อ:</label>
                        <input type="name" class="form-control" id="name" placeholder="name">
                    </div>
                    <div class="form-group col-md">
                        <label for="lname">นามสกุล:</label>
                        <input type="lname" class="form-control" id="lname" placeholder="lname">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="idcard">เลขประจำตัวประชาชน:</label>
                        <input type="idcard" class="form-control" id="idcard" placeholder="idcard">
                    </div>
                </div>
                <!--  -->
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="position">ตำแหน่ง:</label>
                        <input type="position" class="form-control" id="position" placeholder="position">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="age">อายุ:</label>
                        <input type="age" class="form-control" id="age" placeholder="age">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="nationality">สัญชาติ:</label>
                        <input type="nationality" class="form-control" id="nationality" placeholder="nationality">
                    </div>
                    <div class="form-group col-md">
                        <!-- Don't forget change type and id -->
                        <label for="birthday">หมายเลขโทรศัพท์:</label>
                        <input type="birthday" class="form-control" id="birthday" placeholder="phonenumber">
                    </div>
                    <div class="form-group col-md">
                        <label for="alley">Email:</label>
                        <input type="alley" class="form-control" id="alley" placeholder="Email">
                    </div>
                </div>
                <!--  -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="houseno">บ้านเลขที่:</label>
                        <input type="houseno" class="form-control" id="houseno" placeholder="houseno">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="villageno">หมู่:</label>
                        <input type="villageno" class="form-control" id="villageno" placeholder="villageno">
                    </div>
                    <div class="form-group col-md">
                        <label for="alley">ตรอก / ซอย:</label>
                        <input type="alley" class="form-control" id="alley" placeholder="alley">
                    </div>
                    <div class="form-group col-md">
                        <label for="road">ถนน:</label>
                        <input type="road" class="form-control" id="road" placeholder="road">
                    </div>
                </div>
                <!--  -->
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="subdistrict">ตำบล / แขวง:</label>
                        <input type="subdistrict" class="form-control" id="subdistrict" placeholder="subdistrict">
                    </div>
                    <div class="form-group col-md">
                        <label for="district">อำเภอ:</label>
                        <input type="district" class="form-control" id="district" placeholder="district">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="alley">จังหวัด:</label>
                            <input type="alley" class="form-control" id="alley" placeholder="จังหวัด">
                        </div>
                        <div class="form-group col-md">
                            <label for="road">รหัสไปรษณีย์:</label>
                            <input type="road" class="form-control" id="road" placeholder="รหัสไปรษณีย์">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="alley">คุณวุฒิ:</label>
                        <input type="alley" class="form-control" id="alley" placeholder="คุณวุฒิ">
                    </div>
                    <div class="form-group col-md">
                        <label for="alley">หมายเลขทะเบียน:</label>
                        <input type="alley" class="form-control" id="alley" placeholder="หมายเลขทะเบียน">
                    </div>
                </div>
                <br>
                <div class="form-row text-danger">
                    <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, หนังสือมอบอำนาจ และเอกสารอื่นๆ</h6>
                </div>
                <div class="form-row col-md-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div style="float:right;">
                <button id="backstep6" type="button" class="btn btn-light">ย้อนกลับ</button>
                <button id="confirm6" type="submit" class="btn btn-primary right">ยื่นคำขอใบอนุญาต</button>
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

<script>
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
</script>