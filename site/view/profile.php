<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
<meta name="Viewport" content="width = device-width , initial-scale=1"/> 
<title>  </title> 
<link rel ="stylesheet" href="css/bootstrap.min.css" >
<link rel ="stylesheet" href="style.css" >
<link rel ="stylesheet" href="explore.css" > 


 
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
      <button type="button" class="btn btn-primary">Explore</button>
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


<div class="container" style="    margin-top: 55px;">
	<div class="row">
		
    <div class="col-md-2 d-none d-md-block bg-dark sidebar" style="margin-left: -107px;
    margin-right: 253px;">
    <div class="sidebar-sticky" style="position:fixed;">
      <img style="vertical-align: middle;
  width: 100px;
  height: 100px;
  border-radius: 50%;" src="../image/user.png" alt="Avatar" class="avatar" >
  <div class="text" style="color:#fff;">
  <h4 klai.houssem@gmail.com></h4><br>
  <h4 klai Houssem ></h4><br>
  <h4 User company name></h4><br></div>
    </div>
</div>


    <div class="col">
      <div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-4">
    <div class="card h-100">
      <img src="../image/teemu-paananen-bzdhc5b3Bxs-unsplash.jpg" class="card-img-top" alt="This zooms-in really well and smooth">

      <div class="card-body text-center">
        <h3 class="card-title">Conference Room</h3>
        <p class="card-text"> Hotel Africa</p>
        <a href="#" class="btn btn-primary">Edit</a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <img src="../image/teemu-paananen-bzdhc5b3Bxs-unsplash.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h3 class="card-title">Card title</h3>
        <p class="card-text">This is a short card.</p>
        <a href="#" class="btn btn-primary">Edit</a>
      </div>
    </div>
  </div>
    </div>
      <div class="col mb-4">
    <div class="card h-100">
      <img src="../image/teemu-paananen-bzdhc5b3Bxs-unsplash.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h3 class="card-title">Card title</h3>
        <p class="card-text">This is a short card.</p>
        <a href="#" class="btn btn-primary">Edit</a>
      </div>
    </div>
  </div>
</div>








<script src = "js/jquery-3.4.1.min.js" > </script>
<script src = "js/popper.min.js" > </script>
<script src = "js/bootstrap.min.js" > </script>




</body>
</html>

			