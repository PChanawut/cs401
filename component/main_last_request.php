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
    <table class="table" id="table-request">
        <thead class="thead-light">
            <tr>
                <th scope="col">ลำดับที่</th>
                <th scope="col">เลขที่ใบอนุญาต</th>
                <th scope="col">ผู้ขออนุญาต</th>
                <th scope="col">วันที่ยื่นขออนุญาต</th>
                <th scope="col">สถานะของใบอนุญาต</th>
            </tr>
        </thead>
        <?php
            include('php/config/database.php');
            $users = array();
            $sql = "SELECT license_id FROM license";
            $user_query = mysqli_query($conn,$sql) or die ("Query fail: " . mysqli_error($conn));
            while($user = mysqli_fetch_assoc($user_query)){
                $users[] = $user;
            }
                $i += 1;
                if(is_array($users) || is_object($users)){
                    foreach($users as $user){

                    }
                }
                $i++;
        ?>
        <tbody class="index">
            <tr>
                <th class="index" id="id-row" scope="row">
                    <?php
                        echo ($i);
                    ?>
                </th>
                <td>IN 41-060</td>
                <td><?php
                        $usercompany_name = $_SESSION['name'];
                        echo ($usercompany_name);
                    ?>
                </td>
                <td>1 วัน</td>
                <td><button type="button" class="btn btn-secondary">ต่ออายุ</button></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>IN 41-060</td>
                <td>ไทยซัมมิทกรุ๊ป จำกัด</td>
                <td>1 วัน</td>
                <td><button type="button" class="btn btn-secondary">ต่ออายุ</button></td>
            </tr>
        </tbody>
    </table>
</div>