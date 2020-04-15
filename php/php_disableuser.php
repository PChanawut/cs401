<?php
    session_start();
    $response = array();

    if(!empty($_SESSION["company_id"])){  
        if($_SESSION["permission"][4] == 1){
            if(isset($_POST['row_userid'])){
                include('config/database.php');
                $row_userid = $_POST['row_userid'];

                $sql = "UPDATE usercompany 
                        SET usercompany_ativate = 'deativate' 
                        WHERE usercompany_id = '".$row_userid."'";

                if (mysqli_query($conn, $sql)) {
                    $response['success'] = true;
                } else {
                    $response['success'] = false;
                }
                mysqli_close($conn);
            }else{
                $response['success'] = false;
            }
        }
    }
    echo json_encode($response);
?>