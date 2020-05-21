<div class="container mt-5">
    <div class="row">
        <div class="col">
            <!-- <h4>เพิ่มสมาชิก</h4> -->
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Recipient's username"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Search</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="float-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".model-adduser"><i
                        class="fa fa-plus-circle" style="font-size:20px;color:white" aria-hidden="true"
                        data-toggle="modal" data-target=".model-adduser"></i> เพิ่มสมาชิก</button>
            </div>
        </div>
    </div>
    <hr>
    <table class="table" id="table-adduser">
        <thead class="alert alert-primary">
            <tr>
                <th style="width:10%">ลำดับ</th>
                <th style="width:25%">บริษัท / ชื่อ</th>
                <th style="width:40%">ประเภทใบอนุญาต</th>
                <th>วันที่ยื่นขอ</th>
                <th></th>
            </tr>
        </thead>
        <?php
            include('php/config/database.php');
            //https://www.tutorialrepublic.com/faq/how-to-convert-a-date-from-yyyy-mm-dd-to-dd-mm-yyyy-format-in-php.php
            $users = array();
            $sql = "SELECT * FROM license WHERE (license_status='request')";
            $user_query = mysqli_query($conn,$sql) or die("Query fail: " . mysqli_error($conn));
            while ($user =  mysqli_fetch_assoc($user_query)){
                $users[] = $user;
            }
                if (is_array($users) || is_object($users)){
                    foreach($users as $user){
        ?>
        <tbody class="index">
            <th class="index" id="id-row" scope="row">
                <?php 
                echo $user['company_id'];
                $id = $user['company_id'];
                $sql = "SELECT * FROM company WHERE (company_id='$id')";
                $result = mysqli_query($conn,$sql);
                if (mysqli_num_rows($result)==1) {
                    $row = mysqli_fetch_array($result);
                }
            ?>
            <td><?php echo $row['company_name']; ?></td>
            <?php
                if($user['type_license'] == '1'){
                    $type_string = "ใบอนุญาตประเภท 1: สำหรับขออนุญาตฯ วัสดุพลอยได้";
                }else if($user['type_license'] == '2'){
                    $type_string = "ใบอนุญาตประเภท 2: สำหรับนำเข้า-ส่งออกวัสดุพลอยได้";
                }else if($user['type_license'] == '3'){
                    $type_string = "ใบอนุญาตประเภท 3: สำหรับขออนุญาตฯ วัสดุนิวเคลียร์พิเศษ";
                }else if($user['type_license'] == '4'){
                    $type_string = "ใบอนุญาตประเภท 4: สำหรับนำเข้า-ส่งออกวัสดุนิวเคลียร์-วัสดุต้นกำลัง";
                }else if($user['type_license'] == '5'){
                    $type_string = "ใบอนุญาตประเภท 5: สำหรับขออนุญาตพลังงานปรมาณูจากเครื่องปฎิกรณ์ปรมาณู";
                }else if($user['type_license'] == '6'){
                    $type_string = "ใบอนุญาตประเภท 6: สำหรับทำให้วัสดุต้นกำลังพ้นสภาพฯ";
                }else{
                    $type_string = "ใบอนุญาตประเภท 7: สำหรับขออนุญาตฯ เครื่องกำเนิดรังสี";
                }
            ?>
            <td class="d-none d-sm-block"><?php echo $type_string; ?></td>
            <td><?php echo date("d-m-Y", strtotime($user['start_license'])); ?></td>
            <td class="text-right">
                <button type="submit" onclick="editUser(<?php echo $user['usercompany_id']; ?>,this)"
                    class="btn btn-warning ml-2">
                    <i class="fa fa-calendar-check-o" style="font-size:20px;color:white"></i>
                </button>
                <!-- <button type="submit" id="removeid" onclick="deleteUser(<?php echo $user['usercompany_id']; ?>,this)" -->
                <!-- class="btn btn-danger ml-2"> -->
                <!-- <i class="fa fa-calendar-check-o"></i> -->
                <!-- </button> -->
            </td>
        </tbody>
        <?php
                    }
                }
        ?>
    </table>
</div>