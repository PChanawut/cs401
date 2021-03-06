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
                <th style="width:25%">ชื่อ / นามสกุล</th>
                <th style="width:15%">ตำแหน่ง</th>
                <th>การเข้าถึง</th>
                <th></th>
            </tr>
        </thead>
        <?php
            include('php/config/database.php');
            $users = array();
            $sql = "SELECT * FROM usercompany WHERE (usercompany_type='officer' OR usercompany_type = 'subcommittee') AND usercompany_ativate = 'ativate'";  
            $user_query = mysqli_query($conn,$sql) or die("Query fail: " . mysqli_error($conn));
            while ($user =  mysqli_fetch_assoc($user_query)){
                $users[] = $user;
            }
                $i = 1;
                if (is_array($users) || is_object($users)){
                    foreach($users as $user){
        ?>
        <tbody class="index">
            <th class="index" id="id-row" scope="row">
                <!-- </td> -->
            <td><?php echo $user['usercompany_name']; ?></td>
            <td class="d-none d-sm-block"><?php echo $user['usercompany_status']; ?></td>
            <td>
                <!-- request -->
                <?php
                    if($user['usercompany_permission'][0]){
                ?>
                    <?php if($user['usercompany_type'] == "officer"){ ?><span class="badge badge-success" style="background: #2973CB;">ยืนยันการสมัคร</span><?php } ?>
                    <?php if($user['usercompany_type'] == "subcommittee"){ ?><span class="badge badge-success" style="background: #2973CB;">อนุมัติใบอนุญาต</span><?php } ?>
                <?php
                    }else{
                ?>
                    <?php if($user['usercompany_type'] == "officer"){ ?><span class="badge badge-secondary">ยืนยันการสมัคร</span><?php } ?>
                    <?php if($user['usercompany_type'] == "subcommittee"){ ?><span class="badge badge-secondary">อนุมัติใบอนุญาต</span><?php } ?>
                <?php
                    }
                ?>
                <!-- renew -->
                <?php
                    if($user['usercompany_permission'][1]){
                ?>
                    <?php if($user['usercompany_type'] == "officer"){ ?><span class="badge badge-success" style="background: #2973CB;">ยืนยันการขออนุญาต</span><?php } ?>
                    <?php if($user['usercompany_type'] == "subcommittee"){ ?><span class="badge badge-success" style="background: #2973CB;">ดูใบอนุญาต</span><?php } ?>
                <?php
                    }else{
                ?>
                    <?php if($user['usercompany_type'] == "officer"){ ?><span class="badge badge-secondary">ยืนยันการขออนุญาต</span><?php } ?>
                    <?php if($user['usercompany_type'] == "subcommittee"){ ?><span class="badge badge-secondary">ดูใบอนุญาต</span><?php } ?>
                <?php
                    }
                ?>
                <!-- dismiss -->
                <?php
                    if($user['usercompany_permission'][2]){
                ?>
                    <?php if($user['usercompany_type'] == "officer"){ ?><span class="badge badge-success" style="background: #2973CB;">ยกเลิกใบอนุญาต</span><?php } ?>
                <?php
                    }else{
                ?>
                    <?php if($user['usercompany_type'] == "officer"){ ?><span class="badge badge-secondary">ยกเลิกใบอนุญาต</span><?php } ?>
                <?php
                    }
                ?>
                <!-- all -->
                <?php
                    if($user['usercompany_permission'][3]){
                ?>
                    <?php if($user['usercompany_type'] == "officer"){ ?><span class="badge badge-success" style="background: #2973CB;">ดูใบอนุญาต</span><?php } ?>
                <?php
                    }else{
                ?>
                    <?php if($user['usercompany_type'] == "officer"){ ?><span class="badge badge-secondary">ดูใบอนุญาต</span><?php } ?>
                <?php
                    }
                ?>
            </td>
            <td class="text-right">
                <button type="submit" onclick="editUser(<?php echo $user['usercompany_id']; ?>,this)" class="btn btn-warning ml-2">
                    <i class="fa fa-edit" style="font-size:20px;color:white"></i>
                </button>
                <button type="submit" onclick="deleteUser(<?php echo htmlspecialchars(json_encode($user,JSON_UNESCAPED_UNICODE)); ?>)" class="btn btn-danger ml-2">
                    <i class="fa fa-trash" style="font-size:20px;color:white"></i>
                </button>
            </td>
        </tbody>
        <?php
                    }
                }
        ?>
    </table>
</div>