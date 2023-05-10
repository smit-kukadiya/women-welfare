<?php
   include('config.php');
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select mail from users where mail = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['mail'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:sign-in.php");
      die();
   }
?>