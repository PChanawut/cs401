<div class="container mt-5">
    <div class="row">
        <div class="col">
            <!-- <h4 style="font-family:;">ต่อใบอนุญาต</h4> -->
            <h4>คำขออนุญาตล่าสุด</h4>
        </div>
        <div class="col">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Recipient's username"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
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
                <th scope="col">เลขที่คำใบอนุญาต</th>
                <th scope="col">ผู้ขออนุญาต</th>
                <th scope="col">วันที่ยื่นขออนุญาต</th>
                <th scope="col">สถานะของใบอนุญาต</th>
            </tr>
        </thead>
        <?php
            include('php/config/database.php');
            $requests = array();
            // $sql = "SELECT license.place_id, usercompany.usercompany_name, license.license_number, license.license_id, license.start_date
            //         FROM license INNER JOIN usercompany ON license.place_id = usercompany.company_id WHERE place_id = ".$_SESSION["company_id"]." AND license_number = 'RE'";

            $sql = "SELECT license.license_number, license.license_type, license.license_id, usercompany.usercompany_name, license.start_date, license.license_status
                    FROM license INNER JOIN usercompany ON license.place_id = usercompany.company_id AND license.sid = usercompany.usercompany_id WHERE place_id = ".$_SESSION["company_id"]." AND license_number = 'RE'";
            $request_query = mysqli_query($conn,$sql) or die ("Query fail: " . mysqli_error($conn));
            // echo $sql;

            while($request = mysqli_fetch_assoc($request_query)){
                $requests[] = $request;
            }
            $requests = array_reverse($requests,true);
            // echo count($requests);
            // $request = array_reverse($requests);
                $i = 1;
                if(is_array($requests) || is_object($requests)){
                    foreach($requests as $request){
        ?>
        <tbody class="index">
            <!-- <tr> -->
            <th class="index" id="id-row" scope="row">
                <!-- ----------- -->
            <td>
                <?php
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
                ?>
            </td>
            <td>
                <?php
                    echo $request['usercompany_name'];
                ?>
            </td>
            <td>
                <?php
                    echo date("d-m-Y", strtotime($request['start_date']));
                ?>
            </td>
            <td>
                <?php
                    echo $request['license_status'];
                ?>
            </td>
        </tbody>
        <?php
                    }
                }
        ?>
    </table>
</div>