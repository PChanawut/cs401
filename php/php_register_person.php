<?php
    include('config/database.php');

    if(isset($_POST['submit'])){
        session_start();
        $type = $_POST['type'];
        $gender = $_POST['gender'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $name = $gender.$firstname." ".$lastname;
        $birthday = $_POST['birthday'];
        $idnumber = $_POST['idnumber'];
        $phonenumber = $_POST['phonenumber'];
        $email = $_POST['email'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $address3 = $_POST['address3'];
        $address4 = $_POST['address4'];
        $address5 = $_POST['address5'];
        $address6 = $_POST['address6'];
        $address = $address1." ".$address2." ".$address3." ".$address4." ".$address5." ".$address6;
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        
        $sql = "INSERT INTO company(company_id,company_type,company_name,office_name,company_address,company_address_storage,company_phone,company_fax,company_email,enroll_start,enroll_no,company_status)
                VALUES (NULL,'$type','$name',NULL,'$address',NULL,'$phonenumber',NULL,'$email','$birthday','$idnumber'NULL)";
        
        mysqli_query($db, $sql);
    }
?>