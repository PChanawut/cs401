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
                    <select class="custom-select">
                        <option value="ศึกษาวิจัย">ศึกษาวิจัย</option>
                        <option value="พัฒนาวัสดุนิวเคลียร์">พัฒนาวัสดุนิวเคลียร์</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="person_storage_address">วัสดุต้นกำลังชนิด:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-2">
                    <label for="person_storage_address">ปริมาณ:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-2">
                    <label for="person_storage_address">หน่วย:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_address">เปลี่ยนสภาพเป็น:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-2">
                    <label for="person_storage_address">ปริมาณ:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-2">
                    <label for="person_storage_address">หน่วย:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control">
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
            </div>

            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>สถานที่เก็บรักษาวัสดุที่พ้นสภาพแล้ว</h5>
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
                            <button id="addsafety6" type="button" style='font-size:16px'
                                class="btn btn-outline-primary"><i class='fas fa-plus-circle'></i>
                                เพิ่ม</button>
                            <div id="detailsafety6" style="display:none;">
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
                            <button id="addmake6" type="button" style='font-size:16px'
                                class="btn btn-outline-primary"><i class='fas fa-plus-circle'></i>
                                เพิ่ม</button>

                            <div id="detailmake6" style="display:none;">
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
                <br>

                <div class="container">
                    <div style="float:right;">
                        <button id="backstep6" type="button" class="btn btn-light">ย้อนกลับ</button>
                        <button id="confirm6" type="submit" class="btn btn-primary right">ยื่นคำขอใบอนุญาต</button>
                    </div>
                </div>

                <!-- Modal -->
                <!-- <div class="modal fade" id="exampleModalScrollable6" tabindex="-1" role="dialog"
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
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                <button type="submit" class="btn btn-primary">ยืนยันคำขอ</button>
                            </div>
                        </div>
                    </div>
                </div> -->
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

<!-- <script>
$(document).ready(function() {
    $('#confirm6').click(function() {
        $('#exampleModalScrollable6').modal('show');
    });
});
</script> -->