<?php

    $response = array();
    
    if(isset($_POST['person_name']) && isset($_POST['person_position']) && isset($_POST['person_birthday']) && isset($_POST['person_identification']) 
    && isset($_POST['person_phonenumber']) && isset($_POST['person_fax']) && isset($_POST['person_email']) && isset($_POST['person_address'])
    && isset($_POST['person_district']) && isset($_POST['person_amphoe']) && isset($_POST['person_province']) && isset($_POST['person_zipcode'])
    && isset($_POST['person_storage_address']) && isset($_POST['person_storage_district']) && isset($_POST['person_storage_amphoe']) 
    && isset($_POST['person_storage_province']) && isset($_POST['person_storage_zipcode']) && isset($_POST['person_username'])
    && isset($_POST['person_password']) && isset($_POST['type'])){
        include('config/database.php');
        $person_name = $_POST['person_name'];
        $person_position = $_POST['person_position'];
        $person_birthday = $_POST['person_birthday'];
        $person_identification = $_POST['person_identification'];
        $person_phonenumber = $_POST['person_phonenumber'];
        $person_fax = $_POST['person_fax'];
        $person_email = $_POST['person_email'];

        $person_address = $_POST['person_address'];
        $person_district = $_POST['person_district'];
        $person_amphoe = $_POST['person_amphoe'];
        $person_province = $_POST['person_province'];
        $person_zipcode = $_POST['person_zipcode'];

        $person_storage_address = $_POST['person_storage_address'];
        $person_storage_district = $_POST['person_storage_district'];
        $person_storage_amphoe = $_POST['person_storage_amphoe'];
        $person_storage_province = $_POST['person_storage_province'];
        $person_storage_zipcode = $_POST['person_storage_zipcode'];

        $person_username = $_POST['person_username'];
        $person_password = md5($_POST['person_password']);

        $type = isset($_POST['type']);

        $sql1 = "INSERT INTO company(company_id, company_type, company_name, office_name, company_address,
                            company_address_storage, company_phone ,company_fax ,company_email, enroll_start,
                            enroll_no, company_status)
                VALUES (NULL,$type ,$person_name ,$person_position ,$person_address
                            ,$person_storage_address ,$person_phonenumber ,$person_fax ,$person_email ,CURDATE()
                            ,$person_identification ,'wait')";
        $sql2 = "INSERT INTO usercompany(usercompany_id, company_id, usercompany_username, usercompany_password, usercompany_fname,
                            usercompany_lname, usercompany_status, usercompany_type, usercompany_ativate, usercompany_permission)
                VALUE (NULL,'sql1',)";
        //https://stackoverflow.com/questions/5178697/mysql-insert-into-multiple-tables-database-normalization 
        //https://www.w3schools.com/php/func_mysqli_rollback.asp
        try{
            mysqli_autocommit($conn, FALSE);
            $sql1 = "INSERT INTO company(company_id, company_type, company_name, office_name, company_address,
                        company_address_storage, company_phone ,company_fax ,company_email, enroll_start,
                        enroll_no, company_status)
                    VALUES (NULL,$type ,$person_name ,$person_position ,$person_address,
                        $person_storage_address ,$person_phonenumber ,$person_fax ,$person_email ,CURDATE(),
                        $person_identification ,'wait')"; 
            mysqli_query($conn,$sql1);
            $company_id = mysqli_insert_id($conn);
            
            $company_first;
            $sql2 = "INSERT INTO usercompany(usercompany_id, company_id, usercompany_username, usercompany_password, usercompany_fname,
                        usercompany_lname, usercompany_status, usercompany_type, usercompany_ativate, usercompany_permission)
                    VALUE (NULL, $company_id, $person_name)";
            //mysqli_insert_id($conn);
        }catch(Exception $e){
            
        }

        // if (mysqli_query($conn, $sql)) {
        //     $response['success'] = true;
        //     $response['id'] = mysqli_insert_id($conn);
        //     $response['firstname'] = $firstname;
        //     $response['lastname'] = $lastname;
        //     $response['status'] = $status;
        // } else {
        //     $response['success'] = false;
        // }
        // mysqli_close($conn);
    }
    echo json_encode($response);
?>