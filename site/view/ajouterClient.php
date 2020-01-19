
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
<meta name="Viewport" content="width = device-width , initial-scale=1"/> 
<title>  </title> 
<link rel ="stylesheet" href="css/bootstrap.min.css" > 
<link rel ="stylesheet" href="style.css" > 
<link rel ="stylesheet" href="SignIn.css" > 
</head>

<body style="background-color: #fff;">
 
<div class="Illustration">

<img src="../image/schedule_isometric_illustration.png" alt="jdyd" style="float:left;width:500px;height:400px; margin-left: 6%;
    margin-top: 10%;"></div>

<div class="row">



<ul id="cat"> 
<ul class="list-inline"> <li class="list-inline-item">Do you have an account?</li>
 
 <li class="list-inline-item"><a href="SignIn.php">Sign In</li> </ul> 
 </div></div></a></a></a><br><br>
 <center>
 
 
 <strong> <h3>Login to your personal account </strong></center>
 <center>
 <p class="text-secondary" style="margin-top:-20px; margin-bottom: 20px;">Enter your details below</p></center>


<header>

<div class="row justify-content-center" >
  <div class="col-8">
  <form method="POST" action="../controller/ajouterClientController.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nom">Name</label>
    <input type="text" class="form-control" name="nom" placeholder="name">
  </div>

<div class="form-group">
    <label for="prenom">Surname</label>
    <input type="Text" class="form-control" name="prenom" placeholder="surname">
  </div>

 <div class="form-group">
    <label for="nomentreprise">Establishment </label>
    <input type="text" class="form-control" name="nomentreprise" placeholder="(NGO/Entreprise/Club/association/ect..)"></div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="Text" class="form-control" name="email" placeholder="email@email.com">
  </div>
 
  <!-- <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>-->

  <div class="form-group">
    <label for="password">Password </label>
    <input type="password" class="form-control" name="password" placeholder="password">




 

  <button type="submit" class="btn btn-primary" style="float: right; margin-top: 10%;margin-bottom: 10%;" >Get Started</button>
</div></div>
</form>
</header>
<footer>
 <section class="ft-main col" style="display:flex; background-color: #000; color: #fff; " >
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
<img src="../image/reserv&meet-logo.png" style="float: right; margin:auto;">


</section>
<div class="bg-info clearfix" style="background-color: #000!important;">
<div class="footer-copyright text-center py-1" style="background-color:#3F9ADF; color: #fff; width: 40%; float:right; border-radius: 5%;    margin-right: 12%;
"><a>© 2019 Copyright: Reserve and meet</a>
    

<!-- Copyright -->
</div>


</div>
</footer>

<script src = "js/bootstrap.min.js" > </script>
<script src = "js/jquery-3.4.1.min.js" > </script>
</body>
</html>