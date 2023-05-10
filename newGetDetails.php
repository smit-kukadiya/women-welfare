<?php

    include "config.php";

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);

    if ($email != "" && $pass != ""){

    $sql_query = "SELECT COUNT(*) AS cntUser FROM details WHERE mail='".$email."' and password='".$pass."'";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['email'] = $email;
        echo 1;
    }else{
        echo 0;
    }
    }
?>