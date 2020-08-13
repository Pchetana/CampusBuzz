<?php
   include('select.php');
   session_start();
   
   $user_check = $_SESSION['user'];
   
   $ses_sql = mysqli_query($conn,"select username from log_user where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['user'])){
      header("location:log.php");
      die();
   }
?>