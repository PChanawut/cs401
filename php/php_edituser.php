<?php
    session_start();

    $response = array();

    if(!empty($_SESSION["usercompany_id"])){  
        if($_SESSION["permission"][4] == 1){
            include('config/database.php');
            $usercompany_id = $_POST['usercompany_id'];

            $sql = "SELECT * FROM usercompany WHERE usercompany_id = ".$usercompany_id."";
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result)==1) {
                $row = mysqli_fetch_array($result);
                if($row['usercompany_ativate'] != 'deativate'){
                    $response['company_id'] = $row['company_id'];
                    $response['user_id'] = $row['usercompany_id'];
                    $response['name'] = $row['usercompany_name'];
                    $response['type'] = $row['usercompany_type'];
    
                    $response['permission'] = array();
                    for($i=0 ; $i < strlen($row['usercompany_permission']) ; $i++){
                        $response['permission'][$i] = $row['usercompany_permission'][$i];
                    }
                    $response['success'] = true;
                }else{
                    $response['success'] = false;
                }
            } else {
                $response['success'] = false;
            }
            mysqli_close($conn);
        }
	}else{
        $response['success'] = false;
    }
    echo json_encode($response);
?>