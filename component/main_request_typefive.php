<div class="container mt-5">
    <div class="container">
        <div class="row alert alert-primary" role="alert" style="height:45px">
            <h5>สถานที่และรายละเอียดของวัสดุที่ขออนุญาต</h5>
        </div>

        <div class="form-row">
            <div class="form-group col-2">
                <label for="person_nametitle">ขออนุญาตเพื่อ:</label>
                <select class="custom-select" id="person_nametitle">
                    <option value="ผลิต">ผลิต</option>
                    <option value="มีไว้ในครอบครอง">มีไว้ในครอบครอง</option>
                    <option value="ใช้">ใช้</option>
                </select>
            </div>
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
            <div class="form-group col-2">
                <label for="person_storage_address">หมายเลขโทรศัพท์:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="person_storage_address">
            </div>
            <div class="form-group col">
                <label for="person_storage_address">Email:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="person_storage_address">
            </div>
            <div class="form-group col">
                <label for="person_storage_address">ชนิดของเครื่องปฏิกรณ์ปรมาณู:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="person_storage_address">
            </div>
            <div class="form-group col">
                <label for="person_storage_address">กำลังผลิตความร้อนสูงสุด:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="person_storage_address">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-3">
                <label for="person_nametitle">ประเภทของเครื่องปฏิกรณ์ปรมาณู:</label>
                <select class="custom-select" id="person_nametitle">
                    <option value="ผลิต">เครื่องปฏิกรณ์ปรมาณูวิจัย</option>
                    <option value="มีไว้ในครอบครอง">เครื่องปฏิกรณ์ปรมาณูกำลัง</option>
                </select>
            </div>
            <div class="form-group col">
                <label for="person_storage_address">ชื่อบริษัทผู้ผลิตเครื่องปฏิกรณ์ปรมาณู:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="person_storage_address">
            </div>
            <div class="form-group col-2">
                <label for="person_storage_address">ประเทศผู้ผลิต:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="person_storage_address">
            </div>
        </div>
    </div>

    <div id="nextback" class="container">
        <div style="float:right;">
            <button type="submit" class="btn btn-primary right">ยื่นคำขอใบอนุญาต</button>
        </div>
    </div>
</div>