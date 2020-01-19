<html>
<head>
<title> Espace détaille</title>
<meta charsert="utf-8"/>
<meta name ="viewport" content ="width=content-width,initial-scale=1"/>
<link rel="Stylesheet" href="css/bootstrap.min.css">
<link rel="Stylesheet" type="text/css" href="style.css">
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
    <a class="dropdown-item" href="#">Profile</a>
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
<center>
  <?php require_once '../Configuration.php';
         $db = new Db();
            
         $param=$_GET['id'];
    $sql = "SELECT * FROM espace where id_espace=".$param;
               
       echo $sql;         
       $result= $db-> query($sql);
       $aff=mysqli_fetch_array($result)
        ?>
<div id="cover">
<img src="../image/<?php echo $aff['image']; ?>" alt="espace" style="float:middle;width:1200px;height:900px;border-radius: 5%;    margin-top: -500px;box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.26);

"></center></div>

	</div>
<div class="container" style="margin-top: 30px; margin-bottom: 30px;">

	<center ><h2 style="color:#000;"><?php echo $aff['nomesp']; ?></h2>
	
	<h3>"<?php echo $aff['description']; ?>"</center><br>
	<center>
 <table>
 <tr>
 <td>
 <strong> <p >
 <font color="#3F9ADF">
 Type of room : <?php echo $aff['type']; ?></strong><br><br>
 </td>
 </tr>
 
 
<tr>
 <td>
 <strong> <p>
 <font color="#3F9ADF">
 Room capacity :<?php echo $aff['capacite'];  ?> participant </strong><br><br>
 </td>
 </tr>
 
  <tr>
 <td>
 <strong> <p>
 <font color="#3F9ADF">
 Establishment adress : <?php echo $aff['localisation'];  ?> </strong><br><br>
 </td>
 </tr>
 </table></center><br><br>

  
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="margin-bottom: 30px;float: right;">
  Check Availibility
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Process to Reserve</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <form method="POST" action="../controller/ajouterReservationController.php" >
          <div class="form-group">
            <label for="date_d" class="col-form-label">Check In</label>
            <input type="date" class="form-control" id="date_d" placeholder="Check In" name="date_d">

            <label for="date_f" class="col-form-label">Check Out</label>
            <input type="date" class="form-control" id="date_f" placeholder="Check Out" name="date_f">
            <input type="text" name="id_espace" value="<?php echo $param ?>" style="display: none;"> <?php if (isset($_SESSION['login_user'])){?>
             <input type="text" name="id_client" value="<?php echo $_SESSION['login_user'] ?>" style="display: none;">
        <?php }
        
          ?>
          </div>
      </div>
      <div class="modal-footer">
        <?php  if (isset($_SESSION['login_user'])){?>
        <button type="submit" class="btn btn-primary">Request a meeting</button>
        <?php
      }
        else 
          {?><h6 style="color: red;">You have to Login first</h6>
            <a class="btn btn-primary" href="SignIn.php">Login</a>
          <?php }?>
      </div>
    </div>
  </div>
</div>

</form>

<a type="button" class="btn btn-primary"></a>
  
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
<div class="footer-copyright text-center py-1" style="background-color:#3F9ADF; color: #fff; width: 40%; float:right; border-radius: 5%;    margin-right: 12%;
"><a>© 2019 Copyright: Reserve and meet</a>
    

<!-- Copyright -->
</div>


</div>
</footer>
 
 
</header>
<script src = "js/jquery-3.4.1.min.js" > </script>
<script src = "js/popper.min.js" > </script>
<script src = "js/bootstrap.min.js" > </script>
<script src = "js/scripts.js" > </script>

</body>
</html>

