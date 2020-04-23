<?php
    $licensetype = $_POST["licensetype"];

    $sql = "INSERT INTO license(type_license)
            VALUE('$licensetype')";
    
    $query = mysqli_query($conn,$sql);
    if($query){
        echo json_encode(array("statusCode"=>200));
    }
    else{
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
?>