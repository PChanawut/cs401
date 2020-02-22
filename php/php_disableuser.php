<?php
    if(isset($_POST['row_userid'])){
        include('config/database.php');
        $row_userid = $_POST['row_userid'];

        $sql = "UPDATE usercompany 
                SET usercompany_ativate = 'deativate' 
                WHERE usercompany_id = '".$row_userid."'";

        if (mysqli_query($conn, $sql)) {
            echo "success";
        } else {
            echo "queryerror";
        }
        mysqli_close($conn);
    }else{
        echo "invalid";
    }
?>