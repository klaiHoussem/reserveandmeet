<?php
   require_once('../Configuration.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   $db= new Db();
   $sql="select email from client where email = '$user_check' ";
   $res=$db->query($sql);
   $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:loginn.php");
      die();
   }
?>