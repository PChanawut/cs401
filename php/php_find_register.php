<?php
    session_start();

    $response = array();
    
    if(isset($_POST['id_enroll_no'])){
        include('config/database.php');
        $id_enroll_no = $_POST['id_enroll_no'];
        $sql = "SELECT * FROM company WHERE company_id='$id_enroll_no' AND company_status='wait'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            if($row['company_status'] != 'success'){
                $response['success'] = true;
                $response['company'] = array(
                    'company_id' => $row['company_id'],
                    'company_type' => $row['company_type'],
                    'company_name' => $row['company_name'],
                    'company_address' => $row['company_address'],
                    'company_phone' => $row['company_phone'],
                    'company_fax' => $row['company_fax'],
                    'company_email' => $row['company_email'],
                    'enroll_start' => date("d-m-Y", strtotime($row['enroll_start'])),   
                    'enroll_no' => $row['enroll_no']   
                );
            }else{ 
                $response['success'] = false;
            }
        }else{
            $response['success'] = false;
        }
        mysqli_close($conn);
    }else if(isset($_POST['id_enroll_no2'])){
        include('config/database.php');
        $id_enroll_no2 = $_POST['id_enroll_no2'];
        $sql = "SELECT * FROM company WHERE enroll_no='$id_enroll_no2' AND company_status='wait'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            if($row['company_status'] != 'success'){
                $response['success'] = true;
                $response['company'] = array(
                    'company_id' => $row['company_id'],
                    'company_type' => $row['company_type'],
                    'company_name' => $row['company_name'],
                    'company_address' => $row['company_address'],
                    'company_phone' => $row['company_phone'],
                    'company_fax' => $row['company_fax'],
                    'company_email' => $row['company_email'],
                    'enroll_start' => date("d-m-Y", strtotime($row['enroll_start'])),   
                    'enroll_no' => $row['enroll_no']   
                );
            }else{ 
                $response['success'] = false;
            }
        }else{
            $response['success'] = false;
        }
        mysqli_close($conn);
    }else{
        $response['success'] = false;
    }
    echo json_encode($response);
?>