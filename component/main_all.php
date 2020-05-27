<div class="container mt-5">
    <div class="row">
        <div class="col">
            <!-- <h4 style="font-family:;">ต่อใบอนุญาต</h4> -->
            <h4>คำขอยกเลิกใบอนุญาต</h4>
        </div>
        <div class="col">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="เลขใบอนุญาต" aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">ค้นหา</button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <table class="table text-center" id="table-request">
        <thead class="alert alert-primary">
            <tr>
                <th scope="col">ลำดับที่</th>
                <th scope="col">ประเภทใบอนุญาต</th>
                <th scope="col">ระยะเวลาที่เหลือ</th>
                <th scope="col">รายละเอียดใบอนุญาต</th>
            </tr>
        </thead>
        <?php
            include('php/config/database.php');
            $requests = array();

            $sql = "SELECT license.license_number, license.license_type, license.license_id, usercompany.usercompany_name, license.start_date, license.license_status
                    FROM license INNER JOIN usercompany ON license.place_id = usercompany.company_id AND license.sid = usercompany.usercompany_id WHERE place_id = ".$_SESSION["company_id"]." AND license_number = 'LI'";
            $request_query = mysqli_query($conn,$sql) or die ("Query fail: " . mysqli_error($conn));
            // echo $sql;

            while($request = mysqli_fetch_assoc($request_query)){
                $requests[] = $request;
            }
            
            $requests = array_reverse($requests,true);
            // echo count($requests);
            // $request = array_reverse($requests);
                $i = 1;
                // if(is_array($requests) || is_object($requests)){
                    // foreach($requests as $request){
        ?>
        <tbody class="index">
            <!-- <tr> -->
            <th>RE-05-0002</th>
            <td>สำหรับขออนุญาตพลังงานปรมาณูจากเครื่องปฎิกรณ์ปรมาณู</td>
            <td>154 วัน</td>
            <!-- showdetailLicense(<?php //echo $request['license_id']; ?>,this) -->
            <td><button id="show_detail" type="submit" class="btn btn-danger" data-toggle="modal">
                    <i class="fa fa-calendar-check-o" style="font-size:20px;color:white"></i>
                </button>
            </td>
            <!-- </tr> -->
        </tbody>
        <?php
                    // }
                // }
        ?>
    </table>
    <!-- </div> -->
</div>

<script>
$(document).ready(function() {
    $('#show_detail').click(function() {
        $('#detail_license').modal('show');
    });
});
</script>