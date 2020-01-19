
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
<meta name="Viewport" content="width = device-width , initial-scale=1"/> 
<title>  </title> 
<link href="https://fonts.googleapis.com/css?family=Lato:100,400,700,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
<link rel ="stylesheet" href="css/bootstrap.min.css" >
<link rel ="stylesheet" href="css/all.min.css" > 
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<link rel ="stylesheet" href="style.css" > 

</head>
<body>

	<nav class="navbar navbar-expand-lg fixed-top ">
		
		<div class="container">
<a class="navbar-brand" href="#">
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


<header class="back-img">
	<div class="container">
		<div class="content">
		<div class="text"></div>
		<h2 style="color: #fff; text-transform: uppercase;">Book the perfect location for  <br>your meetings and seminars.</h2>	
		<h3 style="color: #fff";>Let every meeting be a moment that inspires you.
 Easy to use, no booking fees.</h3></div>
		</div>
	</div>
	<header class="search-box">
	<section class="search-sec">
    <div class="container">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-16">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-16 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Where?">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-16 p-0">
                            
                            <input id="datepicker" class="form-control" width="100%" height="50px!important" placeholder="When?"/>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-16 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Capacity">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-16 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>For what?</option>
                                <option>Conference Room</option>
                                <option>Theatre Room</option>
                                
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-16 p-0">
                            <button type="button" class="btn btn-danger wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
</header>
</header>

 <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>-->



<header class="info" style="margin-left: 8%; margin-bottom: 4%;">
<div class="container">


<div class="media">
  <img style=" width: 4%;"src="../image/checkmark.png" class="mr-3" alt="...">
  <div class="media-body">
    <h4 class="mt-6">Best price guaranteed for 1,500 <br>
		atypical rooms & places verified</h4>
    Simple Reservation process.
  </div>
 <img style=" width: 4%;"src="../image/rotation.png" class="mr-3" alt="...">
  <div class="media-body">
    <h4 class="mt-6">Ensure your reservation through <br>a meeting.</h4>
    Physical interview with the owner.
  </div>
   <img style=" width: 4%;"src="../image/find.png" class="mr-3" alt="...">
  <div class="media-body">
    <h4 class="mt-6">Detailed and customized research</h4>
    Effective search.
  </div>


  
</div>
</header>
	
	

<!--recomandations -->
<header class="test"><h2 style=" margin-bottom: 6%;
">Recommendations</h2>
<div class="row row-cols-1 row-cols-md-3">
  <?php require_once '../Configuration.php';
         $db = new Db();
            

    $sql = "SELECT * FROM espace  limit 4";
               
                
       $result= $db-> query($sql);
       while($aff=mysqli_fetch_array($result))
       { ?>
  <div class="col mb-4">
    <div class="card h-100">
      <img src="../image/<?php echo $aff['image']; ?>" class="card-img-top" alt="This zooms-in really well and smooth">

      <div class="card-body text-center">
        <h3 class="card-title">
    
         <?php echo $aff['type']; ?></h3> 
        <p class="card-text"> <?php echo $aff['nomesp']; ?></p>
        <a href="RoomDetails.php?id=<?php echo $aff['id_espace']; ?>" class="btn btn-primary">Reserve</a>
      </div>
    </div>
    
  </div>
  <?php } ?>

  </header>
</div>
</div>
<header>
<div class="container"><h2 style="margin-left: 2%;     margin-bottom: 6%;
">What we provide</h2>
<div class="row" style="margin-left: 5%;">
  <div class="col"><img style=" width: 40%; margin-left: 20%;" src="../image/Groupe 117.png" alt=""></div>
  
  <div class="col"><img style="width: 45%;margin-left: 20%;" src="../image/Groupe 118.png" alt=""></div>

  <div class="col"><img style=" width: 40%;margin-left: 20%;" src="../image/Groupe 119.png" alt=""></div>

  <div class="col"><img style=" width: 40%;margin-left: 20%;" src="../image/Groupe 123.png" alt=""></div>

  <div class="col"><img style=" width: 40%;margin-left: 20%;" src="../image/Groupe 124.png" alt=""></div>

</div>
</div>
</header>
<div class="container">
<div class="row">
  <div class="col" style="text-align: center; margin-left: 6%; margin-bottom:7%;"><a>Enjoy your conference</a></div>
  
  <div class="col"><a>Check disponibilities</a></div>

  <div class="col"><a>Reserve</a></div>

  <div class="col"><a>Plan a meeting</a></div>

  <div class="col"><a>Add your own room</a></div>

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
<img src="../image/reserv&meet-logo.png" style="float: right; margin:auto;"></div>


</section>
<div class="bg-info clearfix" style="background-color: #000!important;">
<div class="footer-copyright text-center py-1" style="background-color:#3F9ADF; color: #fff; width: 40%; float:right; border-radius: 5%;    margin-right: 12%;
"><a>© 2019 Copyright: Reserve and meet</a>
    

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

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 4 DatePicker</title>
    
    <link rel="stylesheet"  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    
</head>
<body>
    
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
</body>
</html>