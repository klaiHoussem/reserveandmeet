<?php
   include '../model/ClientModel.php';

if($_SERVER["REQUEST_METHOD"] == "POST" ){
   $clientmodel = new ClientModel();
   $res=$clientmodel->SignInClient();
   $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
      //$active = $row['active'];
      
   $count = mysqli_num_rows($res);
   if($count == 1) {
        // session_register("myusername");
         session_destroy();
         session_start();
         $_SESSION['login_user'] = $row['id_client'];
         header("location:../view/welcome.php");
      }
      else {
         echo"Your Login Name or Password is invalid";
         $error = "Your Login Name or Password is invalid";
      }


   //$url = "../index.php";
   //header('location:'.$url);
}
?>