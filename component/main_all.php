<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h4>ใบอนุญาตทั้งหมด</h4>
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
                <th style="width:40%">ประเภทใบอนุญาต</th>
                <th style="width:25%">สถานะใบอนุญาต</th>
                <th>วันที่เหลือ</th>
                <th></th>
            </tr>
        </thead>
        <?php
            include('php/config/database.php');
            //https://www.tutorialrepublic.com/faq/how-to-convert-a-date-from-yyyy-mm-dd-to-dd-mm-yyyy-format-in-php.php
            $users = array();
            $company_id = $_SESSION['company_id'];
            $sql = "SELECT * 
                    FROM license
                    WHERE sid = '$company_id'
                    AND NOT license_status = 'ใบอนุญาตถูกยกเลิก'
                    
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
            <td class="d-none d-sm-block"><?php echo $user['license_type']; ?></td>
            <td><?php echo $user['license_status']; ?></td>
            <?php 
                //https://stackoverflow.com/questions/37342254/set-expiry-dates-on-php-application
                if($user['expire_date']==NULL){
                    $out = '-';
                }else{
                    $start_date = date("Y-m-d", strtotime(date("d.m.Y")));
                    $end_date = date("Y-m-d", strtotime($user['expire_date']));
                    $diff = abs(strtotime($end_date) - strtotime($start_date));

                    if($diff <= 0){
                        $out = '-';
                    }else{
                        $years = floor($diff / (365*60*60*24));
                        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                            
                        if($years > 0){
                            $out = '≈ '.$years.' ปี';
                        }else if($months > 0){
                            $out = '≈ '.$months.' เดือน';
                        }else{
                            $out = ''.$days.' วัน';
                        }
                    }
                }
            ?>
            <td><?php echo $out ?></td>
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