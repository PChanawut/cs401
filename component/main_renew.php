<div class="container mt-5">
    <div class="row">
        <div class="col">
            <!-- <h4 style="font-family:;">ต่อใบอนุญาต</h4> -->
            <h4>ต่อใบอนุญาต</h4>
        </div>
        <div class="col">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="เลขที่ใบอนุญาต" aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Search</button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <table class="table text-center" id="table-request">
        <thead class="thead-light">
            <tr>
                <th scope="col">ลำดับที่</th>
                <th scope="col">เลขที่ใบอนุญาต</th>
                <th scope="col">สถานที่จัดเก็บ</th>
                <th scope="col">ระยะเวลาที่เหลือ</th>
                <th scope="col">ต่ออายุ</th>
            </tr>
        </thead>
        <?php
            include('php/config/database.php');
            $requests = array();

            $sql = "SELECT license.license_id, license.license_type, license.license_number, license.sid, license.license_status, license.start_date, license.expire_date, materiallocation.license_id, materiallocation.material_address, materiallocation.type_location_material
                    FROM license INNER JOIN materiallocation ON license.license_id = materiallocation.license_id WHERE sid = ".$_SESSION["company_id"]." AND license_status = 'สำเร็จ'";
            $query = mysqli_query($conn,$sql) or die ("Query fail: " . mysqli_error($conn));

            while($request = mysqli_fetch_assoc($query)){
                $requests[] = $request;
            }
                $i = 1;
                if(is_array($requests) || is_object($requests)){
                    foreach($requests as $request){
                        if((($request['license_type'] == 'ขออนุญาตฯ วัสดุพลอยได้' || $request['license_type'] == 'นำเข้า-ส่งออกวัสดุพลอยได้' || $request['license_type'] == 'ขออนุญาตฯ วัสดุนิวเคลียร์พิเศษ' 
                        || $request['license_type'] == 'ขออนุญาตพลังงานปรมาณูจากเครื่องปฏิกรณ์ปรมาณู' || $request['license_type'] == 'ขออนุญาตฯ เครื่องกำเนิดรังสี') && $request['type_location_material'] === NULL)
                        || (($request['license_type'] == 'นำเข้า-ส่งออกวัสดุนิวเคลียร์-วัสดุต้นกำลัง' && $request['type_location_material'] == 'IMPORT MATERIAL')) || ($request['license_type'] == 'ทำให้วัสดุต้นกำลังพ้นสภาพฯ' && $request['type_location_material'] == 'CHEMICAL')){
        ?>
        <tbody class="index">
            <!-- <tr> -->
            <th class="index" id="id-row" scope="row">
            <td>
                <?php
                $start_date = strtotime($request['start_date']);
                $end_date = strtotime($request['expire_date']);
                $day_off = $end_date - $start_date;
                $ndays = round(($day_off/86400));
                    if($ndays<=30){
                        if($request['license_type'] == 'ขออนุญาตฯ วัสดุพลอยได้'){
                            if(strlen($request['license_id']) == 1){
                                echo $request['license_number']."-01-000".$request['license_id'];
                            }else if(strlen($request['license_id']) == 2){
                                echo $request['license_number']."-01-00".$request['license_id'];
                            }else if(strlen($request['license_id']) == 3){
                                echo $request['license_number']."-01-0".$request['license_id'];
                            }else if(strlen($request['license_id']) == 4){
                                echo $request['license_number']."-01-".$request['license_id'];
                            }
                        }else if($request['license_type'] == 'นำเข้า-ส่งออกวัสดุพลอยได้'){
                            if(strlen($request['license_id']) == 1){
                                echo $request['license_number']."-02-000".$request['license_id'];
                            }else if(strlen($request['license_id']) == 2){
                                echo $request['license_number']."-02-00".$request['license_id'];
                            }else if(strlen($request['license_id']) == 3){
                                echo $request['license_number']."-02-0".$request['license_id'];
                            }else if(strlen($request['license_id']) == 4){
                                echo $request['license_number']."-02-".$request['license_id'];
                            }
                        }else if($request['license_type'] == 'ขออนุญาตฯ วัสดุนิวเคลียร์พิเศษ'){
                            if(strlen($request['license_id']) == 1){
                                echo $request['license_number']."-03-000".$request['license_id'];
                            }else if(strlen($request['license_id']) == 2){
                                echo $request['license_number']."-03-00".$request['license_id'];
                            }else if(strlen($request['license_id']) == 3){
                                echo $request['license_number']."-03-0".$request['license_id'];
                            }else if(strlen($request['license_id']) == 4){
                                echo $request['license_number']."-03-".$request['license_id'];
                            }
                        }else if($request['license_type'] == 'นำเข้า-ส่งออกวัสดุนิวเคลียร์-วัสดุต้นกำลัง'){
                            if(strlen($request['license_id']) == 1){
                                echo $request['license_number']."-04-000".$request['license_id'];
                            }else if(strlen($request['license_id']) == 2){
                                echo $request['license_number']."-04-00".$request['license_id'];
                            }else if(strlen($request['license_id']) == 3){
                                echo $request['license_number']."-04-0".$request['license_id'];
                            }else if(strlen($request['license_id']) == 4){
                                echo $request['license_number']."-04-".$request['license_id'];
                            }
                        }else if($request['license_type'] == 'ขออนุญาตพลังงานปรมาณูจากเครื่องปฏิกรณ์ปรมาณู'){
                            if(strlen($request['license_id']) == 1){
                                echo $request['license_number']."-05-000".$request['license_id'];
                            }else if(strlen($request['license_id']) == 2){
                                echo $request['license_number']."-05-00".$request['license_id'];
                            }else if(strlen($request['license_id']) == 3){
                                echo $request['license_number']."-05-0".$request['license_id'];
                            }else if(strlen($request['license_id']) == 4){
                                echo $request['license_number']."-05-".$request['license_id'];
                            }
                        }else if($request['license_type'] == 'ทำให้วัสดุต้นกำลังพ้นสภาพฯ'){
                            if(strlen($request['license_id']) == 1){
                                echo $request['license_number']."-06-000".$request['license_id'];
                            }else if(strlen($request['license_id']) == 2){
                                echo $request['license_number']."-06-00".$request['license_id'];
                            }else if(strlen($request['license_id']) == 3){
                                echo $request['license_number']."-06-0".$request['license_id'];
                            }else if(strlen($request['license_id']) == 4){
                                echo $request['license_number']."-06-".$request['license_id'];
                            }
                        }else if($request['license_type'] == 'ขออนุญาตฯ เครื่องกำเนิดรังสี'){
                            if(strlen($request['license_id']) == 1){
                                echo $request['license_number']."-07-000".$request['license_id'];
                            }else if(strlen($request['license_id']) == 2){
                                echo $request['license_number']."-07-00".$request['license_id'];
                            }else if(strlen($request['license_id']) == 3){
                                echo $request['license_number']."-07-0".$request['license_id'];
                            }else if(strlen($request['license_id']) == 4){
                                echo $request['license_number']."-07-".$request['license_id'];
                            }
                        }
                    }
                ?>
            </td>
            <td>
                <?php
                    $material_address = explode(",",$request['material_address'])[0];
                    $material_address1 = explode(",",$request['material_address'])[1];
                    $material_address2 = explode(",",$request['material_address'])[2];
                    $material_address3 = explode(",",$request['material_address'])[3];
                    $material_address4 = explode(",",$request['material_address'])[4];
                    echo $material_address." ต.".$material_address1." อ.".$material_address2." จ.".$material_address3." ".$material_address4;
                ?>
            </td>
            <td>
                <?php
                    echo $ndays." วัน";
                ?>
            </td>
            <!-- <input type="hidden" id="model_edit_license" value=""> -->
            <td><button id="request_renew" type="button" class="btn btn-secondary"
                    onclick="select_renew(<?php echo $request['license_id']; ?>,this)">ต่ออายุ</button>
            </td>
            <!-- </tr> -->
        </tbody>
        <?php
                    }
                }
            }
        ?>
    </table>
</div>

<div id="detail_renew" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">รายละเอียดใบอนุญาต</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row-ml-3">
                    <h6 id="no_license"></h6>
                </div>
                <div class="row-ml-3">
                    <h6>ชื่อผู้ขอใบอนุญาต:</h6>
                    <p id="show_person_request" style="color:Gray;"></p>
                </div>
                <hr>
                <div class="row-ml-3">
                    <h6>สถานที่ใช้และจัดเก็บวัสดุ:</h6>
                    <p id="show_location" style="color:Gray;"></p>
                    <p id="show_location_name" style="color:Gray;"></p>
                    <p id="show_location_name2" style="color:Gray;"></p>
                    <p id="show_location_name3" style="color:Gray;"></p>
                    <p id="show_location_name4" style="color:Gray;"></p>
                    <p id="show_location_name5" style="color:Gray;"></p>
                </div>
                <hr>
                <div class="row-ml-3">
                    <h6>รายละเอียดวัสดุที่ขออนุญาต:</h6>
                    <p id="show_detail" style="color:Gray;"></p>
                    <p id="show_detail_material" style="color:Gray;"></p>
                    <p id="show_type_material" style="color:Gray;"></p>
                </div>
                <hr>
                <div class="row-ml-3">
                    <h6>รายละเอียดเจ้าหน้าที่:</h6>
                    <h6 id="header_safe"></h6>
                    <p id="show_detail_safe" style="color:Gray;"></p>
                    <p id="show_detail_safe2" style="color:Gray;"></p>
                    <h6 id="header_make"></h6>
                    <p id="show_detail_make" style="color:Gray;"></p>
                    <p id="show_detail_make2" style="color:Gray;"></p>
                    <h6 id="header_doctor"></h6>
                    <p id="show_detail_doctor" style="color:Gray;"></p>
                    <p id="show_detail_doctor2" style="color:Gray;"></p>
                    <p id="show_detail_doctor3" style="color:Gray;"></p>
                </div>
            </div>
            <input type="hidden" id="model_edit_license" value="">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">ยกเลิก</button>
                <button id="edit_license" type="button" class="btn btn-primary"
                    onclick="edit_license()">ขอต่ออายุใบอนุญาต</button>
            </div>
        </div>
    </div>
</div>