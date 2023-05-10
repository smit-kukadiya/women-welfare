<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" content-type="application/json" ;="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="putUserDetailStyle.css">
    <title>Complete</title>
</head>
<body>

        <?php 

        
        include "config.php";

        
        $sql_query = "SELECT COUNT(*) AS cntUser FROM users WHERE mail='".$_POST['email']."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

         
        if($row['cntUser'] == 0) { if ($_POST['email'] != "") {
            $mail = $_POST['email'];
            $pw = $_POST['pass'];
            $pname = $_POST['pname'];
            $sql = "INSERT INTO users (mail, pass, name) VALUES ('$mail', '$pw', '$pname')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
                
        header("Location:sign-in.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Something is wrong";
        } } else { echo "Your email is already on database."; }


        mysqli_close($conn);
    ?>

</body>
</html>