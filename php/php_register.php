<?php
    function random_string($length) {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }
    $response = array();
    $dataJson = json_decode($_POST['data'],true);
    if(isset($dataJson['person_name']) && isset($dataJson['person_identification']) && isset($dataJson['person_phonenumber']) && isset($dataJson['person_fax']) && isset($dataJson['person_birthday']) 
    && isset($dataJson['person_email']) && isset($dataJson['person_address']) && isset($dataJson['person_district']) && isset($dataJson['person_amphoe']) && isset($dataJson['person_province']) 
    && isset($dataJson['person_zipcode']) && isset($dataJson['person_username']) && isset($dataJson['person_password']) && isset($dataJson['category']) && $_FILES['file']){
        include('config/database.php');
        $response['test']="pass";
        $person_name = $dataJson['person_name'];
        $person_identification = $dataJson['person_identification'];
        $person_phonenumber = $dataJson['person_phonenumber'];
        $person_fax = $dataJson['person_fax'];
        $person_email = $dataJson['person_email'];
        $person_birthday = $dataJson['person_birthday'];
        $person_address = $dataJson['person_address'];
        $person_district = $dataJson['person_district'];
        $person_amphoe = $dataJson['person_amphoe'];
        $person_province = $dataJson['person_province'];
        $person_zipcode = $dataJson['person_zipcode'];

        $person_username = $dataJson['person_username'];
        $person_password = md5($dataJson['person_password']);

        $category = $dataJson['category'];
        $person_address = $person_address.",".$person_district.",".$person_amphoe.",".$person_province.",".$person_zipcode;

        //file
        //https://stackoverflow.com/questions/10456113/check-file-extension-in-upload-form-in-php
        $upload = '../file/';
        $uploadedFile = ''; //filename
        $temp = explode(".", $_FILES["file"]["name"]);
        $fileName = hash('sha512', random_string(50)) . '.' . end($temp);
        $targetFilePath = $upload . $fileName; 
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
        $allowTypes = array('pdf');  //array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to the server 
            $newfilename = round(microtime(true)) . '.' . end($temp);
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                $uploadedFile = $fileName; 

                $rollbackArray = array();
                //https://stackoverflow.com/questions/5178697/mysql-insert-into-multiple-tables-database-normalization 
                //https://www.w3schools.com/php/func_mysqli_rollback.asp
                mysqli_autocommit($conn, FALSE);      
                $sql1 = "INSERT INTO company(company_id,company_type,company_name,company_address,company_phone,company_fax,company_email,enroll_start,enroll_no,company_status,company_file)
                        VALUES (NULL,'$category','$person_name','$person_address','$person_phonenumber','$person_fax','$person_email','$person_birthday','$person_identification','wait','$fileName')"; 
                if(!mysqli_query($conn,$sql1)){
                    array_push($rollbackArray,"rollback");
                }  
                $company_id = mysqli_insert_id($conn);
                $sql2 = "INSERT INTO usercompany(usercompany_id, company_id, usercompany_username, usercompany_password, usercompany_name,usercompany_status, usercompany_type, usercompany_ativate, usercompany_permission)
                        VALUE (NULL,'$company_id','$person_username','$person_password','$person_name','admin','$category','deativate','11111')";
                if(!mysqli_query($conn,$sql2)){
                    array_push($rollbackArray,"rollback");
                } 
                
                if(!empty($rollbackArray)){
                    unlink($targetFilePath); // delete file
                    mysqli_rollback($conn);
                    $response['success'] = false;
                    echo json_encode($response);
                    mysqli_close($conn);
                    exit();
                }else{
                    mysqli_commit($conn);
                    $response['success'] = true;
                    echo json_encode($response);
                    mysqli_close($conn);
                    exit();
                } 
            }else{ 
                // $uploadStatus = 0; 
                // $response['message'] = 'Sorry, there was an error uploading your file.'; 
            } 
        }else{ 
            // $uploadStatus = 0; 
            // $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
        }
    }     
    $response['success'] = false;
    echo json_encode($response);
?>