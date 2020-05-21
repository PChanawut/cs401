<div class="container mt-5">
    <div class="row">
        <div class="col">
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
    <table class="table" id="table-adduser">
        <thead class="alert alert-primary">
            <tr>
                <th style="width:15%">ลำดับ</th>
                <th style="width:20%">ประเภท</th>
                <th style="width:30%">ชื่อ-นามสกุล / ชื่อบริษัท</th>
                <th>สถานะบริษัท</th>
                <th></th>
            </tr>
        </thead>
        <?php
            include('php/config/database.php');
            $users = array();
            $sql = "SELECT * FROM company WHERE company_status = 'wait'";  
            $user_query = mysqli_query($conn,$sql) or die("Query fail: " . mysqli_error($conn));
            while ($user =  mysqli_fetch_assoc($user_query)){
                $users[] = $user;
            }
                $i = 1;
                if (is_array($users) || is_object($users)){
                    foreach($users as $user){
        ?>
        <tbody class="index">
            <th class="index" id="id-row" scope="row"></th>
            <td><?php echo($user['company_type'] == 'company' ? 'นิติบุคคล' : 'บุคคลธรรมดา'); ?></td>
            <td><?php echo $user['company_name']; ?></td>
            <td>รอการอนุมัติ</td>
            <td class="text-right">
                <button type="submit" onclick="detailcompany(<?php echo $user['company_id']; ?>)" class="btn btn-warning ml-2">
                        <i class="fa fa-calendar-check-o" style="font-size:20px;color:white"></i>
                </button>
            </td>
        </tbody>
        <?php
                    }
                }
        ?>
    </table>
</div>