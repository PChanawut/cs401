<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h4>คำขออนุญาตล่าสุด</h4>
        </div>
        <div class="col">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="เลขที่ใบอนุญาตบริษัท / เลขประจำตัวประชาชน"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">ค้นหา</button>
                </div>
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
            $sql = "SELECT * 
                    FROM license l
                    INNER JOIN company c ON l.sid=c.company_id AND license_status = 'รอตรวจสอบคำขอ'";
            $user_query = mysqli_query($conn,$sql) or die("Query fail: " . mysqli_error($conn));
            while ($user =  mysqli_fetch_assoc($user_query)){
                $users[] = $user;
            }
                if (is_array($users) || is_object($users)){
                    foreach($users as $user){
                        
        ?>
        <tbody class="index">
            <td><?php echo $user['license_id']; ?></td>
            <td class="d-none d-sm-block"><?php echo $user['company_name']; ?></td>
            <td><?php echo $user['license_type']; ?></td>
            <td><?php echo date("d-m-Y", strtotime($user['start_date'])); ?></td>
            <td class="text-right">
                <button type="submit" onclick="editUser(<?php echo $user['usercompany_id']; ?>,this)"
                    class="btn btn-warning ml-2">
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