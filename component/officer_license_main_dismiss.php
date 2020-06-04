<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h4>ยกเลิกใบอนุญาต</h4>
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
                <th style="width:25%">สถาณะใบอนุญาต</th>
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
                    FROM license WHERE license_status = 'ขอยกเลิก' 
                    ";
            $user_query = mysqli_query($conn,$sql) or die("Query fail: " . mysqli_error($conn));
            while ($user =  mysqli_fetch_assoc($user_query)){
                $users[] = $user;
            }
                if (is_array($users) || is_object($users)){
                    foreach($users as $user){
                        
        ?>
        <tbody class="index">
            <th class="index" id="id-row" scope="row">
            <td class="d-none d-sm-block"><?php echo $user['license_status']; ?></td>
            <td><?php echo $user['license_type']; ?></td>
            <td><?php echo date("d-m-Y", strtotime($user['start_date'])); ?></td>
            <td class="text-right">
                <button type="submit" onclick="detailLicense(<?php echo $user['license_id']; ?>,'<?php echo $user['license_type']; ?>')"
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