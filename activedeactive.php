<?php
include "session.php";
    //including the database connection file
    include "config.php";

    //getting id of the data from url
    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT status from schemes where no=$id");

    while($row = mysqli_fetch_array($result)) {
        if($row['status']==1) {
            mysqli_query($conn, "UPDATE schemes SET status=0 WHERE no=$id");
        }
        else {
            mysqli_query($conn, "UPDATE schemes set status=1 where no=$id");
        }
    }
    header("Location:billing.php");
?>