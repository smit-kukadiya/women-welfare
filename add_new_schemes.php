<?php
  include "session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="180x180" href="../media/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../media/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../media/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="../media/favicon_io/site.webmanifest">
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
<div class="row">
<div class="col-12">
<div class="card mb-4">
<div class="card-header pb-0">
              <h6>Adding Schemes</h6>
            </div>
<div class="card-body px-0 pt-0 pb-2">
<div class="table-responsive p-0">
    <form action="#">
    <table class="table align-items-center mb-0">
        <tr>
            <td>Banner</td>
            <td><input type="file" name='banner'></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><input type="text" name='title'></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea name="desc" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>Required document seperated by comma</td>
            <td><textarea name="desc" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>Objectivies</td>
            <td><textarea name="object" id="" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;"><input type="submit"></td>
        </tr>
        </table>
    </form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>