<?php
    session_start();

    $response = array();
    
    if(isset($_POST['id_enroll_no'])){
        include('config/database.php');
        $id_enroll_no = $_POST['id_enroll_no'];

        $sql = "SELECT * FROM company 
                WHERE enroll_no='".$id_enroll_no."'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            if($row['company_status'] != 'success'){
                $response['success'] = true;
                $response['company'] = array(
                    'enroll_start' => $row['enroll_start'],
                    'company_type' => $row['company_type'],
                    'company_name' => $row['company_name'],
                    'office_name' => $row['office_name'],
                    'company_address' => $row['company_address'],
                    'company_address_storage' => $row['company_address_storage'],
                    'company_phone' => $row['company_phone'],
                    'company_fax' => $row['company_fax'],
                    'company_email' => $row['company_email'],
                    'enroll_no' => $row['enroll_no']
                );
            }else{
                $response['success'] = false;
            }
        }else{
            $response['success'] = false;
        }
    }else{
        $response['success'] = false;
    }
    echo json_encode($response);
?>