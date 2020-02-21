<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h4>เพิ่มสมาชิก</h4>
        </div>
    </div>
    
    <hr>
    <?php include('php/config/database.php'); ?>
    <?php
      $users = array();
      $sql = "SELECT * FROM usercompany Where company_id=".$_SESSION["company_id"]."";  
      $user_query = mysqli_query($conn,$sql) or die("Query fail: " . mysqli_error());
      while ($user =  mysqli_fetch_assoc($user_query)){
        $users[] = $user;
      }
    ?>
    <table class="table" id='table-adduser'>
        <thead class="alert alert-primary">
          <tr>
            <th scope="col">ลำดับที่</th>
            <th scope="col">ชื่อ / นามสกุล</th>
            <th scope="col">ตำแหน่ง</th>
            <th scope="col">จัดการสมาชิก</th>
          </tr>
        </thead>
        <?php
          $i = 1;
          // echo '<script language="javascript">';
          // echo 'alert('.$users.');';
          // echo '</script>';
          if (is_array($users) || is_object($users)){
            foreach($users as $user){
        ?>
              <tbody>
                <th scope="row"><?php echo $i++; ?></th>
                <td><?php echo $user['usercompany_fname'];echo " ";echo $user['usercompany_lname']; ?></td>
                <td><?php echo $user['usercompany_status']; ?></td> 
                <td><button type="button" class="btn btn-secondary">ลบสมาชิก</button></td>
              </tbody>  
        <?php
            }
          }
        ?>
    </table>
    <button type="button" class="btn btn-light" data-toggle="modal" data-target=".model-adduser">เพิ่มสมาชิก</button>
</div>