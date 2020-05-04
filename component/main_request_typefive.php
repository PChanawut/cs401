<div class="container mt-5">
    <div class="container">
        <div class="row alert alert-primary" role="alert" style="height:45px">
            <h5>สถานที่และรายละเอียดของวัสดุที่ขออนุญาต</h5>
        </div>

        <div class="form-row">
            <div class="form-group col-2">
                <label for="person_nametitle">ขออนุญาตเพื่อ:</label>
                <select class="custom-select">
                    <option value="ผลิต">ผลิต</option>
                    <option value="มีไว้ในครอบครอง">มีไว้ในครอบครอง</option>
                    <option value="ใช้">ใช้</option>
                </select>
            </div>
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
            <div class="form-group col-2">
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
                <label for="person_storage_address">ชนิดของเครื่องปฏิกรณ์ปรมาณู:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control">
            </div>
            <div class="form-group col">
                <label for="person_storage_address">กำลังผลิตความร้อนสูงสุด:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-3">
                <label for="person_nametitle">ประเภทของเครื่องปฏิกรณ์ปรมาณู:</label>
                <select class="custom-select">
                    <option value="ผลิต">เครื่องปฏิกรณ์ปรมาณูวิจัย</option>
                    <option value="มีไว้ในครอบครอง">เครื่องปฏิกรณ์ปรมาณูกำลัง</option>
                </select>
            </div>
            <div class="form-group col">
                <label for="person_storage_address">ชื่อบริษัทผู้ผลิตเครื่องปฏิกรณ์ปรมาณู:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-2">
                <label for="person_storage_address">ประเทศผู้ผลิต:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control">
            </div>
        </div>
    </div>

    <div id="nextback" class="container">
        <div style="float:right;">
            <button id="confirm5" type="submit" class="btn btn-primary right">ยื่นคำขอใบอนุญาต</button>
        </div>
    </div>

    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModalScrollable5" tabindex="-1" role="dialog"
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary">ยืนยันคำขอ</button>
                </div>
            </div>
        </div>
    </div> -->
</div>

<!-- <script>
$(document).ready(function() {
    $('#confirm5').click(function() {
        $('#exampleModalScrollable5').modal('show');
    });
});
</script> -->