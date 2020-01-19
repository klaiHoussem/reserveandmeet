<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
<meta name="Viewport" content="width = device-width , initial-scale=1"/> 
<title>  </title> 
<link rel ="stylesheet" href="css/bootstrap.min.css" >

<link rel ="stylesheet" href="styleAjout.css" > 

</head>
<body> 

  <nav class="navbar navbar-expand-lg fixed-top ">
    
    <div class="container">
<a class="navbar-brand" href="home.php">
          <img src="../image/reserv&meet-logo.png" alt="">
        </a>
  
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="#">Category </a>
      </li>
     
        <a class="nav-link" href="ajouterEspace.php">Share your space</a>
      </li>

      <div class="row">
  <div class="col-6 border-right"></div>
  <div class="col-6 border-left"></div>
    <div class="col-13"></div>
</div>
        <a type="button" class="btn btn-primary" href="explore.php">Explore</a>
     <li class="nav-item">
      <?php 
      include('loginn.php');
      if (isset($_SESSION['login_user'])){
      
      echo '<div class="nav-link"><div class="dropdown">
  <img style="vertical-align: middle;
  width: 30px;
  height: 30px;
  border-radius: 50%;" src="../image/user.png" alt="Avatar" class="avatar"  class="dropdown-toggle" type="image" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu" style="margin-left: -135px;">
    <a class="dropdown-item" href="profile.php">Profile</a>
    <a class="dropdown-item" href="#">My meetings</a>
    <a class="dropdown-item" href="#">My rooms</a>
    <a class="dropdown-item" href="logout.php">Log Out</a>
  </div>
</div> ';
     } 
     else {
     echo '<a class="nav-link" href="SignIn.php">Connect</a>';

 }
      ?>

      </li>
    </ul>
    </div>
  </div>
</div>
</nav>

<div class="row justify-content-center" style="margin-top: 5.5rem!important;">
  <div class="col-6">
<div class="container">
  <div class="mt-4">
<h3 class = "text"> Access to the establishment </h3> 

<p class="para" style="margin-bottom: 2.2rem">Fill in all the necessary information to allow your customers to easily find your establishment<br>

All this information is disclosed only when you confirm a room reservation.<br></p>

  
  <form method="POST" action="../controller/ajouterEspaceController.php" enctype="multipart/form-data">
    
    <div class="form-row align-items-center">
   
  <div class="form-group col-md-6">
    <label for="nomesp">Establishment name</label>
    <input type="text" class="form-control" name="nomesp" placeholder="Conference room name">
  </div>

<div class="form-group col-md-6">
    <label for="localisation">Adress</label>
    <input type="Text" class="form-control" name="localisation" placeholder="Where it is">
  </div>
</div>
<div class="form-row align-items-center">
  <div class="form-group col-md-6">
    <label for="capacite">Capacity</label>
    <input type="Text" class="form-control" name="capacite" placeholder="Number of participants?">
  </div>

 
  <div class="form-group col-md-6">
      <label for="inputState">Room type</label>
      <select id="inputState" class="form-control" name="type" >
        <option selected> </option>
        <option>Conference</option>
        <option>Theatre</option>
      </select>
    </div>
</div>
<div class="form-row align-items-center">
  <div class="form-group col-md-6">
    <label for="image">Room picture </label>
    <input type="file" class="form-control-file" name="image" id="image">
</div>
  
  <div class="form-group col-md-6">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
  </div>
</div>
  <!--  <div id="calendar"></div>-->
  
<div class="bouton">
  <button type="submit" class="btn btn-primary" >Save your room</button>
</div>

</div>

</form>


<script src = "js/bootstrap.min.js" > </script>
<script src = "js/popper.min.js" > </script>
<script src = "js/jquery-3.4.1.min.js" > </script>

</body>
</html>
