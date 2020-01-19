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
                      <img style="vertical-align: middle; width: 30px; height: 30px; border-radius: 50%;" src="../image/user.png" alt="Avatar" class="avatar"  class="dropdown-toggle" type="image" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenu" style="margin-left: -135px;">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <a class="dropdown-item" href="#">My meetings</a>
                        <a class="dropdown-item" href="#">My rooms</a>
                        <a class="dropdown-item" href="logout.php">Log Out</a>
                      </div>
                    </div></div> ';
            } 
            else {
               echo '<a class="nav-link" href="SignIn.php">Connect</a>';
            }?>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--Content -->

<div class="test">
  <div class="btn-group btn-group-toggle" data-toggle="buttons" style="margin-left: 800px;
    margin-bottom: 40px;">
    <label class="btn btn-secondary active">
      <input type="radio" name="options" id="option1" checked> ALL
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="options" id="option2"> Conference
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="options" id="option3"> Theatre
    </label>
  </div>

  <?php require_once '../Configuration.php';
    $db = new Db();
    $sql = "SELECT * FROM espace ";
    $result= $db-> query($sql); 
  ?>
      
 
    <div class="row row-cols-4">
      <?php
        while($aff=mysqli_fetch_array($result)){
      ?>
        <div class="col-3 mb-4" >
          <div class="card h-100">
            <img src="../image/<?php echo $aff['image']; ?>" class="card-img-top" alt="This zooms-in really well and smooth">

            <div class="card-body text-center">
              <h3 class="card-title">

                <?php 
                  echo $aff['type']; 
                ?>
                Room
              </h3> 
              <p class="card-text">
                <?php 
                  echo $aff['nomesp']; 
                ?>
              </p>
              <a href="RoomDetails.php?id=<?php echo $aff['id_espace']; ?>" class="btn btn-primary">Reserve</a>
            </div>
          </div>
        </div>
      <?php
        }
      ?>
      
    </div>
  </div>






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
    <div class="footer-copyright text-center py-1" style="background-color:#3F9ADF; color: #fff; width: 40%; float:right; border-radius: 5%;    margin-right: 12%;">
      <a>© 2019 Copyright: Reserve and meet</a>
    <!-- Copyright -->
    </div>
  </div>
</footer>

  <script src = "js/jquery-3.4.1.min.js" > </script>
  <script src = "js/popper.min.js" > </script>
  <script src = "js/bootstrap.min.js" > </script>
  <script src = "js/scripts.js" > </script>

</body>
</html>

