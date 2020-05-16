<div class="container mt-5">
    <div class="row alert alert-light" role="alert" style="height:45px">
        <h5>ใบขออนุญาตประเภท ปส 1ง (สำหรับขออนุญาตพลังงานปรมาณูจากเครื่องปฏิกรณ์ปรมาณู)</h5>
    </div>
    <hr>

    <div class="container">
        <div class="row alert alert-primary" role="alert" style="height:45px">
            <h5>สถานที่และรายละเอียดของวัสดุที่ขออนุญาต</h5>
        </div>

        <div class="form-row">
            <div class="form-group col-2">
                <label for="location_materialfive_request">ขออนุญาตเพื่อ:</label>
                <select class="custom-select" id="location_materialfive_request">
                    <option value="ผลิต">ผลิต</option>
                    <option value="มีไว้ในครอบครอง">มีไว้ในครอบครอง</option>
                    <option value="ใช้">ใช้</option>
                </select>
            </div>
            <div class="form-group col">
                <label for="location_materialfive_address">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                <input type="text" class="form-control" id="location_materialfive_address">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="location_materialfive_district">ตำบล:</label>
                <input type="text" class="form-control" id="location_materialfive_district">
            </div>
            <div class="form-group col">
                <label for="location_materialfive_amphoe">อำเภอ:</label>
                <input type="text" class="form-control" id="location_materialfive_amphoe">
            </div>
            <div class="form-group col">
                <label for="location_materialfive_province">จังหวัด:</label>
                <input type="text" class="form-control" id="location_materialfive_province">
            </div>
            <div class="form-group col">
                <label for="location_materialfive_zipcode">รหัสไปรษณีย์:</label>
                <input type="text" class="form-control" id="location_materialfive_zipcode">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-2">
                <label for="location_materialfive_phone">หมายเลขโทรศัพท์:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="location_materialfive_phone">
            </div>
            <div class="form-group col">
                <label for="location_materialfive_email">Email:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="location_materialfive_email">
            </div>
            <div class="form-group col">
                <label for="type_equipment_five">ชนิดของเครื่องปฏิกรณ์ปรมาณู:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="type_equipment_five">
            </div>
            <div class="form-group col">
                <label for="make_heat_five">กำลังผลิตความร้อนสูงสุด:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="make_heat_five">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-3">
                <label for="type_five">ประเภทของเครื่องปฏิกรณ์ปรมาณู:</label>
                <select class="custom-select" id="type_five">
                    <option value="เครื่องปฏิกรณ์ปรมาณูวิจัย">เครื่องปฏิกรณ์ปรมาณูวิจัย</option>
                    <option value="เครื่องปฏิกรณ์ปรมาณูกำลัง">เครื่องปฏิกรณ์ปรมาณูกำลัง</option>
                </select>
            </div>
            <div class="form-group col">
                <label for="name_produce_equipment_five">ชื่อบริษัทผู้ผลิตเครื่องปฏิกรณ์ปรมาณู:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="name_produce_equipment_five">
            </div>
            <div class="form-group col-2">
                <label for="country_produce_equipment_five">ประเทศผู้ผลิต:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="country_produce_equipment_five">
            </div>
        </div>
    </div>

    <div class="container">
        <div style="float:right;">
            <button id="confirm5" type="button" class="btn btn-primary right">ยื่นคำขอใบอนุญาต</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="pageConfirm5" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
        aria-hidden="true">
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
                        <p style="color:Gray;">รออัพเดต</p>
                    </div>
                    <hr>
                    <div class="row-ml-3">
                        <h6>สถานที่ใช้และจัดเก็บวัสดุ:</h6>
                        <p id="show_location_name" style="color:Gray;"></p>
                    </div>
                    <hr>
                    <div class="row-ml-3">
                        <h6>รายละเอียดวัสดุที่ขออนุญาต:</h6>
                        <p id="show_detail_material" style="color:Gray;"></p>
                        <p id="show_type_material" style="color:Gray;"></p>
                    </div>
                    <hr>
                    <div class="row-ml-3">
                        <h6>รายละเอียดเจ้าหน้าที่:</h6>
                        <p style="color:Gray;">---- ไม่มีเจ้าหน้าที่ที่เกี่ยวข้อง ----</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button id="confirm5" type="submit" class="btn btn-primary">ยืนยันคำขอ</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#confirm5').click(function() {
        $('#pageConfirm5').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $("#confirm5").click(function() {
        var location_name = document.getElementById("location_materialfive_address").value;
        var materialfive_district = document.getElementById("location_materialfive_district").value;
        var materialfive_amphoe = document.getElementById("location_materialfive_amphoe").value;
        var materialfive_province = document.getElementById("location_materialfive_province").value;
        var materialfive_zipcode = document.getElementById("location_materialfive_zipcode").value;
        document.getElementById("show_location_name").innerHTML = location_name + " ต." +
            materialfive_district + " อ." + materialfive_amphoe + " จ." + materialfive_province + " " +
            materialfive_zipcode;

        var materialfive_request = document.getElementById("location_materialfive_request").value;
        var type_five = document.getElementById("type_five").value;
        document.getElementById("show_detail_material").innerHTML = "ขออนุญาตเพื่อ: " +
            materialfive_request;
        document.getElementById("show_type_material").innerHTML = "ประเภทเครื่องปฏิกรณ์ปรมาณู: " +
            type_five;
    });
});
</script>