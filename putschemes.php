<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="180x180" href="media/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="media/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="media/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="media/favicon_io/site.webmanifest">
  <title>
    Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
</head>
<body>
        <h1><a href="billing.html">Schemes</a></h1>

        <?php 

        include "session.php";
        include "config.php";

        
        $sql_query = "SELECT COUNT(*) AS cntUser FROM schemes WHERE title='".$_POST['title']."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result); 

        if($row['cntUser'] == 0) { if ($_POST['title'] != "") {
            $title = $_POST['title'];
            $descri = $_POST['descri'];
            $doc = $_POST['doc'];
            $object = $_POST['object'];
            $sql = "INSERT INTO schemes (title, descri, doc, obj) VALUES ('$title', '$descri', '$doc', '$object')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
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