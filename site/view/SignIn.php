
<?php
include('loginn.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
<meta name="Viewport" content="width = device-width , initial-scale=1"/> 
<title>  </title> 
<link href="https://fonts.googleapis.com/css?family=Lato:100,400,700,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
<link rel ="stylesheet" href="css/bootstrap.min.css" >
<link rel ="stylesheet" href="style.css" > 
<link rel ="stylesheet" href="Signin.css" > 

</head>

<body style="background-color: #fff;">
<div class="Illustration">
<img src="../image/schedule_isometric_illustration.png" alt="jdyd" style="float:left;width:500px;height:400px;    margin-left: 6%;
    margin-top: 6%;"></div>


<div class="row">



<ul id="cat"> 
<ul class="list-inline"> <li class="list-inline-item">Don't have an account?</li>
 
 <li class="list-inline-item"><a href="ajouterClient.php">Sign up</li> </ul> 
 </div></div></a><br><br><br>
 <center>
 
 
 <strong> <h3>Login to your personal account </strong></center>
 <center>
 <p class="text-secondary" style="margin-top:-20px;">Enter your details below</p></center>
 
<header>

  <div class="row">
    <div class ="col-lg-6 m-auto">

      <div class="mt-5">
        


<form method="POST" action="../controller/SignInController.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email"id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">exemple@mail.com.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  


  <button type="submit" value="login" class="btn btn-primary" style="float: right;margin-top: 10%;">Connexion</button>
</div>
</div>
</form>
</header>

<footer>
 <section class="ft-main col" style="display:flex; background-color: #000; color: #fff;margin-top: 148px;
;
 " >
 <div class="ft-main-item" style="margin-left:10%;">
<h3 style="color: #fff;">Aide<br></h3>
FAQ<br>
Contact<br>
contact@resnmeet.com
</div>

<div class="ft-main-item" style="margin-left:10%;">
<h3 style="color: #fff;">A propos<br></h3>
Condition Générale<br>
Politique et confidentialité<br>

</div>
 
 <div class="ft-main-item" style="margin-left:10% !important; ">
<h3 style="color: #fff;">Menu<br></h3>
Explorer<br>
Categorie<br>

</div>
<img src="../image/reserv&meet-logo.png" style="float: right; margin:auto;"></div>


</section>
<div class="bg-info clearfix" style="background-color: #000!important;">
<div class="footer-copyright text-center py-1" style="background-color:#3F9ADF; color: #fff; width: 40%; float:right; border-radius: 5%;    margin-right: 12%;
"><a>© 2019 Copyright: Reserve and meet</a>
    

<!-- Copyright -->
</div>


</div>
</footer>

</body>
</html>