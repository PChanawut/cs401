<div class="container mt-5">
    <div class="row">
        <div class="col">
            <!-- <h4 style="font-family:;">ต่อใบอนุญาต</h4> -->
            <h4>ยืนยันการสมัครสมาชิก</h4>
        </div>
        <div class="col">
            <form id="form_enroll_no" class="input-group" method="post">
                <input id="id_enroll_no" type="text" class="form-control"
                    placeholder="รหัสประจำตัวประชาชน / หมายเลขบริษัท" aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">ค้นหา</button>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div id="detail_confirmregister">
        <fieldset disabled>
            <div class="alert alert-primary" role="alert">
                <h5>ข้อมูลส่วนตัวของผู้ขออนุญาต</h5>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="info_register_namelname">ชื่อ / นามสกุล:</label>
                    <label class="form-control" id="info_register_namelname"></label>
                </div>
                <div class="form-group col-4">
                    <label for="info_register_birthday">วันเดือนปีเกิด:</label>
                    <label class="form-control" id="info_register_birthday"></label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-4">
                    <label for="info_register_citicenid">เลขบัตรประจำตัวประชาชน:</label>
                    <label class="form-control" id="info_register_citicenid"></label>
                </div>
                <div class="form-group col-3">
                    <label for="inputAddress">เบอร์โทรศัพท์:</label>
                    <label class="form-control" id="info_register_phonenumber"></label>
                </div>
                <div class="form-group col-5">
                    <label for="inputAddress">E-Mail:</label>
                    <label class="form-control" id="info_register_email"></label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="inputAddress2">ที่อยู่ผู้ขออนุญาต:</label>
                    <label class="form-control" id="info_register_address"></label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="inputAddress2">ที่อยู่สถานที่จัดเก็บ:</label>
                    <label class="form-control" id="info_register_address_storage"></label>
                </div>
            </div>
        </fieldset>
        <div class="d-flex flex-row-reverse">
            <button class="btn btn-primary">ยืนยันการสมัครสมาชิก</button>
        </div>
    </div>

    <div hidden>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <h5>ไม่พบข้อมูลผู้ขออนุญาต</h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>