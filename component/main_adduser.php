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
                <th class="d-none d-sm-block">ลำดับ</th>
                <th>ชื่อ / นามสกุล</th>
                <th class="d-none d-sm-block">ตำแหน่ง</th>
                <th>แก้ไขสมาชิก</th>
            </tr>
        </thead>
        <?php
            include('php/config/database.php');
            $users = array();
            $sql = "SELECT * FROM usercompany WHERE company_id=".$_SESSION["company_id"]." AND usercompany_ativate = 'ativate' AND NOT usercompany_id = ".$_SESSION["user_id"]."";  
            $user_query = mysqli_query($conn,$sql) or die("Query fail: " . mysqli_error($conn));
            while ($user =  mysqli_fetch_assoc($user_query)){
                $users[] = $user;
            }
                $i = 1;
                if (is_array($users) || is_object($users)){
                    foreach($users as $user){
        ?>
        <tbody class="index">
            <th class="index d-none d-sm-block" id="id-row" scope="row">
                </td>
            <td><?php echo $user['usercompany_fname'];echo " ";echo $user['usercompany_lname']; ?></td>
            <td class="d-none d-sm-block"><?php echo $user['usercompany_status']; ?></td>
            <td>
                <button type="submit" id="removeid" onclick="deleteUser(<?php echo $user['usercompany_id']; ?>,this)"
                    class="btn btn-danger ml-2">ลบสมาชิก</button>
            </td>
        </tbody>
        <?php
                    }
                }
        ?>
    </table>
</div>