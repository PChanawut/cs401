<?php
    session_start();
    if(isset($_POST['username']) && isset($_POST['password'])){
        include('config/database.php');
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql="SELECT * FROM company Where company_user='".$username."' and company_password='".$password."' ";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $_SESSION['u_id'] = $row['company_id'];
            $_SESSION['name'] = $row['company_name'];
            
            echo 'success';
        }else{
          echo 'invalid';
        }
    }else{
        echo 'invalid';
    }
?>